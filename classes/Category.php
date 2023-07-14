<?php

    class Category{
        puclic $name;

        function __construct(String $name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }
  