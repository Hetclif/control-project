<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\UpdateRequest;
use App\Models\Classrooms;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Classrooms $classroom)
    {
        $data = $request->validated();
        $classroom->update($data);

        return view('classroom.show', compact('classroom'));
    }
}
