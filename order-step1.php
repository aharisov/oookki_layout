<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI | Téléphones mobiles</title>

    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("./parts/order/order-header.php")?>
    <main>
        <div class="cont">
            <form class="order-form">
                <div class="left">
                    <?php include("./parts/order/basket/basket-abon.php")?>
                    <?php include("./parts/order/basket/basket-line-config.php")?>
                    <?php include("./parts/order/basket/basket-sim-type.php")?>
                    <?php include("./parts/order/step1-buttons.php")?>
                </div>
                <aside class="cart-summary">
                    <?php include("./parts/order/basket/basket-summary.php")?>
                    <?php include("./parts/order/basket/basket-payment-summary.php")?>
                    <?php include("./parts/order/basket/basket-why-we.php")?>
                </aside>
            </form>
        </div>
    </main>
    <?php include("./parts/footer.php")?>
</body>
</html>