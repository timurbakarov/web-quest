<?php

namespace App\Template\Extensions;

use App\Contracts\Template\EngineContract;
use App\Exceptions\Exception;
use Illuminate\Contracts\Container\Container;
use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class WidgetExtension implements ExtensionInterface
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
        $engine->registerFunction('widget', [$this, 'widget']);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function widget($widget, array $data = [])
    {
        $widget = $this->app->make($widget);

        if(!method_exists($widget, 'run')) {
            throw new Exception('Method [run] does not exist in widget');
        }

        return $this->app->call([$widget, 'run'], $data);
    }
}