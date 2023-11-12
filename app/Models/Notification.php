<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notification extends Model
{
    use HasFactory;

    public function setNotificationGroup($group_id,$rate_noti){
        return DB::table('group_rate')
        ->insert([
            'group_id' => $group_id,
            'rate_noti'=> $rate_noti,
            'rate_score'=> 0,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);

    }

    public function setMeeting($group_id,$date_meeting,$stime,$etime){
        return DB::table('meeting_calender')
        ->where('group_id',$group_id)
        ->insert([
            'group_id' => $group_id,
            'p_id' => 0,
            't_id' => 0,
            'day' => $date_meeting,
            'stime' => $stime,
            'etime' => $etime,
        ]);
    }

    public function getDataGroupTeacher($t_id){
        return DB::table('student_group')
        ->select('student_group.group_id', 'student_group.group_number')
        ->where('t_id','=',$t_id)
        ->get();
    }

    public function getMessage($group_id){
        return DB::table('chat')
        ->select('*')
        ->where('group_id','=',$group_id)
        ->get();
    }

    public function upMessagefromTeacher($t_id,$group_id,$message){
        return DB::table('chat')
            ->insert([
                'group_id' => $group_id,
                'chat_sender'=>0,
                'chat_message' => $message,
                'created_at' =>date('Y-m-d H-s-i'),
                't_id' => $t_id,
                'p_id'=>0,
                'stu_id'=>0
            ]);
        
    }

    public function upMessagefromStudent($group_id,$message,$stu_id){
        return DB::table('chat')
            ->insert([
                'group_id' => $group_id,
                'chat_sender'=>1,
                'chat_message' => $message,
                'created_at' =>date('Y-m-d H-s-i'),
                't_id' =>0,
                'p_id'=>0,
                'stu_id'=>$stu_id
            ]);
        
    }

}