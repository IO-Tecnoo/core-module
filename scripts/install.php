<?php

// Determine the source and destination paths
$sourceDir = __DIR__ . '/../Core';  // Adjust this if needed
$targetDir = __DIR__ . '/../../../../Modules/Core';

// Create target directory if it doesn't exist
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

// Recursive function to copy directory contents
function copyDirectory($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while (($file = readdir($dir)) !== false) {
        if ($file !== '.' && $file !== '..') {
            if (is_dir($src . '/' . $file)) {
                copyDirectory($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Copy the Core directory to the Modules folder
copyDirectory($sourceDir, $targetDir);
echo "Core Module updated";
