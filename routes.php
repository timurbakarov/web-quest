<?php

/** @var $app \Illuminate\Container\Container */
use App\Exceptions\Http\NotFoundException;

/** @var $router FastRoute\RouteCollector */

$router->addRoute('GET', '/', function() use($app) {
    return $app['view']->render('pages/index');
});

$router->addRoute('GET', '/{page}', function($page) use($app) {
    if(!$app['view']->exists('pages/' . $page)) {
        throw new NotFoundException();
    }

    return $app['view']->render('pages/' . $page);
});

