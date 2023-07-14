<?php

    class Category {

        public $name;
        public $icon;
        public $products;

        public function __construct($name, $icon, $products = []) {
            $this->name = $name;
            $this->icon = $icon;
            $this->products = $products;
        }

        public function getName(){
            return $this->name;
        }
        public function getIconPath(){
            return $this->icon;
        }

        public function addProduct($product) {
            $this->products[] = $product;
        }
    }
