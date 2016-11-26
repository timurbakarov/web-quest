<?php

namespace App\Exceptions\Http;

use App\Exceptions\HttpException;

class NotFoundException extends HttpException
{
    /**
     * @var int
     */
    public $code = 404;

    /**
     * @var string
     */
    public $message = 'Page was not found';
}