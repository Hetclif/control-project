<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $group = Group::find($user->group_id);

        if(!$group)
        {
            $group = new Group(['name' => ' ']);
        }

        return view('user.show', compact('user','group'));
    }
}
