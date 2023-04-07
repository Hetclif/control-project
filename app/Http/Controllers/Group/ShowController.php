<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Group $group)
    {
        $users = User::all();
        $needUser = '';

        foreach ($users as $user){
            if($user->id == $group->head_id)
                $needUser = $user;
        }

        return view('group.show', compact('group', 'needUser'));
    }
}
