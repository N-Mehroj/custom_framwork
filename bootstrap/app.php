<?php

use Core\KernelContainer;

$app = new KernelContainer();
$GLOBALS['app'] = $app;

$app->bind('config', require __DIR__ . '/../config/config.php');
return $app;
