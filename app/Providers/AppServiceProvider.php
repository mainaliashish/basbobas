<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\About;
use App\Models\Team;
use App\Models\Service;

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
        // Paginator::defaultView('custom');
        Paginator::useBootstrap();
        View::share("about", About::first());
        View::share("teams", Team::all());
        View::share("services", Service::inRandomOrder()->limit(3)->get());
    }
}
