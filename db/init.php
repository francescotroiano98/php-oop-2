<?php

include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/Food.php';
include_once __DIR__ . '/../classes/Toy.php';
include_once __DIR__ . '/../classes/Kennel.php';
include_once __DIR__ . '/../classes/Hygiene.php';
include_once __DIR__ . '/../classes/Accessory.php';

$catItems = new Category('Cat Items', 'Items for cats', '');
$dogItems = new Category('Dog Items', 'Items for dogs', '');



$woolBall = new Toy('Wool ball', 'Ball of  wool for small cats', 12.99, 'https://media.istockphoto.com/id/1263674144/photo/red-ball-with-woolen-threads-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=L7UnV596Hi5HMzG4XjXfIhDC4SyxO_KUsA1Iegetf_0=', $catItems, 13, 'Small', 'wool');

$biscuits = new Food('Big Dog Biscuits', 'Biscuits for the biggest and proudest dogs!', 33.33, 'https://www.nutrixpiu.it/wp-content/uploads/2018/08/adulti-taglia-grande-nutrix-piu-2kg-crocchette.png
', $dogItems, 30, 350, 8);




$products = [

    $woolBall,
    $biscuits
];
    

    var_dump($products);
?>