<?php

namespace Core\Console;

use App\Console\Commands as AppCommands;
use Core\Console\Commands as CoreCommands;

class Kernel
{
    protected array $commands = [];
    protected array $aliases = [
        'ser' => 'serve',
        'server' => 'serve',
    ];

    public function __construct()
    {
        $this->commands = array_merge(
            AppCommands::get(),
            CoreCommands::get()
        );
    }

    public function handle(array $argv)
    {
        $name = $argv[1] ?? null;

        $name = $this->aliases[$name] ?? $name;

        if (!isset($this->commands[$name])) {
            echo "Command not found: $name" . PHP_EOL;
            return;
        }

        $commandClass = $this->commands[$name];
        $command = new $commandClass;
        $command->handle(array_slice($argv, 2));
    }
}
