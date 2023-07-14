<?php
        include_once __DIR__ . '/db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs and Cats Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/style.css">


</head>
<body>

    <header>
        <h1>DOGS $ CATS SHOP</h1>
    </header>
    <main>
    <section class="container">
            <h2>Dogs</h2>
            <div class="row">
                <?php foreach ($categories as $category) { ?>
                    
                    <?php if ($category->name === 'Dogs') { ?>
                        <?php foreach ($category->products as $subcategory => $product) { ?>
                            <div class="col-3">
                                <div class="card">
                                    <div class="icon-size d-flex align-items-center">
                                    <h3 class="me-2">

                                        <?php echo $category->name; ?>
                                    </h3>    
                                        <img src="<?php echo $category->icon; ?>" alt="<?php echo $category->name; ?> Icon">
                                
                                    </div>
                                
                                    
                                    <div class="card-body">
                                        <div class="image-container">
                                            <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->title; ?>">
                                        </div>
                                    
                                        <h5 class="card-title"><?php echo $product->title; ?></h5>
                                        <p class="card-text">Price: $<?php echo $product->price; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>

            
            <div class="row">
                <?php foreach ($categories as $category) { ?>
                    
                    <?php if ($category->name === 'Cats') { ?>
                        <?php foreach ($category->products as $subcategory => $product) { ?>
                            <div class="col-3">
                                <div class="card">
                                    <div class="icon-size d-flex align-items-center">
                                        <h3 class="me-2">
                                            <?php echo $category->name; ?>
                                        </h3>
                                        <img src="<?php echo $category->icon; ?>" alt="<?php echo $category->name; ?> Icon">
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="image-container">
                                            <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->title; ?>">
                                        </div>    
                                        <h5 class="card-title"><?php echo $product->title; ?></h5>
                                        <p class="card-text">Price: $<?php echo $product->price; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </section>
    </main>
    
</body>
</html>