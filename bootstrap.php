<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

$config = require  __DIR__ . '/config.php';

if(file_exists(__DIR__ . '/config-env.php')) {
    $config = array_replace_recursive($config, require __DIR__ . '/config-env.php');
}

ErrorHandler::register();
ExceptionHandler::register($config['debug']);

if($config['directory']) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($config['directory']) + 1);
}

$app = new \Illuminate\Container\Container();

$app['config'] = $config;
$app['request'] = Request::createFromGlobals();

$app->singleton('view', function(\Illuminate\Contracts\Container\Container $app) {
    return $templates = new League\Plates\Engine($app['config']['views']['path']);
});

require 'router.php';

return $app;