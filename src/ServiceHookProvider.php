<?php

namespace Alifshop\Hooks;

use Illuminate\Support\ServiceProvider;

class ServiceHookProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/hook.php' => config_path('hook.php'),
        ]);
    }

    public function register()
    {
//        $this->mergeConfigFrom(
//            __DIR__.'/../config/hook.php', 'hook'
//        );
    }
}
