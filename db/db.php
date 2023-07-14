<?php 

    include_once __DIR__ . '/../classes/Category.php';
    include_once __DIR__ . '/../classes/Product.php';


    $categories = [
        new Category('Dogs','https://cdn-icons-png.flaticon.com/512/194/194279.png', [
            'Food' => new Product('https://www.dogfoodadvisor.com/wp-content/uploads/2015/03/Open-Farm-Beef-Dry-Dog-Food.png', 'Dog Food', 10.99),
            'Toys' => new Product('https://www.macchiascura.it/wp-content/uploads/2019/01/disc-dog-frisbee-cane.jpg', 'Freesbee Dog Toys', 5.99),
            'Kennel' => new Product('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdvlbJ1QHP7356G2Bm5lrbYMJyniR_6aGjdg&usqp=CAU', 'Dog Kennel', 50.99),
            'Cleaning' => new Product('https://egress.storeden.net/gallery/5f23e4b95fb8e0a49c8b4571', 'Dog Shampoo', 8.99),
            'Accessories' => new Product('https://croci.net/wp-content/uploads/2022/03/Guinzaglio-Flexi-New-Neon-Cord.webp', '
            Dog leash', 15.99),
        ]),
        new Category('Cats','https://cdn.icon-icons.com/icons2/1697/PNG/256/60instagramhighlighticons03_112053.png', [
            'Food' => new Product('https://www.loradeglianimali.it/52519/giuntini-vita-day-croccantini-per-gatti-sterilizzati-con-pollo-e-verdure-da-10-kg.jpg', 'Cat Food', 9.99),
            'Toys' => new Product('https://m.media-amazon.com/images/I/61mzSd8OVUL.jpg', 'Mouse Cat Toys', 3.99),
            'Kennel' => new Product('https://www.tradeshopitalia.com/134563-large_default/cuccia-per-gatti-universale-a-meta-chiuso-con-morbido-cuscino-interno-tgm.jpg', 'Cat Kennel', 40.99),
            'Cleaning' => new Product('https://www.shoppypet.com/355-large_default/ferplast-gro-5799-spazzola-lisciante-per-gatti.jpg', 'Cat Cleaning', 7.99),
            'Accessories' => new Product('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-3Na3DuodqCIShcR9_CkxWHvkMC0T1GQFVQ&usqp=CAU', 'Cat Accessories', 12.99),
        ]),
    ];

    //qui andrà messo: cani e gatti

    ; //qui ci andrà messo: Cibo,Gioco,Cuccia,Pulizia,Accessori
    

    var_dump($categories);
?>