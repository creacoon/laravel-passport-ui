<?php

namespace Creacoon\LaravelPassportUi;

use Illuminate\Support\ServiceProvider;

class LaravelPassportUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views/authorize.blade.php' => resource_path('views/vendor/passport/authorize.blade.php'),
        ], 'laravel-passport-ui-views');
    }
}
