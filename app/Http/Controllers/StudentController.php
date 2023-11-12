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

        // dd(count($studentDataDetail));

        // dd($request);
        return view('students.infoStudent', compact('studentDataDetail', 'studentData'));
    }


    public function updateInfoStudent(Request $request)
    {

        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        if ($request->hasFile('img_change')) {
            $stu_avt_change = $request->file('img_change')->getClientOriginalName();
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

        if (empty($stu_skill1) && empty($stu_skill2) && empty($stu_skill3) && empty($stu_skill4)) {
            return "pleasd write down at least 1 skill";
        } else {
            $array = [
                $stu_skill1 => $stu_skill_detail1,
                $stu_skill2 => $stu_skill_detail2,
                $stu_skill3 => $stu_skill_detail3,
                $stu_skill4 => $stu_skill_detail4,
            ];
        }

        dd($array);

        foreach ($array as $key => $value) {
            $this->student->createSkill($id, $key, $value);
        }

        // dd($array);


        return back();
        // dd($request->stu_skill);


    }

    public function requestJoinGroup($group_id)
    {
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];



        $this->changeStatus->changeStatus3($id, $group_id);

        return view('error.requestJoinGroup', compact('studentData'));
    }

    public function seeInfoRequest($stu_id)
    {
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        $dataStudentRequest = $this->student->getdataStudentRequest($stu_id);

        $dataStudentRequest = $dataStudentRequest[0];
        // dd($dataStudentRequest);

        return view('students.InfoStudent_see', compact('studentData', 'dataStudentRequest'));
    }


    public function getCalender()
    {
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        return view('students.calendar', compact('studentData'));
    }

    public function showChat()
    {
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];

        $group_id = $studentData->group_id;

        // $stu_nickname = $studentData->stu_nickname;

        
        if (empty($group_id)) {
            return view('error.errorContact', compact('studentData'));
        } else {
            $dataNameMessage = $this->notification->getNameMessage($group_id);
            
            $dataGroup1 = $this->student->getDataGroup($group_id);
            
            $dataMessage = $this->notification->getMessage($group_id);
            
            // dd($dataMessage);
            return view('students.contact', compact('studentData', 'dataGroup1', 'dataMessage','dataNameMessage'));
        }
    }

    public function handlePostMessage(Request $request)
    {

        $message = $request->message;

        $stu_id = session('id');

        $studentData = $this->student->getDataStudent($stu_id);

        $studentData = $studentData[0];

        $group_id = $studentData->group_id;

        $stu_name = $studentData->stu_nickname;

        // dd($stu_name);

        // dd($group_id);

        $this->notification->upMessagefromStudent($group_id, $message, $stu_id,$stu_name);
        return back();
    }
}
