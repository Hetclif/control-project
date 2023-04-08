<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $groups = Group::all();

        return view('attendance.index',
            compact('groups'));
    }
}
