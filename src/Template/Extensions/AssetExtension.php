<?php

namespace App\Template\Extensions;

use App\Contracts\Template\EngineContract;
use App\Exceptions\Exception;
use Illuminate\Contracts\Container\Container;
use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class AssetExtension implements ExtensionInterface
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
        $engine->registerFunction('asset', [$this, 'asset']);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function asset($path, $packageName = null)
    {
        return $this->app['asset']->getUrl($path, $packageName);
    }
}