<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Group $group)
    {
        $users = User::all();
        return view('group.edit', compact('group', 'users'));
    }
}
