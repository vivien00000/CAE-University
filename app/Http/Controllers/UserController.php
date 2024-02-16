<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use DB;

class UserController extends Controller
{
    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('user_login');
    }

    public function login(Request $r)
    {
        // User::where("user_id", "=", 1602)
        //     ->update(
        //         [
        //             'password' => Hash::make("1234")
        //         ]
        //         );
        //         return "1";

        $user = User::where("email_address", "=", $r->email_address)
            ->first();

        // return $user;

        if ($user) {
            if (Hash::check($r->password, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email_adress);
                Session::put('role', $user->role);
                Session::put('student_id', $user->student_id);
                if (Session::get('role') == 'admin') {
                    return redirect('/students')->with('success', 'Logged in as admin!');
                } else if (Session::get('role') == 'user') {
                    return redirect('/user_dashboard')->with('success', 'Welcome, ' . Session::get('first_name') . '!');
                }
            } else {
                return redirect('/user_login')->with('fail', 'Incorrect password.');
            }
        } else {
            return redirect('/user_login')->with('fail', 'An account with that email does not exist.');
        }
    }

    public function user_login()
    {
        return view('user_dashboard');
    }
}
