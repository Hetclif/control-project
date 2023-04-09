<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    public function __construct(Application $app, Dispatcher $dispatcher)
    {
        parent::__construct($app, $dispatcher);
        date_default_timezone_set('Europe/Moscow');
    }

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:first-lesson')->dailyAt('09:30');
        $schedule->command('app:third-lesson')->dailyAt('11:15');
        $schedule->command('app:fourth-lesson')->dailyAt('13:35');
        $schedule->command('app:second-lesson')->dailyAt('15:20');


    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
