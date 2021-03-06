<?php

namespace App\Providers;

use App\Events\ArticleWasCreated;
use App\Listeners\ArticleWasCreated\UpdateArticlesCount;
use App\Listeners\CounterListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ArticleWasCreated::class => [
            //CounterListener::class,
            UpdateArticlesCount::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
