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
            ->select('teacher.t_name', 'project.*')
            ->join('project', 'teacher.t_id', '=', 'project.t_id')
            ->get();
    }
}
