<?php

namespace App\Contracts\Template;

interface EngineContract
{
    /**
     * Add preassigned template data.
     * @param  array             $data;
     * @param  null|string|array $templates;
     * @return Engine
     */
    public function addData(array $data, $templates = null);

    /**
     * Create a new template and render it.
     * @param  string $name
     * @param  array  $data
     * @return string
     */
    public function render($name, array $data = array());

    /**
     * Check if a template exists.
     * @param  string  $name
     * @return boolean
     */
    public function exists($name);
}