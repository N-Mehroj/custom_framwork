<?php

namespace Core\App\Http;

use Core\KernelContainer;
use Core\Routing\Router;

class Kernel
{
    protected $app;
    protected $router;

    public function __construct(KernelContainer $app)
    {
        $this->app = $app;
        $this->router = new Router($app);

        $this->app->bind('router', $this->router);
    }

    public function handle(): void
    {
        require_once base_path('routes/web.php');
        $this->router->dispatch();
    }
}
