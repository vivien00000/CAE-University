<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $total_students = DB::select("SELECT COUNT(*) AS total FROM students");
        $students=DB::select("SELECT student_id, last_name, first_name, year_level, date_enrolled  FROM students ORDER BY last_name LIMIT 10");

        return view('students', compact('total_students', 'students'));
    }
}
