<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Status;


use Illuminate\Contracts\Cache\Store;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;


class StudentController extends Controller
{

    private $student;


    private $changeStatus;



    public function __construct()
    {
        $this->student = new Student();

        $this->changeStatus = new Status();
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

        dd($request->file());
    }
}
