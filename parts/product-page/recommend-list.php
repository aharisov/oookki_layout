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
<section class="section-products products-slider modal-recommend">
    <div class="">
        <div class="section-head flex">
            <h3>Recommandés avec votre article</h3>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach($products as $product):?>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="top">
                                <div class="pic">
                                    <a href="product.php">
                                        <img src="<?php echo $product["pic"]?>" alt="<?php echo $product["name"]?>">
                                        <?php if($product["price_new"] > 0):?>
                                            <div class="badges">
                                                <div class="badge discount"><?php echo "-".round(100 - ($product["price_new"]*100/$product["price"]))."%";?></div>
                                            </div>
                                        <?php endif?>
                                    </a>
                                </div>   
                                <div class="right">
                                    <div class="brand"><a href=""><?php echo $product["brand"]?></a></div>
                                    <div class="name"><a href="product.php"><?php echo $product["name"]?></a></div>
                                </div> 
                            </div>
                            <div class="inner">
                                <div class="price">
                                    <div class="price-inner">
                                        <?php if($product["price_new"] > 0):?>
                                            <span><?php echo $product["price_new"]?>€</span>
                                            <span class="price-old"><?php echo $product["price"]?>€</span>
                                        <?php else:?>
                                            <span><?php echo $product["price"]?>€</span>
                                        <?php endif?>
                                    </div>
                                </div>

                                <div class="btn to-cart btn-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
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