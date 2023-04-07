<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classrooms;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Classrooms $classroom)
    {
        return view('classroom.show', compact('classroom'));
    }
}
