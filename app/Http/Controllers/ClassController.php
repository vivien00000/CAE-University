<?php

namespace App\Http\Controllers;

use DB;

<<<<<<< HEAD
=======
<<<<<<< HEAD
// use Kyslik\ColumnSortable\Sortable;
=======
use Kyslik\ColumnSortable\Sortable;
>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
use App\Models\Subjects;
use Illuminate\Http\Request;

class ClassController extends Controller
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    // use Sortable;
=======
    use Sortable;
>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94

    public function index()

    {
        $subjects = Subjects::query()
<<<<<<< HEAD
        ->join('classes as c', 'c.subject_id', '=', 'subjects.subject_id')
        ->join('student_classes as sc', 'sc.class_id', '=', 'c.class_id')
        ->join('students as st', 'sc.student_id', '=', 'st.student_id')
        ->join('faculty as f', 'f.faculty_id', '=', 'c.faculty_id')
        ->orderBy('f.department')
        ->LIMIT(10)
        ->get();

        return view('user_courses', compact('subjects'));
    }


}
=======
<<<<<<< HEAD
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
=======
        ->select('class_id', 'schedule', 'room', 'name', 'faculty.first_name', 'faculty.last_name')
        ->join('classes', 'subjects.subject_id', '=' , 'classes.subject_id')
        ->join('faculty', 'classes.faculty_id', '=' , 'faculty.faculty_id')
        ->limit(10)
        ->get();

        $subjects = $subjects
            ->sortable()->paginate(20);
        $subjects->appends($r->except('page'));
>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63


        return view('user_courses', compact('subjects'));
    }
<<<<<<< HEAD
}
=======


}

>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
