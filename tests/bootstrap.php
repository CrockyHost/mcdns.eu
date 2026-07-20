<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (method_exists(Dotenv::class, 'bootEnv')) {
    $projectDirectory = dirname(__DIR__);
    $environmentFile = $projectDirectory.'/.env';

    if (!file_exists($environmentFile)) {
        $environmentFile = $projectDirectory.'/.env.test';
    }

    (new Dotenv())->bootEnv($environmentFile);
}

if ($_SERVER['APP_DEBUG']) {
    umask(0000);
}
