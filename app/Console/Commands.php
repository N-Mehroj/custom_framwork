<?php

namespace App\Console;

class Commands
{
    public static function get(): array
    {
        return [
            'hello' => \App\Console\Commands\CoreCommand::class,
        ];
    }
}