<?php

namespace App\Console\Commands\Task;

use App\Models\Task;
use App\Models\Timetable;
use Illuminate\Console\Command;

class ThirdLesson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:third-lesson';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tasks added for 3 lesson';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $curDate = date('Y-m-d 13:35:00');
        $currentWeek = date('W');
        $numerator = ($currentWeek % 2 == 0) ? 1 : 2;

        $timetables = Timetable::where('weekday', date('N'))
            ->where('numerator', $numerator)
            ->where('lesson_number', 3)
            ->get();

        $tasks = [];

        foreach ($timetables as $timetable) {
            $newTask = [
                'completed' => '1',
                'lesson_id' => $timetable->id,
                'date_time' => $curDate,
            ];
            array_push($tasks, $newTask);
        }

        foreach ($tasks as $task){
            Task::create($task);
        }
    }
}
