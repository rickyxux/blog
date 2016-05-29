<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Containers\Code;

class CodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //echo 'hello';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('code.service',function () {
            return  new Code();
        });
    }



}
