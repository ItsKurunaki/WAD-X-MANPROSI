<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Jadwalkan command
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    // Daftarkan command
    protected $commands = [
        \App\Console\Commands\MakeFilamentUser::class,  // Pastikan menulis dengan benar
    ];
    protected $routeMiddleware = [
        // Middleware lainnya
        'admin' => \App\Http\Middleware\RedirectIfNotAdmin::class,
        'user' => \App\Http\Middleware\RedirectIfNotUser::class,
    ];
    
}
