<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

use App\Models\Student;

use App\Models\Status;

use App\Models\File;




class TeacherController extends Controller
{
    private $teacher;
    private $student;
    private $changeStatus;
    private $file;


    public function __construct()
    {
        $this->teacher = new Teacher();

        $this->student = new Student();

        $this->changeStatus = new Status();

        $this->file = new File();


    }

    public function getAllProject()
    {

        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        if ($studentData->stu_status == 0) {
            $allProject = $this->teacher->getAllProject();
            return view('students.register', compact('allProject', 'studentData'));
        } elseif ($studentData->stu_status == 1) {
            return view('error.requestJoinProject',compact('studentData'));
        } elseif ($studentData->stu_status == 2) {
            return redirect()->route('student.register_attend')->with(['studentData' => $studentData]);

        }elseif($studentData->stu_status == 3){
            return view('error.requestJoinGroup',compact('studentData'));
        }
         else {
            return view('error.registered',compact('studentData'));
        }
    }

    public function dashboard(){
        $t_id = session('t_id');

        $dataTeacher = $this->teacher->getDataTeacher($t_id);

        $dataTeacher =  $dataTeacher[0];

        $totalStudentRegis = $this->teacher->getToltalStudentRegis();

        $totalProject = $this->teacher->getTotalProject();

        $totalTeacher = $this->teacher->getTotalTeacher();

        $totalStudentNotRegis = $this->teacher->getToltalStudentNotRegis();




        return view('teachers.TE_dashboard',compact('dataTeacher','totalStudentRegis','totalProject','totalTeacher','totalStudentNotRegis'));
        
    }

    public function getAllStudentRegis(){
        $t_id = session('t_id');

        $dataTeacher = $this->teacher->getDataTeacher($t_id);

        $dataTeacher =  $dataTeacher[0];

        $dataStudentRegis = $this->teacher->studentRegisProject($t_id);

        // dd($dataStudentRegis);

        return view('teachers.register_list',compact('dataTeacher','dataStudentRegis'));
    }

    public function getAllStudentRequestProject(){
        $t_id = session('t_id');

        $dataTeacher = $this->teacher->getDataTeacher($t_id);

        $dataTeacher =  $dataTeacher[0];

        $dataStudentRequest = $this->teacher->studentRequestPorject($t_id);


        return view('teachers.register_wait',compact('dataTeacher','dataStudentRequest'));

    }

    public function getObserveGroup(){
        $t_id = session('t_id');

        $dataTeacher = $this->teacher->getDataTeacher($t_id);

        $dataTeacher =  $dataTeacher[0];

        $dataGroup = $this->teacher->getGroupToObserve($t_id);

        // dd($dataGroup);

        // dd($dataTeacher);

        return view('teachers.monitor_process',compact('dataTeacher','dataGroup'));
    }

    public function observeGroup($group_id){

        $t_id = session('t_id');

        $dataTeacher = $this->teacher->getDataTeacher($t_id);

        $dataTeacher =  $dataTeacher[0];

        $dataGroup = $this->student->getDataGroup($group_id);

        $dataGroup = $dataGroup[0];

        $memberGroup = $this->student->getMemberGroup($group_id);

        $dataFile = $this->file->getAllDataFile($group_id);

        // dd($dataFile);
        
        // dd($memberGroup);


        return view('teachers.monitor_group',compact('dataTeacher','dataGroup','memberGroup','dataFile'));
    }



    


    

}
