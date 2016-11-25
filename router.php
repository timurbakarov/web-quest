<?php

/** @var $app \Illuminate\Container\Container */

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) use($app) {
    require __DIR__ . '/routes.php';
});

$routeInfo = $dispatcher->dispatch($app['request']->getMethod(), $app['request']->getRequestUri());

$response = new \Symfony\Component\HttpFoundation\Response();

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        $response->setContent($app['view']->render('errors/404'));
        $response->setStatusCode(404);
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        $response->setContent($app['view']->render('errors/405'));
        $response->setStatusCode(405);

        break;

    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        $response->setContent(call_user_func($handler, $vars));

        break;
}

return $response;