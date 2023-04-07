<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classrooms;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Classrooms $classroom)
{
    return view('classroom.edit', compact('classroom'));
}
}
