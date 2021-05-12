<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
         // Administrator
         Blade::directive('administrator', function () {
            return "<?php if (auth()->user()->hasRole('administrator')) { ?>";
        });

        Blade::directive('endAdministrator', function () {
            return "<?php } ?>";
        });

        // Customer
        Blade::directive('accountant', function () {
            return "<?php if (auth()->user()->hasRole('accountant')) { ?>";
        });

        Blade::directive('endAccountant', function () {
            return "<?php } ?>";
        });
    }
}
