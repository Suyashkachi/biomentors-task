<?php

namespace App\Providers;

use App\Events\TestCreated;
use App\Listeners\GeneratePdf;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TestCreated::class => [GeneratePdf::class],
    ];

    public function boot()
    {

    }

    public function shouldDiscoverEvents()
    {
        return false;
    }
}
