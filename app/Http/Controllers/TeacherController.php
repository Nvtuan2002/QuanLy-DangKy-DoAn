<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

use App\Models\Student;

use App\Models\Status;



class TeacherController extends Controller
{
    private $teacher;
    private $student;
    private $changeStatus;


    public function __construct()
    {
        $this->teacher = new Teacher();

        $this->student = new Student();

        $this->changeStatus = new Status();

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
            return "dang xu li";
        } elseif ($studentData->stu_status == 2) {
            return redirect()->route('student.register_attend')->with(['studentData' => $studentData]);

        } else {
            return "ban da dang ki do an";
        }
    }

    public function handleJoinProject(Request $request, $p_id, $t_id)
    {

        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        // dd($p_id);

        // $this->teacher->changeStatus($id, 1, $p_id, $t_id);

        $this->changeStatus->changeStatus1($id,$p_id, $t_id);


        return back();
        // dd($this->student->getDataStudent($id)[0]->stu_status);
        //     if ($studentData->stu_status == 1) {
        //         return redirect()->route('student.register_attend')->with(['studentData' => $studentData]);
        //     }
        //     else{
        //     }
    }
}
