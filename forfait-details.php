<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le forfait Extrems | OOOKKI</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <div class="section-page plan-detail-page">
            <div class="cont">
                <?php include("./parts/forfaits/details-top.php")?>
            </div>
            <?php include("./parts/forfaits/details-short-info.php")?>
            <div class="cont page-inner">
                <?php include("./parts/forfaits/details-booster.php")?>
                <?php include("./parts/forfaits/details-info.php")?>
                <?php include("./parts/forfaits/details-advants.php")?>
                <?php include("./parts/forfaits/details-services.php")?>
            </div>
        </div>
    </main>

    <?php include("./parts/footer.php")?>
</body>
</html>