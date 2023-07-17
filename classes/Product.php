<?php
include_once __DIR__ . '/Category.php';

class Product{
    public $name;
    public $description;
    public $price;
    public $image;
    public $category;
    public $quantity;

    function __construct(String $name,String $description,Float $price, String $image, Category $category, Int $quantity){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->quantity = $quantity;
    }

    public function getInfo(){
        return "Product $this->name with price $this->price$";
    }
}