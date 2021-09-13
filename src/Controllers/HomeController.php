<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        $name = $_GET['name'];
        view('index', compact('name'));
    }

    public function post(){
        var_dump($_POST);
        var_dump($_FILES);
    }



    public function about(){
       
        echo "About us is here";
    }
    public function posts(){
        echo "Posts are here";
    }
}