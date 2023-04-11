<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        $group = Group::find($user->group_id);

        if(!$group)
        {
            $group = new Group(['name' => ' ']);
        }

        return view('user.show', compact('user', 'group'));
    }
}
