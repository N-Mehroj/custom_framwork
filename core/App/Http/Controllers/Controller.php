<?php

namespace Core\App\Http\Controllers;

abstract class Controller
{
    public function __call($method, $params)
    {
        $message = "Method {$method} not found in controller " . static::class;
        $logFile = __DIR__ . '/../../../../storage/logs/app.log';
        $timestamp = date('Y-m-d H:i:s');
        file_put_contents($logFile, "[{$timestamp}] ERROR: {$message}\n", FILE_APPEND);
        throw new \BadMethodCallException($message);
    }
}