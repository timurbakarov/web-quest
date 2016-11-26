<?php

/** @var $app \Illuminate\Container\Container */
use App\Exceptions\Http\MethodNotAllowed;
use App\Exceptions\Http\NotFoundException;
use Symfony\Component\HttpFoundation\Request;

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) use($app) {
    require __DIR__ . '/routes.php';
});

/** @var Request $request */
$request = $app->make(Request::class);

$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getRequestUri());

$response = new \Symfony\Component\HttpFoundation\Response();

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        throw new NotFoundException();

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        throw new MethodNotAllowed();

    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        $response->setContent($app->call($handler, $vars));

        return $response;

    default:
        throw new \Exception('Something is wrong with router');
}