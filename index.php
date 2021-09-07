<?php

//require "src/Animal.php";

spl_autoload_register(function($class){
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = implode('\\', $parts) . '.php';
    require './src/' . $path;
});

require 'routes.php';

$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match) {
    call_user_func($match['action']);
} else {
    echo "404";
}