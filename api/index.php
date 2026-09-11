<?php

use CodeIgniter\Boot;
use Config\Paths;

// Check PHP version
$minPhpVersion = '8.1';
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo sprintf('Your PHP version must be %s or higher. Current version: %s', $minPhpVersion, PHP_VERSION);
    exit(1);
}

// Set front controller path to public directory
define('FCPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);

// Change working directory to public
if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

// Load Paths config
require dirname(__DIR__) . '/app/Config/Paths.php';
$paths = new Paths();

// In Vercel / Serverless environments, filesystem is read-only except /tmp
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL']) || !is_writable($paths->writableDirectory)) {
    $tmpWritable = '/tmp/writable';
    if (!is_dir($tmpWritable)) {
        @mkdir($tmpWritable, 0777, true);
        @mkdir($tmpWritable . '/cache', 0777, true);
        @mkdir($tmpWritable . '/logs', 0777, true);
        @mkdir($tmpWritable . '/session', 0777, true);
        @mkdir($tmpWritable . '/debugbar', 0777, true);
        @mkdir($tmpWritable . '/uploads', 0777, true);
    }
    $paths->writableDirectory = $tmpWritable;
}

// Load Framework Bootstrap
require $paths->systemDirectory . '/Boot.php';

exit(Boot::bootWeb($paths));
