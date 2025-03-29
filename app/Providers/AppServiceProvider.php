<?php

namespace App\Providers;

# Common libraries
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

# Template library
use App\Libraries\Template;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        # Setting up custom views folder
        View::AddNamespace('template', resource_path('templates/'.Config::get('app.template')));

        View::AddNamespace('pages', resource_path('templates/'.Config::get('app.template').'/pages'));
        View::AddNamespace('modules', resource_path('templates/'.Config::get('app.template').'/pages/modules'));

        # Setting partials folder
        View::AddNamespace('partials', resource_path('templates/'.Config::get('app.template').'/pages/partials'));

        # Template library class
        $this->app->singleton(Template::class, function ($app){
            return new Template();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        # Data library "Template" class
        view()->share('template', app(Template::class));

    }
}
