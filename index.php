<?php
require_once __DIR__.'/vendor/autoload.php';
$router = require __DIR__ . '/bootstrap/app.php';
$router->dispatch();