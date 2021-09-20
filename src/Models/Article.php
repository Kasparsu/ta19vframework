<?php

namespace App\Models;

class Article
{
    public $id;
    public $title;
    public $body;

    public function getCapitalizedTitle(){
        return ucfirst($this->title);
    }
}