<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\StoreRequest;
use App\Models\Classrooms;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Classrooms::firstOrCreate($data);

        return redirect()->route('classroom.index');
    }
}
