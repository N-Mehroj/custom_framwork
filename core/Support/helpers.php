<?php

use Core\KernelContainer;

if (!function_exists('base_path')) {
    function base_path($path = ''): string
    {
        return __DIR__ . '/../../' . ($path ? DIRECTORY_SEPARATOR . $path : '');
    }
}
if (!function_exists('app')) {
    function app($abstract = null) {
        global $app;

        return $abstract ? $app->make($abstract) : $app;
    }
}

if (!function_exists('config')) {
    function config($key = null) {
        $config = app('config');

        if ($key === null) {
            return $config;
        }

        return array_reduce(
            explode('.', $key),
            fn($carry, $segment) => $carry[$segment] ?? null,
            $config
        );
    }
}

if (!function_exists('env')) {
    function env($key, $default = null) {
        return $_ENV[$key] ?? getenv($key) ?: $default;
    }
}
