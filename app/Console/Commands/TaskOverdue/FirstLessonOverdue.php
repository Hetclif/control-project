<?php

namespace App\Console\Commands\TaskOverdue;

use App\Models\Task;
use Illuminate\Console\Command;

class FirstLessonOverdue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:first-lesson-overdue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'First lessons task overdue';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $curDate = date('Y-m-d 09:30:00');

        Task::where('date_time', $curDate)
            ->where('completed', 1)
            ->update(['completed' => 3]);
    }
}
