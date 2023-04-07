<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classrooms;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $classrooms = Classrooms::all();
        return view('classroom.index', compact('classrooms'));
    }
}
