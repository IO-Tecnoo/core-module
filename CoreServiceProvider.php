<?php
namespace Sewidan\Core;

use Illuminate\Support\ServiceProvider;
use Sewidan\Core\Console\UpdateCoreModule;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the command
        $this->commands([
            UpdateCoreModule::class,
        ]);
    }

    public function boot()
    {
        // Bootstrapping logic here if needed
    }
}
