<?php
    use \App\Router;
    use \App\Controllers\HomeController;
    // Router::get('/', function(){
    //     echo "Home page is here";
    // });

    Router::get('/', [HomeController::class, 'index']);  // '\App\Controllers\HomeController' 
    Router::post('/', [HomeController::class, 'upload']);
    Router::get('/posts', [HomeController::class, 'posts']);
    Router::get('/about', [HomeController::class, 'about']);
    Router::post('/login', [HomeController::class, 'login']);
    Router::get('/logout', [HomeController::class, 'logout']);
