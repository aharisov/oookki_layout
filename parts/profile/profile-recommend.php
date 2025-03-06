<?php 
    $products = [
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/c/o/coque_jaym_transparente_pour_apple_iphone_15.png",
            "price" => 14,99,
            "price_new" => 0,
            "name" => "Coque Jaym Transparente pour iPhone 15",
            "brand" => "Noname"
        ),
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/b/i/bigben_protege_ecran_iphone_15_1.png",
            "price" => 19,99,
            "price_new" => 11,99,
            "name" => "Bigben Protège-écran en verre trempé pour iPhone 16/15/14 Pro",
            "brand" => "Noname"
        ),
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/f/g/fgmgcamip15orig_main-1.png",
            "price" => 9,99,
            "price_new" => 0,
            "name" => 'Force Glass Protège Caméra en verre recyclé pour iPhone 15 et iPhone 15 Plus',
            "brand" => "Noname"
        ),
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/a/p/apple-airpods-4-avec-reduction-du-bruit.png",
            "price" => 199,
            "price_new" => 179,1,
            "name" => 'Apple Écouteurs AirPods 4 avec réduction active du bruit',
            "brand" => "Apple"
        ),
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/f/c/fcairmagip15mf_main_1.png",
            "price" => 39,99,
            "price_new" => 0,
            "name" => "Force Case Coque renforcée compatible MagSafe iPhone 15",
            "brand" => "Noname"
        ),
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/a/p/apple-airpods-pro-2e-generation-boitier-magsafe-01.png",
            "price" => 279,
            "price_new" => 0,
            "name" => "Apple Écouteurs Airpods Pro 2 USBC-C",
            "brand" => "Apple"
        ),
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/f/c/fcairfrmagip15pk_main_1.png",
            "price" => 39,99,
            "price_new" => 0,
            "name" => "Force Case Coque renforcée translucide compatible MagSafe iPhone 15",
            "brand" => "Noname"
        ),
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/f/g/fgogip15orig_main_1.png",
            "price" => 39,99,
            "price_new" => 0,
            "name" => "Force Glass Protège-écran en verre organique recyclé pour Apple iPhone 16/15/14 Pro",
            "brand" => "Noname"
        )
    ];
?>

<section class="section-products products-slider recommend-list mb-common">
    <div class="">
        <div class="section-head flex">
            <h3>Inspiré de votre historique de navigation</h3>
        </div>

        <div class="recommend-slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($products as $product):?>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="pic">
                                <a href="product.php">
                                    <img src="<?php echo $product["pic"]?>" alt="<?php echo $product["name"]?>">
                                </a>
                            </div>
                            <div class="brand"><a href="brand-page.php"><?php echo $product["brand"]?></a></div>
                            <div class="name"><a href="product.php"><?php echo $product["name"]?></a></div>
                            
                            <div class="inner">
                                <div class="price">
                                    <div class="price-inner">
                                        <span><?php echo $product["price"]?>€</span>
                                    </div>
                                </div>
                                <div class="btn to-cart btn-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            
            <div class="swiper-pagination circle"></div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>