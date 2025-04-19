<?php

namespace JacMac\StringUppercase;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class StringUppercaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('uppercase', function () {
            return new Uppercase;
        });
    }

    public function boot()
    {
        AliasLoader::getInstance()->alias('Uppercase', \JacMac\StringUppercase\Facades\Uppercase::class);
    }
}
