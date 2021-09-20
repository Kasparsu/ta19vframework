<?php
namespace App\Controllers;

use App\Models\Article;
use PDO;
use PDOException;

class HomeController {
    public function index(){
        try {
            $conn = new PDO('sqlite:' . __DIR__ . '/../../db.sqlite');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM articles");
            $stmt->execute();

            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_CLASS, Article::class);
            $results = $stmt->fetchAll();
            var_dump($results);
            var_dump($results[0]->getCapitalizedTitle());
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}