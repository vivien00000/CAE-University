<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Students;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function delete_student(string $id)
    {
        $student = Students::where('student_id', '=', $id)
            ->delete();

        return redirect('/students')
            ->with('success', 'Successfully deleted.');
    }

    public function generate_report_student()
    {
        $students = Students::query()
            ->select('*')
            ->limit('360')
            ->get();

        $pdf = Pdf::loadView('students_report', compact('students'));
        return $pdf->download(date('Y-m-d') . 'STUDENT_REPORT.pdf');
        // return view('student_report', compact('students'));
    }


    public function edit_student(Request $r, string $id)
    {
        $students = Students::where('student_id', '=', $id)
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'birthdate' => $r->input('birthdate'),
                    'year_level' => $r->input('year_level'),
                    'gender' => $r->input('gender'),
                    'mobile_number' => $r->input('mobile_number'),
                    'email_address' => $r->input('email_address'),
                ]
            );
        return redirect('/students')
            ->with('success', 'Successfully edited.');
    }
    public function edit_student_form(string $id)
    {
        $students = Students::query()
            ->select('*')
            ->where('student_id', '=', $id)
            ->get()
            ->first();

        return view('students_edit', compact('students'));
    }

    public function add_student(Request $r)
    {
        $student = new Students;
        $student->first_name = $r->input('first_name');
        $student->last_name = $r->input('last_name');
        $student->birthdate = $r->input('birthdate');
        $student->year_level = $r->input('year_level');
        $student->gender = $r->input('gender');
        $student->mobile_number = $r->input('mobile_number');
        $student->email_address = $r->input('email_address');
        $student->province = $r->input('province');
        $student->save();

        return redirect("/students")
            ->with('success', 'Successfully added');
    }


    public function add_student_form()
    {
        return view('students_create');
    }

    public function student_show(string $id)
    {
        $students = Students::query()
            ->select('*')
            ->where('student_id', '=', $id)
            ->get()
            ->first();

        return view('student_show', compact('students'));
    }

    public function view_account()
    {
        $students = Students::query('student_id', '=', '1')
=======
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
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
            ->select('*')
            ->get()
            ->first();

        return view('user_account', compact('students'));
    }

<<<<<<< HEAD

    public function index()
    {
        $total_students = DB::select("SELECT COUNT(*) AS total FROM students");
        $students = DB::select("SELECT student_id, last_name, first_name, year_level, date_enrolled, email_address FROM students ORDER BY student_id DESC LIMIT 10");

        return view('students', compact('total_students', 'students'));
    }
=======
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
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
}
