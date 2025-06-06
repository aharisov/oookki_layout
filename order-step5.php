<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI | Téléphones mobiles</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>

    <?php
        $parts = parse_url($_SERVER["PHP_SELF"]);
        $path_parts= explode('/', $parts["path"]);
        $page = $path_parts[count($path_parts) - 1];
    ?>
</head>
<body>
    <?php include("./parts/order/order-header.php")?>
    <main>
        <div class="cont">
            <form class="order-wrap order-finish-wrap flex <?php if ($page != "order-step1.php" && $page != "order-step5.php") echo "order-cart-hidden"?>" method="post">
                <div class="order-content personal-content">
                    <?php include("./parts/order/confirmation/order-confirmation.php")?>
                </div>
                <aside class="cart-summary">
                    <?php include("./parts/order/confirmation/basket-summary.php")?>
                    <?php include("./parts/order/confirmation/order-summary.php")?>
                </aside>
            </form>
        </div>
    </main>
    <?php include("./parts/order/order-footer.php")?>
</body>
</html>