<?php

namespace Core\Support\Facade;

use Core\Support\Facade;
use Core\Tools\Log\LogManager;

/**
 * @method static emergency(string $string)
 * @method static alert(string $string)
 * @method static critical(string $string)
 * @method static error(string $string)
 * @method static warning(string $string)
 * @method static notice(string $string)
 * @method static info(string $string)
 * @method static debug(string $string)
 * @method static log(string $string)
 */
class Log extends Facade
{
    protected static function getAccessor(): string
    {
        return LogManager::class;
    }
}