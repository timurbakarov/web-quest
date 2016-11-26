<?php

namespace App\Template\Extensions;

use Illuminate\Contracts\Container\Container;
use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class UrlGeneratorExtension implements ExtensionInterface
{
    /**
     * @var Container
     */
    private $app;

    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    public function register(Engine $engine)
    {
        $engine->registerFunction('url', [$this, 'generateUrl']);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function generateUrl($path)
    {
        return $this->app->make(\App\UrlGenerator::class)->generateUrl($path);
    }
}