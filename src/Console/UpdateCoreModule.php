<?php

namespace Sewidan\CoreModule\Console;

use Illuminate\Console\Command;
use File;

class UpdateCoreModule extends Command
{
    protected $signature = 'core:update';
    protected $description = 'Update the Core module in the Modules directory';

    public function handle()
    {
        $sourceDir = __DIR__ . '/../Core'; // Path to the Core directory in your package
        $targetDir = base_path('Modules/Core'); // Path to the target directory

        // Check if the target directory exists and delete it
        if (File::exists($targetDir)) {
            File::deleteDirectory($targetDir); // Remove the old directory
        }

        // Copy the new version of the Core directory
        File::copyDirectory($sourceDir, $targetDir);

        $this->info('Core module updated successfully.');
    }
}
