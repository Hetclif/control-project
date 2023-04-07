<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\UpdateRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Group $group)
    {
        $data = $request->validated();
        $group->update($data);

        $user = User::find($group->head_id);

        return view('group.show', compact('group', 'user'));
    }
}
