<?php

class Product {
    public $image;
    public $title;
    public $price;

    public function __construct($image, $title, $price) {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
    }
}


