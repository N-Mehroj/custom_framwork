<?php

namespace App\Console\Commands;

class CoreCommand
{
    public function handle(array $args)
    {
        $name = $args[0] ?? 'dunyo';
        echo "Salom, $name!" . PHP_EOL;
    }
}