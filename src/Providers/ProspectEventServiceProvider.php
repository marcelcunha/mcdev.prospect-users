<?php

namespace MCDev\ProspectUsers\Providers;

use Illuminate\Support\ServiceProvider;
use MCDev\ProspectUsers\Events\ProspectUserEvent;
use MCDev\ProspectUsers\Listeners\ProspectUserListener;

class ProspectEventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ProspectUserEvent::class => [
            ProspectUserListener::class
        ]
    ];
}
