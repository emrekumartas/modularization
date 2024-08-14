<?php

namespace Modules\Product\Providers;

use Closure;
use Illuminate\Support\ServiceProvider;
use Modules\Product\Providers\RouteServiceProvider;

class ProductServiceProvider extends ServiceProvider
{

    public function boot():void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'order');
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');

        $this->app->register(RouteServiceProvider::class);

    }


}
