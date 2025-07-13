<?php

namespace Core\Tools\Log;

use Core\Contract\Log\LoggerInterface;

class FileLogger implements LoggerInterface
{
    protected string $logPath;

    public function __construct(string $logPath = null)
    {
        $this->logPath = $logPath ?? __DIR__ . '/../../../storage/logs/app.log';
    }

    /**
     * Main log entry point.
     * @throws \JsonException
     */
    public function log($level, $message, array $context = []): void
    {
        $this->writeLog($level, $message, $context);
    }

    /**
     * Used by all convenience methods (info, error, etc.)
     */
    public function writeLog($level, string $message, array $context = []): void
    {
        $date = date('Y-m-d H:i:s');
        $log = "[$date] [" . strtoupper($level) . "] $message";

        if (!empty($context)) {
            $log .= ' ' . json_encode($context, JSON_THROW_ON_ERROR);
        }

        $log .= PHP_EOL;

        file_put_contents($this->logPath, $log, FILE_APPEND);
    }

    public function emergency($message, array $context = []): void
    {
        $this->log('emergency', $message, $context);
    }

    public function alert($message, array $context = []): void
    {
        $this->log('alert', $message, $context);
    }

    public function critical($message, array $context = []): void
    {
        $this->log('critical', $message, $context);
    }

    public function error($message, array $context = []): void
    {
        $this->log('error', $message, $context);
    }

    public function warning($message, array $context = []): void
    {
        $this->log('warning', $message, $context);
    }

    public function notice($message, array $context = []): void
    {
        $this->log('notice', $message, $context);
    }

    public function info($message, array $context = []): void
    {
        $this->log('info', $message, $context);
    }

    public function debug($message, array $context = []): void
    {
        $this->log('debug', $message, $context);
    }
}
