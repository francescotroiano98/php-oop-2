<?php 

    include_once __DIR__ . '/../classes/Category.php';
    include_once __DIR__ . '/../classes/product.php';


    $categories = [
        new Category ('Dogs');
        new Category ('Cats')
    ]; //qui andrà messo: cani e gatti

    $dogsProducts = []; //qui ci andrà messo: Cibo,Gioco,Cuccia,Pulizia,Accessori
    $catsProducts = [];

?>