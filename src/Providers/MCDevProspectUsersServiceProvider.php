<?php

namespace MCDev\ProspectUsers\Providers;

use Illuminate\Support\ServiceProvider;
use MCDev\ProspectUsers\Models\ProspectUser;
use MCDev\ProspectUsers\Console\Commands\ProspectUserInstallCommand;
use MCDev\ProspectUsers\Observers\ProspectUserObserver;

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
                ProspectUserInstallCommand::class
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
        ProspectUser::observe(ProspectUserObserver::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views/app/prospect-users', 'prospect-users');
        $this->publishes(
            [
                __DIR__ . '/../database/migrations/' => database_path('migrations'),
                __DIR__ . '/../Http/Controllers/' => 'app/Http/Controllers',

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
