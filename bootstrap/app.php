<?php

use Core\Routing\Router;

$router = new Router();

require_once __DIR__ . '/../routes/web.php';

return $router;
