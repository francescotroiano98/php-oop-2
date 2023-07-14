<?php

    class Category {

        public $name;
        public $products;

        public function __construct($name, $products = []) {
            $this->name = $name;
            $this->products = $products;
        }

        public function getName(){
            return $this->name;
        }

        public function addProduct($product) {
            $this->products[] = $product;
        }
    }
