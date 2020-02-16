<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        if (class_exists(\App\Repo::class)) {
            // Refresh sushi.
            $connection = \App\Repo::sushiConnectionName();
            \DB::setDefaultConnection($connection);
            (new \App\Repo);
        }
    }
}
