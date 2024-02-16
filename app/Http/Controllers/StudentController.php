<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Support\Facades\DB;

use App\Models\Students;
use App\Models\Course;
=======
use DB;

>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
use Illuminate\Http\Request;

class StudentController extends Controller
{
<<<<<<< HEAD
    // public function user_course()
    // {
    //     $course = Course::query()
    //         ->select('*')
    //         ->get();

    //     return view('/user_account', compact('course'));
    // }

    public function index()
    {
        $total_students = DB::select("SELECT COUNT(*) AS total FROM students");
        $students = DB::select("SELECT student_id, last_name, first_name, year_level, date_enrolled  FROM students ORDER BY last_name LIMIT 10");

        return view('students', compact('total_students', 'students'));
    }

    // public function view_account()
    // {

    //     $studentId = auth()->user()->student_id;

    //     $student = Students::where('student_id', $studentId)->first();

    //     return view('user_account', compact('student'));
    // }

    // public function merchandise()
    // {
    //     return view('user_merch');
    // }
    public function view_account()
    {
        $students = Students::where('student_id', '=', '1')
            ->select('*')
            ->get()
            ->first();

        return view('user_account', compact('students'));
    }

    // public function show_course()
    // {
    //     $course = Course::query()
    //         ->select('course')
    //         ->join('student_classes as co', 'co.sc_id', '=', 'sc.sc_id')
    //         ->get();

    //     return view('user_dashboard', compact('course'));
    // }
=======
    public function index()
    {
        $total_students = DB::select("SELECT COUNT(*) AS total FROM students");
        $students=DB::select("SELECT student_id, last_name, first_name, year_level, date_enrolled  FROM students ORDER BY last_name LIMIT 10");

        return view('students', compact('total_students', 'students'));
    }
>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
}
