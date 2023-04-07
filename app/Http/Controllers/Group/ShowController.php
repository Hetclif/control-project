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
        $user = User::find($group->head_id);

        return view('group.show', compact('group', 'user'));
    }
}
