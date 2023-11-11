<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Status;
use App\Models\File;
use App\Models\Project;
use App\Models\StudentRequest;

class ProjectController extends Controller
{

    private $teacher;
    private $student;
    private $changeStatus;
    private $project;


    public function __construct()
    {
        $this->teacher = new Teacher();

        $this->student = new Student();

        $this->changeStatus = new Status();

        $this->project = new Project();
    }

    public function getAllProject()
    {

        $t_id = session('t_id');

        $dataTeacher = $this->teacher->getDataTeacher($t_id);

        $dataTeacher =  $dataTeacher[0];

        $dataProject = $this->project->getAllProject($t_id);

        // dd($dataProject);

        return view('teachers.update', compact('dataTeacher', 'dataProject'));
    }

    public function createNewProject()
    {
        $t_id = session('t_id');

        $dataTeacher = $this->teacher->getDataTeacher($t_id);

        $dataTeacher =  $dataTeacher[0];

        return view('teachers.update_new', compact('dataTeacher'));
    }

    public function handleCreateProject(Request $request)
    {
        $t_id = session('t_id');
        $p_name = $request->p_name;
        $p_request = $request->p_request;
        $p_major = $request->p_major;
        $p_quantity = $request->p_quantity;
        
        $this->project->createNewProject($t_id, $p_name,$p_request,$p_major, $p_quantity);
    }

    
}
