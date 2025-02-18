<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI | Téléphones mobiles</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">

</head>
<body class="product-page">
    <?php include("./parts/header.php")?>
    <main>
        <div class="cont">
            <?php include("./parts/product-page/product-top.php")?>
            
            <div class="product-inner">
                <?php include("./parts/product-page/product-info.php")?>
                <?php include("./parts/product-page/product-features.php")?>
                <?php include("./parts/product-page/product-description.php")?>
            </div>
        </div>

        <?php include("./parts/product-page/accessory-list.php")?>
        <?php include("./parts/product-page/product-faq.php")?>
    </main>
    

    <script type="module">
        import PhotoSwipeLightbox from './js/photoswipe-lightbox.esm.min.js';
        const lightbox = new PhotoSwipeLightbox({
            gallery: '#product-photo-slider',
            children: 'a',
            pswpModule: () => import('./js/photoswipe.esm.min.js')
        });
        lightbox.init();
    </script>
    <?php include("./parts/footer.php")?>
    <?php include("./parts/product-section/price-details-modal.php")?>
    <?php include("./parts/product-page/plan-details-modal.php")?>
    <?php include("./parts/product-page/in-cart-modal.php")?>
</body>
</html>