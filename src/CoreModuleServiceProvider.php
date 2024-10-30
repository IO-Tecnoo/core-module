<?php
namespace Sewidan\CoreModule;

use Illuminate\Support\ServiceProvider;
use Sewidan\CoreModule\Console\UpdateCoreModule;

class CoreModuleServiceProvider extends ServiceProvider
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
