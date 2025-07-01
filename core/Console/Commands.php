<?php

namespace Core\Console;

class Commands
{
    public static function get(): array
    {
        return [
            'clear:cache' => \Core\Console\Commands\ClearCacheCommand::class,
            'serve' => \Core\Console\Commands\RunServerCommand::class,
        ];
    }
}