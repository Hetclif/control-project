<?php

namespace App\Console\Commands\TaskOverdue;

use App\Models\Task;
use Illuminate\Console\Command;

class SecondLessonOverdue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:second-lesson-overdue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Second lessons task overdue';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $curDate = date('Y-m-d 11:15:00');

        Task::where('date_time', $curDate)
            ->where('completed', 1)
            ->update(['completed' => 3]);
    }
}
