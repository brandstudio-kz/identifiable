<?php

namespace BrandStudio\Identifiable;

use Illuminate\Support\ServiceProvider;

class IdentifiableServiceProvider extends ServiceProvider
{

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->publish();
        }

    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publish();
        }
    }

    private function publish()
    {
        //
    }

}
