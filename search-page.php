<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <div class="section-page search-page">
            <div class="cont">
                <nav class="breadcrumbs">
                    <ul class="flex">
                        <li><a href="index.php">Accueil</a></li>
                        <li><span>Résultats de la recherche</span></li>
                    </ul>
                </nav>
                <h1>Résultats de la recherche</h1>
            </div>
            <?php include("./parts/search/search-top.php");?>

            <div class="section-inner">
                <div class="cont flex">
                    <?php include("./parts/search/search-products.php")?>
                </div>
            </div>
            <div class="section-filter"></div>
        </div>
    </main>

    <?php include("./parts/footer.php")?>
</body>
</html>