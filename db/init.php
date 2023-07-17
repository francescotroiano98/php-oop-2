<?php

include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/Food.php';
include_once __DIR__ . '/../classes/Toy.php';
include_once __DIR__ . '/../classes/Kennel.php';
include_once __DIR__ . '/../classes/Hygiene.php';
include_once __DIR__ . '/../classes/Accessory.php';

$catItems = new Category('Cat Items', 'Items for cats','https://cdn.icon-icons.com/icons2/1697/PNG/256/60instagramhighlighticons03_112053.png');
$dogItems = new Category('Dog Items', 'Items for dogs','https://cdn-icons-png.flaticon.com/512/194/194279.png');


$biscuits = new Food('Big Dog Biscuits', 'Biscuits for the biggest and proudest dogs!', 33.33, 'https://www.nutrixpiu.it/wp-content/uploads/2018/08/adulti-taglia-grande-nutrix-piu-2kg-crocchette.png
', $dogItems, 30, 350, 8);

$dogKennel = new Kennel ('Dog Kennel', 'Pretty House for your dog', 50.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdvlbJ1QHP7356G2Bm5lrbYMJyniR_6aGjdg&usqp=CAU', $dogItems, 5, 'Medium', 'PVC');


$fresbee = new Toy ('Fresbee', 'Best Fresbee for dogs', 10.99, 'https://www.macchiascura.it/wp-content/uploads/2019/01/disc-dog-frisbee-cane.jpg', $dogItems, 10,'Orange','Plastic');

$dogShampoo = new Hygiene ('Dog Shampoo', 'Shampoo for dogs', 5.99, 'https://petarmor.com/cdn/shop/products/073091051923_PetArmorPlus_Dog_F_T_Shampoo_Oatmeal_18oz_FRNT.png?v=1669737390', $dogItems, 25, 750, 'Coconut');  
    
    
$dogLeash = new Accessory ('Dog Leash', 'Dog Leash', 14.99,'https://croci.net/wp-content/uploads/2022/03/Guinzaglio-Flexi-New-Neon-Cord.webp', $dogItems, 30, 'Yellow', 'Nylon');


$kibble = new Food ('Cat Kibble', 'Cat Kibble', 4.99, 'https://www.loradeglianimali.it/52519/giuntini-vita-day-croccantini-per-gatti-sterilizzati-con-pollo-e-verdure-da-10-kg.jpg', $catItems, 50, 300, 6);

$woolBall = new Toy('Wool ball', 'Ball of  wool for small cats', 12.99, 'https://media.istockphoto.com/id/1263674144/photo/red-ball-with-woolen-threads-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=L7UnV596Hi5HMzG4XjXfIhDC4SyxO_KUsA1Iegetf_0=', $catItems, 13, 'Small', 'wool');


$catKennel = new Kennel ('Cat Kennel', 'Cat Kennel', 35.99, 'https://www.tradeshopitalia.com/134563-large_default/cuccia-per-gatti-universale-a-meta-chiuso-con-morbido-cuscino-interno-tgm.jpg', $catItems, 25, 'small', 'PVC');

$catShampoo = new Hygiene ('Cat Shampoo', 'Cat Shampoo', 7.99, 'https://saturnopetgarden.it/144-large_default/vitakraft-shampoo-neutro-gatti.jpg', $catItems, 10, 500, 'Rose');


$products = [

    $woolBall,
    $biscuits,
    $dogKennel,
    $fresbee,
    $dogShampoo,
    $dogLeash,
    $kibble,
    $catKennel,
    $catShampoo,

];
    

    var_dump($products);
?>