<?php 

    include_once __DIR__ . '/../classes/Category.php';
    include_once __DIR__ . '/../classes/DogProduct.php';
    include_once __DIR__ . '/../classes/CatProduct.php';


    $categories = [
        new Category ('Dogs');
        new Category ('Cats');
    ]; //qui andrà messo: cani e gatti

    $dogsProducts = [
        new Product ('Food');
        new Product ('Toys');
        new Product ('Kennel');
        new Product ('Cleaning');
        new Product ('Accessories');
        

    ]; //qui ci andrà messo: Cibo,Gioco,Cuccia,Pulizia,Accessori
    $catsProducts = [
        new Product ('Food');
        new Product ('Toys');
        new Product ('Kennel');
        new Product ('Cleaning');
        new Product ('Accessories');
    ];

?>