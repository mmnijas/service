<?php

namespace Mmnijas\Service;

use Illuminate\Support\ServiceProvider;
use Mmnijas\Service\Commands\MakeService;

class ServiceGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the artisan command
        $this->commands([
            MakeService::class,
        ]);
    }

    public function boot()
    {
        // Boot any resources here (optional)
    }
}
