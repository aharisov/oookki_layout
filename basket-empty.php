<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI | Téléphones mobiles</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body class="product-page">
    <?php include("./parts/header.php")?>
    <main>
        <div class="cont">
            <div class="cart-empty">
                <div class="icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <h2>Votre panier est vide.</h2>
                </div>

                <div class="content flex">
                    <div class="content-item">
                        <h3>Besoin d'un forfait ?</h3>
                        <a href="mobiles.php" class="btn btn-black__empty">Choisir</a>
                    </div>
                    <div class="content-item">
                        <h3>Besoin d'un téléphone ?</h3>
                        <a href="mobiles.php" class="btn btn-black__empty">Choisir</a>
                    </div>
                    <div class="content-item">
                        <h3>Besoin d'autre chose ?</h3>
                        <a href="mobiles.php" class="btn btn-black__empty">Choisir</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("./parts/footer.php")?>
</body>
</html>