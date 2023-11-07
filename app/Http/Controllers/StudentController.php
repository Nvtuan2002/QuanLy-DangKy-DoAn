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
}
