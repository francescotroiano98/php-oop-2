<?php

include_once __DIR__ . '/Product.php';


class Food extends Product {
    protected $calories;
    protected $fats;

    function __construct(String $name,String $description,Float $price, String $image, Category $category, Int $quantity, Int $calories, Int $fats){
        parent::__construct($name, $description, $price, $image, $category, $quantity);
        $this->calories = $calories;
        $this->fats = $fats;
    }

}