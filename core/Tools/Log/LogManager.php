<?php

namespace Core\Tools\Log;

use Core\Contract\LoggerInterface;

class LogManager implements LoggerInterface
{
    protected $app;
    protected $logger;

    protected $message;
    protected $channels = [];
    protected $sharedContext = [];
    protected $customCreators = [];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function emergency($message, array $context = []): void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function alert($message, array $context = []): void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function critical($message, array $context = []):void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function error($message, array $context = []):void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function warning($message, array $context = []):void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function notice($message, array $context = []):void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function info($message, array $context = []):void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function debug($message, array $context = []):void
    {
        $this->logger->writeLog(__FUNCTION__,$message, $context);
    }
    public function log($level, $message, array $context = []): void
    {
        $this->writeLog($level, $message, $context);
    }

    public function diver($methodName, $message, array $context = [])
    {

    }
}