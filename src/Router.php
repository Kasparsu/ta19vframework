<?php 
namespace App;

class Router {
    private static $routes = [];
    private $uri;
    private $method;

    public function __construct($uri, $method) {
        $this->uri = $uri;
        $this->method = $method;
    }

    public static function addRoute($uri, $method, $callback) {
        self::$routes[] = [
            'uri' => $uri,
            'method' => $method,
            'action' => $callback
        ];
    }

    public static function get($uri, $callback){
        self::addRoute($uri, 'GET', $callback);
    }

    public static function post($uri, $callback){
        self::addRoute($uri, 'POST', $callback);
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route['uri'] === $this->uri && $route['method'] === $this->method){
                return $route;
            }
        }
    }
}