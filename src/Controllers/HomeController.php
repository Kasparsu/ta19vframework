<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        $name = 'kaspar';
        view('index', compact('name'));
    }

    public function upload(){
        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            __DIR__ . '/../../public/uploads/' . $_FILES['image']['name']
        );
        header('Location: /');
    }
    
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username === 'user' && $password === 'pass'){
            $_SESSION['isLoggedIn'] = true;
        }
        header('Location: /');
    }
    
    public function logout(){
        unset($_SESSION['isLoggedIn']);
        header('Location: /');
    }

    public function about(){
       
        view('about');
    }
    public function posts(){
        view('posts');
    }
}