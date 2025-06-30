<?php

use Core\App\Http\Kernel;


require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/core/Support/helpers.php';

$app = require __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Kernel::class);
$kernel->handle();