<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;

    public function getAllProject($t_id){
        return DB::table('project')
        ->select('*')
        ->where('project.t_id','=',$t_id)
        ->get();
    }

    public function createNewProject($t_id,$p_name,$p_request,$p_major,$p_quantity){
        return DB::table('project')->insert([
            't_id' => $t_id,
            'p_name' => $p_name,
            'p_request' => $p_request,
            'p_major' => $p_major,
            'p_quantity' => $p_quantity

        ]);
    }

    

    
}
