<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Status;
use App\Models\Notification;



use Illuminate\Contracts\Cache\Store;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;


class StudentController extends Controller
{

    private $student;


    private $changeStatus;

    private $notification;



    public function __construct()
    {
        $this->student = new Student();

        $this->changeStatus = new Status();

        $this->notification = new Notification();
    }

    public function dashboard()
    {

        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        // dd($studentData);

        return view('students.dashboard', compact('studentData'));
    }

    public function getInfoStudent(Request $request)
    {
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];


        $studentDataDetail = $this->student->getDataDetail($id);

        // dd($request);
        return view('students.infoStudent', compact('studentDataDetail', 'studentData'));
    }


    public function updateInfoStudent(Request $request)
    {

        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        if($request->hasFile('img_change')){
            
            $stu_avt_change =$request->file('img_change')->getClientOriginalName();
        }
        $stu_desc_change = $request->stu_desc_change;
        $stu_skill1 = $request->stu_skill1;
        $stu_skill2 = $request->stu_skill2;
        $stu_skill3 = $request->stu_skill3;
        $stu_skill4 = $request->stu_skill4;

        $stu_skill_detail1 = $request->stu_skill_detail1;
        $stu_skill_detail2 = $request->stu_skill_detail2;
        $stu_skill_detail3 = $request->stu_skill_detail3;
        $stu_skill_detail4 = $request->stu_skill_detail4;
        
        // dd($request->stu_skill);
        
        $dataupdate  = $this->student->getAllSkill($id);
        // dd($dataupdate);

        for($i= 0;$i < 4; $i++){
           echo $dataupdate[$i]->row_num;
        }
    }

    public function requestJoinProject(Request $request, $p_id, $t_id)
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

    public function getCalender(){
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        return view('students.calendar',compact('studentData'));
    }

    public function showChat(){
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        $group_id = $studentData->group_id;
        // dd($group_id);

        $dataGroup1 = $this->student->getDataGroup($group_id);

        $dataMessage = $this->notification->getMessage($group_id);

        return view('students.contact',compact('studentData','dataGroup1','dataMessage'));
    }

    public function handlePostMessage(Request $request){    

        $message = $request->message;

        $stu_id = session('id');

        $studentData = $this->student->getDataStudent($stu_id);

        $studentData = $studentData[0];

        $group_id = $studentData->group_id;

        // dd($message);

        // dd($group_id);

        $this->notification->upMessagefromStudent($group_id,$message,$stu_id);
        return back();
    }
}
