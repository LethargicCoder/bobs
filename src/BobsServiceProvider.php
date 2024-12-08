<?php
namespace LethargicCoder\Bobs;

use Illuminate\Support\ServiceProvider;

class BobsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish your package resources, such as config files, views, etc.
        // $this->publishes([
        //     __DIR__ . '/../config/bobs.php' => config_path('bobs.php'),
        // ]);

        // Load routes, migrations, and views if applicable
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'LethargicCoder/Bobs');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations'); 
    }

    public function register()
    {
        // Register any application services or bindings.
        // $this->mergeConfigFrom(
        //     __DIR__.'/../config/bobs.php', 'bobs'
        // );
    }
}