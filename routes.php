<?php
    use \App\Router;
    use \App\Controllers\HomeController;
    // Router::get('/', function(){
    //     echo "Home page is here";
    // });

    Router::get('/', [HomeController::class, 'index']);  // '\App\Controllers\HomeController' 
    Router::post('/', [HomeController::class, 'post']);
    Router::get('/posts', [HomeController::class, 'posts']);

    Router::get('/about', [HomeController::class, 'about']);