<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téléviseurs | OOOKKI</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<?php 
    switch($_GET["brand"]) {
        case "samsung":
            $brand = "Samsung";
            $brandText = "Samsung est un géant de la technologie sud-coréen, réputé pour ses smartphones, téléviseurs et appareils électroménagers. Innovant constamment, la marque se distingue par des écrans OLED et QLED de haute qualité, ainsi que par une large gamme de produits connectés.";
            $logo = "https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg";
            break;
        case "hisense":
            $brand = "Hisense";
            $brandText = "Hisense est une entreprise chinoise spécialisée dans l’électronique et l’électroménager, notamment les téléviseurs, réfrigérateurs et climatiseurs. Elle propose des produits abordables avec une technologie avancée, comme les TV ULED et les écrans laser.";
            $logo = "https://upload.wikimedia.org/wikipedia/commons/4/47/Hisense.svg";
            break;
        case "lg":
            $brand = "LG";
            $brandText = "LG, entreprise sud-coréenne, est connue pour ses téléviseurs OLED, ses smartphones et ses appareils électroménagers. Elle se démarque par son design élégant, son innovation et son engagement envers la durabilité et l’intelligence artificielle.";
            $logo = "https://upload.wikimedia.org/wikipedia/commons/8/8d/LG_logo_%282014%29.svg";
            break;
        case "sony":
            $brand = "Sony";
            $brandText = "Sony est une entreprise japonaise emblématique dans les domaines de l’électronique, du divertissement et du gaming. Ses téléviseurs Bravia, consoles PlayStation et équipements audio haut de gamme en font une référence en matière de qualité et d’innovation.";
            $logo = "https://upload.wikimedia.org/wikipedia/commons/c/ca/Sony_logo.svg";
            break;
        default:
            $brand = "";
            break;
    }
?>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <?php include("./parts/home/top-slider.php")?>

        <div class="section-page">
            <div class="cont">
                <nav class="breadcrumbs">
                    <ul class="flex">
                        <li><a href="index.php">Accueil</a></li>
                        <?php if ($_GET["brand"] && $_GET["brand"] != ""):?>
                            <li><a href="tv-section-page.php">Téléviseurs</a></li>
                            <li><span><?php echo $brand?></span></li>
                        <?php else:?>
                            <li><span>Téléviseurs</span></li>
                        <?php endif;?>
                    </ul>
                </nav>
                <h1>Téléviseurs <?php echo $brand;?></h1>
                <?php if ($_GET["brand"] && $_GET["brand"] != ""):?>
                    <div class="brand-description mb-common">
                        <div class="logo">
                            <img src="<?php echo $logo?>" alt="<?php echo $brand?>">
                        </div>
                        <div class="text"><p><?php echo $brandText?></p></div>
                    </div>
                <?php endif?>
            </div>
            <?php include("./parts/tv-section/section-nav.php");?>
            <?php include("./parts/tv-section/filter-top.php");?>

            <div class="section-inner">
                <div class="cont flex">
                    <div class="section-filter">
                        <div class="section-filter__inner">
                            <?php include("./parts/tv-section/filter-mobile.php");?>
                        </div>
                    </div>
                    <?php include("./parts/tv-section/product-list.php")?>
                </div>
            </div>

            <?php include("./parts/tv-section/recommend-list.php")?>
            <?php include("./parts/tv-section/section-faq.php")?>
        </div>
    </main>

    <?php include("./parts/tv-section/price-details-modal.php")?>
    <?php include("./parts/tv-section/compare-modal.php")?>
    <?php include("./parts/footer.php")?>
</body>
</html>