<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classrooms;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Classrooms $classroom)
    {
        $classroom->delete();

        return redirect()->route('classroom.index');
    }
}
