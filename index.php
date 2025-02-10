<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI page d'accueil</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <?php include("./parts/home/top-slider.php")?>
        <!-- home packages -->
        <?php include("./parts/home/packs.php")?>
        
        <!-- difficile choisir -->
        <?php include("./parts/home/how-to.php")?>

        <!-- phones selection -->
        <?php include("./parts/home/products-slider.php")?>

        <!-- advantages -->
        <?php include("./parts/home/advantages.php")?>

        <!-- faq -->
        <?php include("./parts/home/faq.php")?>
    </main>

    <?php include("./parts/footer.php")?>
</body>
</html>