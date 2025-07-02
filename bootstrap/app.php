<?php

use Core\KernelContainer;
use Core\Support\Env;


$app = new KernelContainer();
$GLOBALS['app'] = $app;

$app->bind('config', require __DIR__ . '/../config/config.php');
Env::load(__DIR__ . '/../.env');
return $app;
