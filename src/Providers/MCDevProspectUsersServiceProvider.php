<?php

namespace MCDev\ProspectUsers\Providers;

use Illuminate\Support\ServiceProvider;
use MCDev\ProspectUsers\Console\Commands\AuthInstallCommand;

class MCDevProspectUsersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
               AuthInstallCommand::class
            ]);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


        $this->publishes(
            [
                __DIR__ . '/../database/migrations/' => database_path('migrations'),
                __DIR__ . '/../Http/Controllers/' => 'app/Http/Controllers',
                __DIR__ . '/../Models/' => 'app/Models',
            ],
            'all'
        );
    }

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [];
}
