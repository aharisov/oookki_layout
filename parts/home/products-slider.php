<?php 
    $products = [
        array(
            "pic" => "images/demo/Master_Phone_Samsung_8_912cba634f 2.png",
            "price" => "649",
            "name" => "Galaxy Z Fold6"
        ),
        array(
            "pic" => "images/demo/Carrousel_02_Samsung_Galaxy_Z_Fold6_Rose_c25064c132 1.png",
            "price" => "1050",
            "name" => "Galaxy S24 Ultra"
        ),
        array(
            "pic" => "images/demo/Carrousel_02_Samsung_Galaxy_Z_Flip6_Bleu_9b27ecacfe 1.png",
            "price" => "2150",
            "name" => 'GalaxyZ Flip6'
        ),
        array(
            "pic" => "images/demo/samsung-galaxy-S25-ULTRA-bleu.png",
            "price" => "530",
            "name" => 'Galaxy S25 Ultra'
        ),
    ];
?>

<section class="home-products home-section section-products products-slider mb-common">
    <div class="cont">
        <div class="section-head flex">
            <div class="subtitle">Notre sélection</div>
            <h2>Smartphone <span class="text-red">+ forfait 5G</span></h2>
            <a href="mobiles.php" class="section-link__top link">Voir tous les téléphones</a>
        </div>

        <div class="products-slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($products as $product):?>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <a href="">
                                <div class="pic">
                                    <img src="<?php echo $product["pic"]?>" alt="<?php echo $product["name"]?>">
                                    <div class="icon"></div>
                                </div>
                                <div class="brand">Samsung</div>
                                <div class="name"><span><?php echo $product["name"]?></span></div>
                            </a>
                            <div class="inner">
                                <div class="price">
                                    <div class="price-inner">
                                        <span><?php echo $product["price"]?>€</span>
                                    </div>
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

        <div class="section-link__bottom flex">
            <a href="mobiles.php" class="link">Voir tous les téléphones</a>
        </div>
    </div>
</section>