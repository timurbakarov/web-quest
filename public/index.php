<?php

date_default_timezone_set('Europe/Moscow');

require __DIR__ . '/../vendor/autoload.php';

try {
    $app = require_once __DIR__ . '/../bootstrap.php';

    /** @var \Symfony\Component\HttpFoundation\Response $response */
    $response = require __DIR__ . '/../router.php';
} catch (\App\Exceptions\HttpException $e) {
    $response = new \Symfony\Component\HttpFoundation\Response();

    if($app['view']->exists('errors/' . $e->getCode())) {
        $response->setContent($app['view']->render('errors/' . $e->getCode()));
        $response->setStatusCode($e->getCode());
    } else {
        $response->setContent($app['view']->render('errors/common'));
        $response->setStatusCode($e->getCode());
    }
} catch (\Exception $e) {
    if($app['config']['debug']) {
        throw $e;
    } else {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->setContent($app['view']->render('errors/common'));
        $response->setStatusCode(500);
    }
}

$response->send();
