<?php

/** @var $app \Illuminate\Container\Container */
/** @var $router FastRoute\RouteCollector */

$router->addRoute('GET', '/', function() use($app) {
    return $app['view']->render('index');
});

$router->addRoute('GET', '/task', function() use($app) {
    return $app['view']->render('task');
});