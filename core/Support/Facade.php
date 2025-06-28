<?php
namespace Core\Support;

abstract class Facade
{
    protected static $instances = [];

    abstract protected static function getAccessor(): string;

    public static function __callStatic($method, $arguments)
    {
        $accessor = static::getAccessor();

        if (!isset(self::$instances[$accessor])) {
            self::$instances[$accessor] = new $accessor(__DIR__ . '/../../../storage/logs/app.log');
        }

        return self::$instances[$accessor]->$method(...$arguments);
    }
}
