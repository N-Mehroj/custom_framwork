<?php

namespace Core\Console\Commands;

class ClearCacheCommand
{
    public function handle(array $args)
    {
        $name = $args[0] ?? 'dunyo';
        echo "Salom, $name!" . PHP_EOL;
    }
}