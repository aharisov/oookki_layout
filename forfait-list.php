<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forfaits mobiles | OOOKKI</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <?php include("./parts/home/top-slider.php")?>

        <div class="section-page plans-list-page">
            <div class="cont">
                <nav class="breadcrumbs">
                    <ul class="flex">
                        <li><a href="index.php">Accueil</a></li>
                        <li><span>Forfaits mobiles</span></li>
                    </ul>
                </nav>
                <h1>Forfaits mobiles OOOKKI</h1>
            </div>
            <?php include("./parts/forfaits/forfait-nav.php");?>

            <div class="section-inner">
                <div class="cont flex">
                    <?php include("./parts/forfaits/f-list.php")?>
                </div>
            </div>

            <?php include("./parts/forfaits/advantages.php")?>
            <?php include("./parts/forfaits/with-phone.php")?>
            <?php include("./parts/forfaits/forfait-faq.php")?>
        </div>
    </main>

    <?php include("./parts/footer.php")?>
</body>
</html>