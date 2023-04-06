<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\UpdateRequest;
use App\Models\Lessons;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Lessons $lesson)
    {
        $data = $request->validated();
        $lesson->update($data);

        return view('lesson.show', compact('lesson'));
    }
}
