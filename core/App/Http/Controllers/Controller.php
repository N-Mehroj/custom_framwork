<?php

namespace Core\App\Http\Controllers;

use Core\Support\Facade\Log;

abstract class Controller
{
    public function __call($method, $params)
    {
        $message = "Method {$method} not found in controller " . static::class;
        Log::error($message);
        throw new \BadMethodCallException($message);

    }
}