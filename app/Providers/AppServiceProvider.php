<?php

namespace App\Providers;

use App\Models\contact;
use App\Models\papers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $company=contact::where('id',1)->first();
    view()->share('company',$company);
    $papers=papers::orderBy('id', 'DESC')->get();
    view()->share('papers',$papers);
    }
}
