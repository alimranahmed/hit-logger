<?php

namespace AlImranAhmed\HitLogger;

use Illuminate\Support\ServiceProvider;

class HitLoggerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/hit-logger.php', 'hit-logger');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/hit-logger.php' => config_path('hit-logger.php'),
        ], 'config');

        $this->app->singleton(LogSetting::class, config('hit-logger.log_setting'));
        $this->app->singleton(LogWriter::class, config('hit-logger.log_writer'));
    }
}
