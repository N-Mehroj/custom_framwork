<?php

namespace Core\Console\Commands;

class RunServerCommand
{
    public function handle(array $arguments = [])
    {
        $host = $arguments[0] ?? '127.0.0.1';
        $port = $arguments[1] ?? 8000;
        $publicPath = base_path('public');

        while (!$this->isPortAvailable($host, $port)) {
            echo "⚠️ Port $port is busy, trying another port...\n";
            $port++;
        }

        echo "✅ Server is starting: http://$host:$port\n";
        passthru("php -S {$host}:{$port} -t {$publicPath}");
    }
    private function isPortAvailable($host, $port): bool
    {
        $connection = @fsockopen($host, $port);
        if (is_resource($connection)) {
            fclose($connection);
            return false;
        }
        return true;
    }
}