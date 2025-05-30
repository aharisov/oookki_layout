<?php 
    $products = [
        array(
            "pic" => "images/demo/Master_Phone_Samsung_8_912cba634f 2.png",
            "price" => "50",
            "name" => "Galaxy Z Fold6"
        ),
        array(
            "pic" => "images/demo/Carrousel_02_Samsung_Galaxy_Z_Fold6_Rose_c25064c132 1.png",
            "price" => "99",
            "name" => "Galaxy S24 Ultra"
        ),
        array(
            "pic" => "images/demo/Carrousel_02_Samsung_Galaxy_Z_Flip6_Bleu_9b27ecacfe 1.png",
            "price" => "109",
            "name" => 'GalaxyZ Flip6'
        ),
        array(
            "pic" => "images/demo/samsung-galaxy-S25-ULTRA-bleu.png",
            "price" => "39",
            "name" => 'Galaxy S25 Ultra'
        ),
    ];
?>
<section class="phones-with-plans mb-common">
    <div class="cont">
        <div class="section-head flex">
            <h2>Découvrir nos téléphones avec forfait</h2>
            <a href="mobiles.php" class="section-link__top link">Voir tous les téléphones</a>
        </div>

        <div class="inner">
            <div class="phones-slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach($products as $product):?>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="pic">
                                    <a href="product.php"><img src="<?php echo $product["pic"]?>" alt="<?php echo $product["name"]?>"></a>
                                    <div class="icon"></div>
                                </div>
                                <div class="brand"><a href="brand-page.php">Samsung</a></div>
                                <div class="name"><a href="product.php"><?php echo $product["name"]?></a></div>

                                <div class="inner">
                                    <div class="price">
                                        <div class="price-inner">
                                            <div class="price-suptitle">À partir de</div> 
                                            <span><?php echo $product["price"]?>€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                
                <div class="swiper-pagination circle"></div>
                
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->
            </div>
            <div class="block-pic">
                <img src="images/demo/forfaits/plans-phones.jpg" alt="">
            </div>
        </div>
        <div class="section-link__bottom flex">
            <a href="mobiles.php" class="link">Voir tous les téléphones</a>
        </div>
    </div>
</section>