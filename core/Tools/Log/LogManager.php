<?php

namespace Core\Tools\Log;

use Core\Contract\LoggerInterface;
use Core\Support\Facade\Log;

class LogManager implements LoggerInterface
{
    protected $app;
    protected $channels = [];
    protected string $default = 'file';
    protected $dateFormat = 'Y-m-d H:i:s';


    public function emergency($message, array $context = []): void
    {
        $this->driver()->emergency($message, $context);
    }
    public function alert($message, array $context = []): void
    {
        $this->driver()->alert($message, $context);
    }
    public function critical($message, array $context = []):void
    {
        $this->driver()->critical($message, $context);
    }
    public function error($message, array $context = []):void
    {
        $this->driver()->error($message, $context);
    }
    public function warning($message, array $context = []):void
    {
        $this->driver()->warning($message, $context);
    }
    public function notice($message, array $context = []):void
    {
        $this->driver()->notice($message, $context);
    }
    public function info($message, array $context = []):void
    {
        $this->driver()->info($message, $context);
    }
    public function debug($message, array $context = []):void
    {
        $this->driver()->debug($message, $context);
    }
    public function log($level, $message, array $context = []): void
    {
        $this->driver()->log($level, $message, $context);
    }

    public function getDefaultDriver(): string
    {
        return $this->default;
    }

    public function driver(?string $driver = null): LoggerInterface
    {
        $driver = $driver ?? $this->getDefaultDriver();
        return $this->channels[$driver] ??= $this->resolve($driver);
    }

    protected function resolve(string $driver): LoggerInterface
    {
        return new Logger(new FileLogger());
    }
}