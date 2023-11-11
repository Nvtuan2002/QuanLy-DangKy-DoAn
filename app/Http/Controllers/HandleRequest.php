<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Status;
use App\Models\File;

use App\Models\StudentRequest;

class HandleRequest extends Controller
{
    private $student;


    private $changeStatus;

    private $file;

    private $studentRequest;




    public function __construct()
    {
        $this->student = new Student();

        $this->changeStatus = new Status();

        $this->file = new File();

        $this->studentRequest = new StudentRequest();
    }

    public function handleRequestJoinGroup($id,$status){
        if($status == 1){
            $this->changeStatus->changeStatus4($id);
        }else{
            $this->changeStatus->changeStatus2($id);
        }

        return back();
    }

    public function handleRequestJoinProject($id,$status){
        if($status == 1){
            $this->changeStatus->changeStatus2($id);
        }else{
            $this->changeStatus->changeStatus0($id);
        }

        return back();
    }

   
}
