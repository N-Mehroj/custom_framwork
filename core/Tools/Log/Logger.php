<?php

namespace Core\Tools\Log;

use Closure;
use Core\Contract\Event\Dispatcher;
use Core\Contract\Log\LoggerInterface;
use Core\Tools\Log\Event\MessageLogged;
use RuntimeException;


class Logger implements LoggerInterface
{
    protected $logger;

    protected $dispatcher;
    protected $context = [];

    public function __construct(LoggerInterface $logger, ?Dispatcher $dispatcher = null)
    {
        $this->logger = $logger;
        $this->dispatcher = $dispatcher;
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
    public function write($level, $message, array $context = []): void
    {
        $this->writeLog($level, $message, $context);
    }
    public function  writeLog($level,string $message,array $context = [])
    {
        $this->logger->{$level}(
            $message = $this->formatMessage($message),
            $context = array_merge($this->context, $context)
        );
        $this->fireLogEvent($level, $message, $context);
    }
    public function withContext(array $context = [])
    {
        $this->context = array_merge($this->context, $context);

        return $this;
    }
    public function withoutContext()
    {
        $this->context = [];

        return $this;
    }
    public function listen(Closure $callback)
    {
        if (! isset($this->dispatcher)) {
            throw new RuntimeException('Events dispatcher has not been set.');
        }

        $this->dispatcher->listen(MessageLogged::class, $callback);
    }
    /**
     * Fires a log event.
     *
     * @param  string  $level
     * @param  string  $message
     * @param  array  $context
     * @return void
     */
    protected function fireLogEvent($level, $message, array $context = [])
    {
        if (isset($this->dispatcher)) {
            $this->dispatcher->dispatch(new MessageLogged($level, $message, $context));
        }
    }
    public function __call($method, $parameters)
    {
        return $this->logger->{$method}(...$parameters);
    }



}