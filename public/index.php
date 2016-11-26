<?php

use App\Contracts\Template;
use App\Contracts\Template\EngineContract;

require __DIR__ . '/../vendor/autoload.php';

try {
    require __DIR__ . '/../bootstrap/bootstrap.php';

    $app = new \Illuminate\Container\Container();

    require __DIR__ . '/../bootstrap/components.php';

    /** @var \Symfony\Component\HttpFoundation\Response $response */
    $response = require __DIR__ . '/../router.php';

} catch (\App\Exceptions\HttpException $e) {
    $response = new \Symfony\Component\HttpFoundation\Response();

    if($app->make(EngineContract::class)->exists('errors/' . $e->getCode())) {
        $response->setContent($app->make(EngineContract::class)->render('errors/' . $e->getCode()));
        $response->setStatusCode($e->getCode());
    } else {
        $response->setContent($app->make(EngineContract::class)->render('errors/common'));
        $response->setStatusCode($e->getCode());
    }
} catch (\Exception $e) {
    if($app['config']['debug']) {
        throw $e;
    } else {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->setContent($app->make(EngineContract::class)->render('errors/common'));
        $response->setStatusCode(500);
    }
}

$response->send();
