<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use DB;

class UserController extends Controller
{
<<<<<<< HEAD

    public function show_dashboard()
    {
        $students = Students::query()
            ->select(DB::raw('COUNT(*) AS stud_count'))
            ->groupBy('year_level')
            ->get();

        $entries = [];
        foreach ($students as $s) {
            array_push($entries, $s->stud_count);
        }

        $data = [
            'labels' => ['1st Year', '2nd Year', '3rd Year', '4th Year'],
            'data' => $entries,
        ];

        return view('admin_dashboard', compact('data'));
    }

    public function logout()
    {
=======
    public function logout()
    {
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
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
<<<<<<< HEAD
                    return redirect('/user_dashboard')->with('success', 'Welcome, ' . Session::get('first_name') . '!');
=======
<<<<<<< HEAD
                    return redirect('/user_dashboard')->with('success', 'Welcome, ' . Session::get('first_name') . '!');
=======
                    return redirect('/user_page')->with('success', 'Welcome, ' . Session::get('first_name') . '!');
>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
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
<<<<<<< HEAD
        return view('user_dashboard');
    }
}


=======
<<<<<<< HEAD
        return view('user_dashboard');
=======
        return view('user_page');
>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
    }
}
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
