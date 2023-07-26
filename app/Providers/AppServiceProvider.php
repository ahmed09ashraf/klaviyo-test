<?php

namespace App\Providers;

use App\Channels\KlaviyoMailChannel;
use Illuminate\Support\ServiceProvider;
use App\Channels\KlaviyoChannel;
use Illuminate\Notifications\Channels\MailChannel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
