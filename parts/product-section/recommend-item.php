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
    <div class="pic">
        <a href="product.php">
            <img src="<?php echo $products[$num]["pic"]?>" alt="<?php echo $products[$num]["name"]?>">
        </a>
        <div class="icon"></div>
    </div>
    <div class="brand"><a href="brand-page.php">Samsung</a></div>
    <div class="name">
        <a href="product.php">    
            <?php echo $products[$num]["name"]?>
        </a>
    </div>
    
    <div class="inner">
        <div class="price">
            <div class="price-inner">
                <span><?php echo $products[$num]["price"]?>€</span>
            </div>
        </div>
        <div class="btn to-cart btn-red">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
            </svg>
        </div>
    </div>
</div>