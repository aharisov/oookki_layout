<?php 
    $products = [
        array(
            "pic" => "https://www.bouyguestelecom.fr//media/catalog/product/a/p/apple-airpods-pro-2e-generation-boitier-magsafe-01.png",
            "price" => 279,
            "price_new" => 0,
            "name" => "Apple Écouteurs Airpods Pro 2 USBC-C",
            "brand" => "Apple"
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/2407/gallery/fr-galaxy-buds3-pro-r630-sm-r630nzaaxef-thumb-542343231?$216_216_PNG$",
            "price" => "199",
            "brand" => "Samsung",
            "name" => "Galaxy Buds3 Pro"
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/sm-a356bzkbeub/gallery/fr-galaxy-a-sm-a356bzkbeub-front-awesome-navy-thumb-544027356?$216_216_PNG$",
            "price" => "319",
            "brand" => "Samsung",
            "name" => "Galaxy A35"
        )
    ];
?>
<section class="section-products wishlist">
    <?php foreach($products as $product):?>
        <div class="product-card">
            <div class="pic">
                <button class="btn btn-red remove-from-wishlist"><i class="fa-solid fa-trash"></i></button>
                <a href="../product.php">
                    <img src="<?php echo $product["pic"]?>" alt="<?php echo $product["name"]?>">
                </a>
            </div>
            <div class="brand"><a href="../brand-page.php"><?php echo $product["brand"]?></a></div>
            <div class="name"><a href="../product.php"><?php echo $product["name"]?></a></div>
            
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
    <?php endforeach?>
</section>