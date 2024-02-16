<?php

namespace App\Http\Controllers;

use DB;

// use Kyslik\ColumnSortable\Sortable;
use App\Models\Subjects;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // use Sortable;

    public function index()

    {
        $subjects = Subjects::query()
            ->join('classes as c', 'c.subject_id', '=', 'subjects.subject_id')
            ->join('student_classes as sc', 'sc.class_id', '=', 'c.class_id')
            ->join('students as st', 'sc.student_id', '=', 'st.student_id')
            ->join('faculty as f', 'f.faculty_id', '=', 'c.faculty_id')
            ->orderBy('f.department')
            ->LIMIT(10)
            ->get();


        // $subjects = $subjects
        //     ->sortable()->paginate(20);
        // $subjects->appends($r->except('page'));


        return view('user_courses', compact('subjects'));
    }
}
