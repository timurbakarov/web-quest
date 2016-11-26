<?php /** @var $app Container */

use App\Contracts\Template\EngineContract;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Contracts\Container\Container;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

$app['config'] = $config;

$app['baseUrl'] = function(Container $app) {
    return $app->make(Request::class)->getBaseUrl() . ($app['config']['directory'] ? $app['config']['directory'] : '');
};

$app->singleton(\App\UrlGenerator::class, function(Container $app) {
    return new \App\UrlGenerator($app['baseUrl']);
});

$app->singleton(Request::class, function() {
    return Request::createFromGlobals();
});

$app->singleton(EngineContract::class, function(Container $app) {
    $engine = new \App\Template\PlatesEngineAdapter($app['config']['views']['path']);

    $engine->addData(['asset' => $app['asset']]);

    $engine->loadExtension(new \App\Template\Extensions\UrlGeneratorExtension($app));
    $engine->loadExtension(new \App\Template\Extensions\WidgetExtension($app));
    $engine->loadExtension(new \App\Template\Extensions\AssetExtension($app));

    return $engine;
});

$app->singleton('asset', function(Container $app) {
    $path = $app->make(Request::class)->getBaseUrl() . ($app['config']['directory'] ? $app['config']['directory'] : '');

    return new PathPackage($path, new EmptyVersionStrategy());
});