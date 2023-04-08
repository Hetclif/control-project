<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Http\Requests\Timetable\UpdateRequest;
use App\Models\Classrooms;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Timetable $timetable)
    {
        $data = $request->validated();
        $timetable->update($data);

        $group = Group::find($timetable->group_id);
        $lesson = Lessons::find($timetable->lesson_id);
        $user = User::find($timetable->teacher_id);
        $classroom = Classrooms::find($timetable->classroom_id);

        return view('timetable.show',
            compact('timetable', 'group', 'lesson', 'user', 'classroom'));
    }
}
