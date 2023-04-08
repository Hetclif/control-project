<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Models\Timetable;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Timetable $timetable)
    {
        $timetable->delete();

        return redirect()->route('timetable.index');
    }
}
