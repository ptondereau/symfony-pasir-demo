<?php

use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/vendor/autoload.php';

$response = new Response(
    json_encode([
        'message' => 'Hello from Symfony on Pasir!',
        'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'Pasir',
        'php_version' => PHP_VERSION,
        'time' => date('Y-m-d H:i:s'),
        'environment' => getenv('APP_ENV') ?: 'dev',
    ]),
    Response::HTTP_OK,
    ['content-type' => 'application/json']
);

$response->send();
