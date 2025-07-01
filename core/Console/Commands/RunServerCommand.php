<?php

namespace Core\Console\Commands;

class RunServerCommand
{
    public function handle(array $arguments = [])
    {
        $host = $arguments[0] ?? '127.0.0.1';
        $port = $arguments[1] ?? '8000';
        $publicPath = base_path('public');

        echo "Starting server at http://$host:$port...\n";

        passthru("php -S {$host}:{$port} -t {$publicPath}");
//        passthru("php -S {$host}:{$port}");
    }
}