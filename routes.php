<?php

/** @var $app \Illuminate\Container\Container */
use App\Contracts\Template;
use App\Exceptions\Http\NotFoundException;

/** @var $router FastRoute\RouteCollector */

$router->addRoute('GET', '/', function(Template\EngineContract $view) {
    return $view->render('pages/index');
});

$router->addRoute('GET', '/{page}', function($page, Template\EngineContract $view) use($app) {
    if(!$view->exists('pages/' . $page)) {
        throw new NotFoundException();
    }

    return $view->render('pages/' . $page);
});