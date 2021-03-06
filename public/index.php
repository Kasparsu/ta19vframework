<?php

//require "src/Animal.php";

require __DIR__ . '\\..\\vendor\\autoload.php';

session_start();

require __DIR__ . '\\..\\routes.php';
require __DIR__ . '\\..\\helpers.php';

$altorouter = new AltoRouter();
$altorouter->map( 'GET', '/', 'HomeController#index');
$match = $altorouter->match();
var_dump($match);

$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if(isset($match['action']) && is_callable($match['action'])) {
    call_user_func($match['action']);
} else if(isset($match['action']) && is_array($match['action'])){
    $class = $match['action'][0]; // $class = '\App\Controller\HomeController'
    $method = $match['action'][1]; // $method = 'index'
    $obj = new $class(); 
    $obj->$method();
} else {
    echo "404";
}