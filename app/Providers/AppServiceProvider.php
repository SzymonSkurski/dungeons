<?php

namespace App\Providers;

use App\Field;
use App\Tile;
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
        $this->app->bind(Field::class, function ($app) {
            return new Field();
        });
        $this->app->bind(Tile::class, function($app) {
            return new Tile();
        });

//        $this->app->singleton();

//        $this->app->singleton('HelpSpot\API', function ($app) {
//            return new \HelpSpot\API($app->make('HttpClient'));
//        });
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
