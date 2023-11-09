<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Teacher extends Model
{
    use HasFactory;

    public function getAllProject()
    {
        return DB::table('teacher')
            ->select('teacher.t_name','teacher.t_id', 'project.*')
            ->join('project', 'teacher.t_id', '=', 'project.t_id')
            ->get();
    }

    public function changeStatus($id,$status,$p_id,$t_id){
        return DB::table('student')
        ->where('stu_id',$id)
        ->update([
            'stu_status' => $status,
            'p_id' => $p_id,
            't_id' => $t_id,
    ]);
    }
}
