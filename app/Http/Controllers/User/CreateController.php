<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $groups = Group::all();
        return view('user.create',compact('groups'));
    }
}
