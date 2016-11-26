<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

date_default_timezone_set('Europe/Moscow');

$config = require  __DIR__ . '/../config/app.php';

if(file_exists(__DIR__ . '/../env.php')) {
    $config = array_replace_recursive($config, require __DIR__ . '/../env.php');
}

ErrorHandler::register();
ExceptionHandler::register($config['debug']);

if($config['directory']) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($config['directory']) + 1);
}