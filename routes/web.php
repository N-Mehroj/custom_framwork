<?php

use Core\Routing\Router;
use App\Http\Controllers\HomeController;

Router::get('/', [HomeController::class, 'index']);
Router::get('/about', [HomeController::class, 'about']);
Router::post('/form-post', [HomeController::class, 'formPosts']);