<?php

date_default_timezone_set('Europe/Moscow');

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap.php';

/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = require __DIR__ . '/../router.php';

$response->send();