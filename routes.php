<?php
    use \App\Router;

    Router::get('/', function(){
        echo "Home page is here";
    });

    Router::get('/posts', function(){
        echo "Posts are here";
    });

    Router::get('/about', function(){
        echo "About us is here";
    });