<?php
        include_once __DIR__ . '/db/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
    <link rel="stylesheet" href="./style/style.css">

    <title>Dogs and Cats Shop</title>

    

</head>
<body>

    <header class="text-center">
        <h1>DOGS & CATS SHOP</h1>
    </header>
    <main>
        <section class="container">

        <div class="row justify-content-around">
            <?php foreach ($products as $product) {?>

                <div class="card col-3 m-4 p-0">
                    <div class="d-flex align-items-center mb-3">
                        <h4 class="me-3"><?php echo $product->category->name; ?></h4>
                        <img src="<?php echo $product->category->image; ?>" class="product-icon-image" alt="<?php echo $product->category->name; ?>">
                    </div>
                    

                    <img src="<?php echo $product->image; ?>" class="product-image" alt="<?php echo $product->name; ?>">
                    <div class="card-body flex-column">
                        <h5 class="card-title">
                            <?php echo $product->name; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            <?php echo $product->description; ?>
                        </h6>
                        <a href="#">Buy it now for <?php echo $product->price; ?> $</a>
                        <p>Available quantity:  <?php echo $product->quantity; ?></p>
                        
                        
                     </div>
                </div>
                <?php }?>
                        




            
            

            
            
        </section>
    </main>
    
</body>
</html>