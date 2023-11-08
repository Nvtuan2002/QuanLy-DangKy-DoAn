<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use HasFactory;

    public function getDataStudent($id)
    {
        return DB::table('student')
            ->where('stu_id', $id)
            ->get();
    } // get data not contain stu_skill

    public function getDataDetail($id){
        return DB::table('student')
        ->join('student_skill', 'student.stu_id','=','student_skill.stu_id')
        ->where('student.stu_id','=',$id)
        ->get();
    }// fucntion using in ìnfo student 


    public function getDataGroup($id){
        //SELECT student.stu_name,student_group.group_avt,student_group.group_name,group_rate.rate_noti,group_rate.rate_score from student join student_group on student.group_id = student_group.group_id join group_rate on student_group.group_id = group_rate.group_id;
        return DB::table('student')
        ->join('student_group','student.group_id', '=' ,'student_group.group_id')
        ->join('group_rate', 'student_group.group_id', '=' ,'group_rate.group_id')
        ->select('student.stu_name','student_group.group_avt','student_group.group_name','group_rate.rate_noti','group_rate.rate_score')
        ->where('student.stu_id',$id)
        ->get();
    }

    public function getDataGroupDetails($groupid){
        return DB::table('student')
        ->select('student.stu_avt', 'student.stu_name', 'student_group.*', 'project.p_name', 'teacher.t_name')
        ->join('student_group','student_group.group_id','=','student.group_id')
        ->join('project','student_group.p_id','=','project.p_id')
        ->join('teacher','teacher.t_id','=','student_group.t_id')
        ->where('student.group_id','=',$groupid)
        ->get();
    }
    
    

    // using to show needing data in groupSV    
}
