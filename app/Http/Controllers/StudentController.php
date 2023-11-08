<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    private $student;


    public function __construct()
    {
        $this->student = new Student();

    }

    public function dashboard()
    {

        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];


        return view('students.dashboard', compact('studentData'));
    }

    public function getInfoStudent()
    {
        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];


        $studentDataDetail = $this->student->getDataDetail($id);

        
        return view('students.infoStudent', compact('studentDataDetail','studentData'));
        // dd($studentData);
    }

    public function studentGroup()
    {
        

        $id = session('id');

        $studentData = $this->student->getDataStudent($id); // pass data to header

        $studentData = $studentData[0]; // convert to object

        $checkgroup = $this->student->getDataStudent($id)[0]->stu_status; // check status student join group yet
        
        $dataGroup = $this->student->getDataGroup($id); // render data in groupSV

        $dataGroup = $dataGroup[0]; //convert data to object


        if ($checkgroup == 0) {
            return view('error.notJoinGroup',compact('studentData'));
        } else {
            return view('students.groupSV',compact('studentData','dataGroup'));
        };

        
        
        // dd($dataGroup);
    }

    public function getInfoGroup(){
        $id = session('id');

        $studentData = $this->student->getDataStudent($id); // pass data to header

        $studentData = $studentData[0]; // convert to object

        $groupId = $studentData->group_id;

        // dd($groupId);

        $infoGroup = $this->student->getDataGroupDetails($groupId);
        // return datagroup 

        // dd($infoGroup[0]->stu_name);

        return view('students.groupSV_detail',compact('studentData','infoGroup'));

    }


    
}
