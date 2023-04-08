<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Http\Requests\Timetable\StoreRequest;
use App\Models\Timetable;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Timetable::firstOrCreate($data);

        return redirect()->route('timetable.index');
    }
}
