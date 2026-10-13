<?php
$zipFile = __DIR__ . '/hostinger_upload.zip';
if (file_exists($zipFile)) {
    unlink($zipFile);
}

$zip = new ZipArchive();
if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
    die("Cannot create zip file.\n");
}

$excludeDirs = [
    '.git',
    'node_modules',
    'tests',
    '.phpunit.cache',
    'storage/logs',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views'
];

$excludeFiles = [
    'hostinger_upload.zip',
    'build_zip.php',
    '.editorconfig',
    '.gitattributes',
    '.gitignore',
    'phpunit.xml',
    'package.json',
    'package-lock.json',
    'vite.config.js'
];

$root = realpath(__DIR__);
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

$fileCount = 0;

foreach ($iterator as $item) {
    $path = $item->getPathname();
    $relative = substr($path, strlen($root) + 1);
    $normalized = str_replace('\\', '/', $relative);

    // Check directory exclusions
    $skip = false;
    foreach ($excludeDirs as $exDir) {
        if ($normalized === $exDir || str_starts_with($normalized, $exDir . '/')) {
            $skip = true;
            break;
        }
    }
    if ($skip) continue;

    // Check file exclusions
    if (in_array($normalized, $excludeFiles)) {
        continue;
    }

    if (is_link($path) || !file_exists($path) || !is_readable($path)) {
        continue;
    }

    if ($item->isDir()) {
        $zip->addEmptyDir($normalized);
    } else {
        if (!@$zip->addFile($path, $normalized)) {
            echo "Skipped unreadable: $normalized\n";
            continue;
        }
        $fileCount++;
    }
}

// Make sure storage directories exist even if empty
$emptyDirs = [
    'storage/app/public',
    'storage/app/public/products',
    'storage/app/public/blog',
    'storage/app/private/livewire-tmp',
    'storage/framework/cache/data',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs'
];
foreach ($emptyDirs as $ed) {
    $zip->addEmptyDir($ed);
}

$zip->close();

$sizeMB = round(filesize($zipFile) / (1024 * 1024), 2);
echo "Successfully created: hostinger_upload.zip\n";
echo "Files included: $fileCount\n";
echo "Total zip size: {$sizeMB} MB\n";
