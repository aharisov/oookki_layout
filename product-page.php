<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI | Téléphones mobiles</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
</head>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <div class="cont">
            <?php include("./parts/product-page/product-top.php")?>
            
            <div class="product-inner flex">
                <?php include("./parts/product-page/product-images.php")?>

                <div class="product-wrap">
                    <?php include("./parts/product-page/product-info.php")?>
                    <?php include("./parts/product-page/product-description.php")?>
                </div>
            </div>
        </div>
    </main>
    
    <?php include("./parts/footer.php")?>
</body>
</html>