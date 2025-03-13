<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparer mes téléphones</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body class="compare-page">
    <?php include("./parts/header.php")?>
    <main>
        <div class="cont">
            <div class="page-title-wrap mb-common">
                <h1>Comparer mes téléphones</h1>
                <p class="sub-title">Sélectionnez les modèles que vous souhaitez comparer</p>
            </div>
            <div class="compare-page__inner">
                <?php include("./parts/compare/compare-list-mobiles.php")?>
            </div>
        </div>

        <?php include("./parts/compare/compare-faq.php")?>
    </main>
    <?php include("./parts/compare/compare-modal-phones.php")?>

    <?php include("./parts/footer.php")?>
</body>
</html>