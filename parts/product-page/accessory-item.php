<?php 

    $num = rand(1, 4);

    $products = [
        array(
            "pic" => "https://static.s-sfr.fr/media/catalogue/article/accessoire/vok6lxc4/620720-1-Coque-transparente-Samsung-Galaxy-Z-Flip6-150x150.jpg",
            "price" => "38",
            "name" => "Coque transparente pour Samsung Galaxy Z Flip6"
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/2407/gallery/fr-galaxy-buds3-pro-r630-sm-r630nzaaxef-thumb-542343231?$216_216_PNG$",
            "price" => "199",
            "name" => "Galaxy Buds3 Pro"
        ),
        array(
            "pic" => "https://static.s-sfr.fr/media/catalogue/article/accessoire/edhsqw7m/620714-1-CoqueanneauSamsungZFlip6gris1_150x150.jpg",
            "price" => "59",
            "name" => 'Coque avec anneau pour Samsung Galaxy Z Flip6 gris'
        ),
        array(
            "pic" => "https://static.s-sfr.fr/media/catalogue/article/accessoire/yezm4dqq/620748-1-GalaxyWatchUltra4G47mmGris_150x150.jpg",
            "price" => "530",
            "name" => 'Samsung Galaxy Watch Ultra'
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/sm-a356bzkbeub/gallery/fr-galaxy-a-sm-a356bzkbeub-front-awesome-navy-thumb-544027356?$216_216_PNG$",
            "price" => "319",
            "name" => "Galaxy A35"
        )
    ];
?>
<div class="product-card">
    <a href="/product.php">
        <div class="pic">
            <img src="<?php echo $products[$num]["pic"]?>" alt="<?php echo $products[$num]["name"]?>">
        </div>
        <div class="brand">Samsung</div>
        <div class="name"><span><?php echo $products[$num]["name"]?></span></div>
    </a>
    <div class="inner">
        <div class="price">
            <div class="price-inner">
                <span><?php echo $products[$num]["price"]?>€</span>
            </div>
        </div>
    </div>
</div>