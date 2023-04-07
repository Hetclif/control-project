<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('group.create', compact('users'));
    }
}
