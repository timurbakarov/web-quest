<?php

namespace App;

class UrlGenerator
{
    private $baseUrl;

    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param $path
     * @return string
     */
    public function generateUrl($path)
    {
        return '/' . $this->baseUrl . ($path ? '/' . $path : '');
    }
}