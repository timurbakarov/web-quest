<?php

namespace App\Exceptions\Http;

use App\Exceptions\HttpException;

class MethodNotAllowed extends HttpException
{
    /**
     * @var int
     */
    public $code = 405;

    /**
     * @var string
     */
    public $message = 'Method not allowed';
}