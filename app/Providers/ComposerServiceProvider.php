<?php

namespace App\Providers;

use App\View\Composers\AppComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        View::composer ('admin.includes.admin.sidebar_l', AppComposer::class);
    }
}
