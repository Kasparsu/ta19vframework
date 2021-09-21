<?php
namespace App\Controllers;

use App\DB;
use App\Models\Article;
use PDO;
use PDOException;

class HomeController {
    public function index(){
        try {
            $db = new DB();
            $results = $db->find('articles', 1);
            var_dump($results);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}