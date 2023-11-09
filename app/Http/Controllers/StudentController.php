<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
 

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
        return view('students.infoStudent', compact('studentDataDetail','studentData'));
    }


    public function updateInfoStudent(Request $request){

        // dd($request);

    }

    public function studentGroup()
    {
        
        $id = session('id');

        $studentData = $this->student->getDataStudent($id); // pass data to header

        $studentData = $studentData[0]; // convert to object

        $checkstatus = $this->student->getDataStudent($id)[0]->stu_status; // check status student join group yet
        
        $dataGroup = $this->student->getDataGroup($id); // render data in groupSV

        $dataGroup = $dataGroup[0]; //convert data to object


        if ($checkstatus != 4) {
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

    public function getAllGroup(){

        $id = session('id');

        $studentData = $this->student->getDataStudent($id); // pass data to header

        $studentData = $studentData[0]; // convert to object

        $p_id = $studentData -> p_id;

        // dd($p_id);

        $allGroup = $this->student->getAllGroup($p_id);

        
        // dd($allGroup);

        // dd($t_id);
        
        return view('students.register_attend',compact('allGroup','studentData'));
    }

    public function getCreateGroup(){

        $id = session('id');

        
        $studentData = $this->student->getDataStudent($id); // pass data to header
        
        $studentData = $studentData[0]; // convert to object
        

        
        $p_id = $studentData->p_id;

        $getProjectName = $this->student->getAllGroup($p_id);
        $getProjectName = $getProjectName[0]->p_name;
        
        
        $count = $this->student->countGroupNumber($p_id);

        $nextNumber =$count[0]->number + 1;
        // dd($nextNumber);
        return view('students.register_create',compact('studentData','nextNumber','getProjectName'));
    }

    public function handleCreateGroup(Request $request){

        $id = session('id');

        $studentData = $this->student->getDataStudent($id); // pass data to header

        $studentData = $studentData[0]; // convert to object


        $group_leader = $request-> group_leader;
        $group_avt = $request->file('group_avt')->getClientOriginalName();
        $group_request = $request-> group_request;
        $p_id = $studentData->p_id;
        $group_quantity = $request-> group_quantity;
        $group_number = $request-> group_number;
        $group_name = $request-> group_name;
        $t_id =$studentData->t_id;

        

        if ($request->hasFile('group_avt')) {
            $request->file('group_avt')->storeAs('public/image',$group_avt); // store image into

            $this -> student -> createGroup($group_leader, $group_avt, $group_request, $p_id, $group_quantity, $group_number, $group_name, $t_id);
        }else{
            return 'deo co file';
        }

        return back();
        
    }



    


    
}
