<?php

include_once __DIR__ . '/Product.php';


class Hygiene extends Product {
    public $amount;
    public $profume;
    

    function __construct(String $name,String $description,Float $price, String $image, Category $category, Int $quantity, Int $amount, String $profume){
        parent::__construct($name, $description, $price, $image, $category, $quantity);
        $this->amount = $amount;
        $this->profume = $profume;
        
    }
}