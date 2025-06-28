<?php

namespace Core\Support\Facade;

use Core\Support\Facade;
use Core\Tools\Log\LogManager;

class Log extends Facade
{
    protected static function getAccessor(): string
    {
        return LogManager::class;
    }
}