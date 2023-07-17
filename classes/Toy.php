<?php

include_once __DIR__ . '/Product.php';


class Toy extends Product {
    public $size;
    public $material;

    function __construct(String $name,String $description,Float $price, String $image, Category $category, Int $quantity, String $size, String $material){
        parent::__construct($name, $description, $price, $image, $category, $quantity);
        $this->size = $size;
        $this->material = $material;
    }
}