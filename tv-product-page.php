<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung TV AI OLED 55" S90D 2024, 4K</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body class="product-page">
    <?php include("./parts/header.php")?>
    <main>
        <div class="cont">
            <?php include("./parts/tv-product-page/product-top.php")?>
            
            <div class="product-inner">
                <?php include("./parts/tv-product-page/product-info.php")?>
                <?php include("./parts/tv-product-page/product-features.php")?>
                <?php include("./parts/tv-product-page/product-description.php")?>
            </div>
        </div>

        <?php include("./parts/tv-product-page/accessory-list.php")?>
        <?php include("./parts/tv-product-page/product-faq.php")?>
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
    <?php include("./parts/tv-section/price-details-modal.php")?>
    <?php include("./parts/tv-product-page/in-cart-modal.php")?>
</body>
</html>