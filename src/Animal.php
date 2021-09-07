<?php
namespace App;

class Animal {
    public $name;
    public static $color;

    public static function getColor(){
        return self::$color;
    }
}
