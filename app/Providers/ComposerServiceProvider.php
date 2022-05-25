<?php

namespace App\Providers;

use App\Http\ViewComposers\ClinicComposer;
use App\Http\ViewComposers\DirectionCategoryComposer;
use App\Http\ViewComposers\SeoComposer;
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

        view()->composer('*', SeoComposer::class);
        view()->composer([
            'layouts.header',
            'partials.contacts',
            'partials.contacts-script',
            'contact.index',
            'direction.index',
            'doctor.index',
            'doctor.clinic'
        ], ClinicComposer::class);
        view()->composer(['layouts.header', 'layouts.footer', 'home.index'], DirectionCategoryComposer::class);

    }
}
