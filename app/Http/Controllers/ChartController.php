<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Student;

class ChartController extends Controller
{
    public function index()
    {
        $facultyCounts = Faculty::select('department', \DB::raw('count(*) as total'))
            ->groupBy('department')
            ->get();

        $studentCounts = Students::select('department', \DB::raw('count(*) as total'))
            ->groupBy('department')
            ->get();

        return view('admin_dashboard', compact('facultyCounts', 'studentCounts'));
    }
}
