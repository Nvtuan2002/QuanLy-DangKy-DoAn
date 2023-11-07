<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Student;

class LoginController extends Controller
{
    
    
    public function getLogin()
    {
        return view('login');

        // dd(session('role'));
    }

    public function checkLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $dataDB = DB::table('student')
            ->where('stu_email', $email)
            ->where('stu_password', $password)
            ->get();

        $dataDB1= DB::table('teacher')
        ->where('t_email', $email)
        ->where('t_password', $password)
        ->get();

        

        // dd($dataDB);

        if(!empty($dataDB[0])){
            $request->session()->put('role',$dataDB[0]->role);
            $request->session()->put('id',$dataDB[0]->stu_id);

            // dd(session('role'));
            return redirect()->route('student.dashboard');

        }
        elseif(!empty($dataDB1[0])){
            $request->session()->put('role',$dataDB1[0]->role);
            $request->session()->put('id',$dataDB1[0]->t_id);
            // dd(session('role'));
            return redirect()->route('teacher.TE_dashboard');
        }
        else{
            dd($request);
        };

        // dd($request->all());

        //     if (Auth::attempt([
        //         'email' => $email,
        //         'password' => $password
        //     ])) {
        //         $dataUser = DB::table('student')
        //             ->where('stu_email', $email)
        //             ->first();
        //         dd($dataUser);
        //     };
    }
}
