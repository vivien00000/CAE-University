<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Student;
use App\Models\StudentsPhoto;
use App\Models\Notification;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use DB;

class UserController extends Controller
{
public function login(Request $r)
    {
        $user = User::where("email", "=", $r->email)
            ->first();

        if ($user) {
            if (Hash::check($r->pw, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email);
                Session::put('role', $user->role);
                Session::put('student_id', $user->student_id);
                if (Session::get('role') == 'admin') {
                    return redirect('/admin/students')->with('success', 'Logged in as admin!');
                } else if (Session::get('role') == 'user') {
                    return redirect('/profile')->with('success', 'Welcome, ' . Session::get('first_name') . '!');
                }
            } else {
                return redirect('/login')->with('fail', 'Incorrect password.');
            }
        } else {
            return redirect('/login')->with('fail', 'An account with that email does not exist.');
        }
    }

    public function show_login()
    {
        return view('login');
    }
  }