<?php

namespace App\Http\Controllers;

use DB;

use Kyslik\ColumnSortable\Sortable;
use App\Models\Subjects;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    use Sortable;

    public function index()

    {
        $subjects = Subjects::query()
        ->select('class_id', 'schedule', 'room', 'name', 'faculty.first_name', 'faculty.last_name')
        ->join('classes', 'subjects.subject_id', '=' , 'classes.subject_id')
        ->join('faculty', 'classes.faculty_id', '=' , 'faculty.faculty_id')
        ->limit(10)
        ->get();

        $subjects = $subjects
            ->sortable()->paginate(20);
        $subjects->appends($r->except('page'));


        return view('user_courses', compact('subjects'));
    }


}

