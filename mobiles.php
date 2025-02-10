<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI | Téléphones mobiles</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <?php include("./parts/product-section/top-slider.php")?>

        <div class="section-page">
            <div class="cont">
                <nav class="breadcrumbs">
                    <ul class="flex">
                        <li><a href="/">Accueil</a></li>
                        <li><span>Téléphones</span></li>
                    </ul>
                </nav>
                <h1>Smartphones / Téléphones</h1>
            </div>
            <?php include("./parts/product-section/mobiles-section-nav.php");?>
            <?php include("./parts/product-section/filter-top.php");?>

            <div class="section-inner">
                <div class="cont flex">
                    <div class="section-filter">
                        <div class="section-filter__inner">
                            <?php include("./parts/product-section/filter-mobile.php");?>
                        </div>
                    </div>
                    <?php include("./parts/product-section/product-list.php")?>
                </div>
            </div>

            <?php include("./parts/product-section/recommend-list.php")?>
            <?php include("./parts/product-section/section-faq.php")?>
        </div>
    </main>

    <?php include("./parts/product-section/compare-modal.php")?>
    <?php include("./parts/footer.php")?>
</body>
</html>