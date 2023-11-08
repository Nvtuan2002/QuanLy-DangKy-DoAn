<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

use App\Models\Student;


class TeacherController extends Controller
{
    private $teacher;
    private $student;

    public function __construct() {
        $this->teacher = new Teacher();
        $this->student = new Student();
    }

    public function getAllProject(){

        $id = session('id');

        $studentData = $this->student->getDataStudent($id);

        $studentData = $studentData[0];


        $allProject = $this->teacher->getAllProject();

        return view('students.register',compact('allProject','studentData'));
    }
}
