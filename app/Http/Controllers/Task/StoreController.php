<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['date_time'] = Carbon::createFromFormat('d.m.Y H:i', $data['date_time'])->format('Y-m-d H:i:s');
        Task::firstOrCreate($data);

        return redirect()->route('task.index');
    }
}
