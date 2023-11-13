<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notification extends Model
{
    use HasFactory;

    public function setNotificationGroup($group_id, $rate_noti)
    {
        return DB::table('group_rate')
            ->insert([
                'group_id' => $group_id,
                'rate_noti' => $rate_noti,
                'rate_score' => NULL,
                'created_at' =>  date('Y-m-d H:i:s')
            ]);
    }

    public function giveScoreGroup($group_id, $rate_score)
    {
        return DB::table('group_rate')
            ->insert([
                'group_id' => $group_id,
                'rate_noti' => NULL,
                'rate_score' => $rate_score,
                'created_at' =>  date('Y-m-d H:i:s')
            ]);
    }

    public function setMeeting($group_id, $date_meeting, $stime, $etime)
    {
        return DB::table('meeting_calender')
            ->where('group_id', $group_id)
            ->insert([
                'group_id' => $group_id,
                'p_id' => 0,
                't_id' => 0,
                'day' => $date_meeting,
                'stime' => $stime,
                'etime' => $etime,
            ]);
    }

    public function getDataGroupTeacher($t_id)
    {
        return DB::table('student_group')
        ->select('group_id', 'group_number', 'project.p_id', 'project.p_name')
        ->join('project','project.p_id','=','student_group.p_id')
        ->where('student_group.t_id','=',$t_id)
        ->get();
    }

    public function getMessage($group_id)
    {
        return DB::table('chat')
            ->select('*')
            ->where('group_id', '=', $group_id)
            ->get();
    }

    public function getNameMessage($group_id)
    {
        return    DB::table('chat')
            ->select('student.stu_name', 'chat.*')
            ->join('student', 'chat.stu_id', '=', 'student.stu_id')
            ->where('chat.group_id', '=', $group_id)
            ->get();
    }

    public function upMessagefromTeacher($t_id, $group_id, $message, $t_name, $t_avt)
    {
        return DB::table('chat')
            ->insert([
                'group_id' => $group_id,
                'chat_sender' => 0,
                'chat_message' => $message,
                'created_at' => date('Y-m-d H-s-i'),
                't_id' => $t_id,
                'p_id' => 0,
                'stu_id' => 0,
                'name' => $t_name,
                'avt' => $t_avt
            ]);
    }

    public function upMessagefromStudent($group_id, $message, $stu_id, $stu_name, $stu_avt)
    {
        return DB::table('chat')
            ->insert([
                'group_id' => $group_id,
                'chat_sender' => 1,
                'chat_message' => $message,
                'created_at' => date('Y-m-d H-s-i'),
                't_id' => 0,
                'p_id' => 0,
                'stu_id' => $stu_id,
                'name' => $stu_name,
                'avt' => $stu_avt
            ]);
    }
}
