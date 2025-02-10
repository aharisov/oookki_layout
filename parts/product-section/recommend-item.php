<?php 

    $num = rand(1, 4);

    $products = [
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/sm-s721bzkdeub/gallery/fr-galaxy-s24-fe-s721-sm-s721bzkdeub-thumb-543654434?$216_216_PNG$",
            "price" => "649",
            "name" => "Galaxy S24 FE"
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/2407/gallery/fr-galaxy-buds3-pro-r630-sm-r630nzaaxef-thumb-542343231?$216_216_PNG$",
            "price" => "250",
            "name" => "Galaxy Buds3 Pro"
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/np960xha-kg2fr/gallery/fr-galaxy-book5-pro-16-inch-np960-np960xha-kg2fr-thumb-544979423?$216_216_PNG$",
            "price" => "2150",
            "name" => 'Galaxy Book5 Pro (16", Core Ultra 7, 16Go)'
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/sm-x510nzaaeub/gallery/fr-galaxy-tab-s9-fe-sm-x510-sm-x510nzaaeub-thumb-538518143?$216_216_PNG$",
            "price" => "530",
            "name" => 'Galaxy Tab S9 FE (10.9" , Wi-Fi)'
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
            <div class="icon"></div>
        </div>
        <div class="brand">Samsung</div>
        <div class="name"><span><?php echo $products[$num]["name"]?></span></div>
    </a>
    <div class="inner">
        <div class="price">
            <span><?php echo $products[$num]["price"]?>€</span>
        </div>
    </div>
</div>