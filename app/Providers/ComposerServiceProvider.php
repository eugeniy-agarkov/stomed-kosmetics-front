<?php

namespace App\Providers;

use App\Http\ViewComposers\ClinicComposer;
use App\Http\ViewComposers\DirectionCategoryComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('layouts.header', ClinicComposer::class);
        view()->composer(['layouts.header', 'layouts.footer'], DirectionCategoryComposer::class);

    }
}
