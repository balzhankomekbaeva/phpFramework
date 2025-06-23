<?php

use App\Controllers\HomeController;
use App\Controllers\PostControllers;
use Somecode\Framework\Routing\Route;

return [
    Route::get('/public', [HomeController::class, 'index']),
    Route::get('/public/posts/{id:\d+}', [PostControllers::class, 'show']),
];
