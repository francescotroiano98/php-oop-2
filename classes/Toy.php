<?php

include_once __DIR__ . '/Product.php';


class Toy extends Product {
    public $color;
    public $material;

    function __construct(String $name,String $description,Float $price, String $image, Category $category, Int $quantity, String $color, String $material){
        parent::__construct($name, $description, $price, $image, $category, $quantity);
        $this->color = $color;
        $this->material = $material;
    }
}