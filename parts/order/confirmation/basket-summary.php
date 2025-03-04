<?php 
    $cart = [
        array(
            "pic" => "images/demo/z-fold6/Phone_Samsung_ZFold6_blue_1.png",
            "name" => "Galaxy Z Fold6",
            "props" => "Bleu nuit - 256Go",
            "note" => "Avec Location OOOKKI",
            "is_changeable" => "Y",
            "price" => "<i>1050€</i>"
        ),
        array(
            "pic" => "https://static.s-sfr.fr/media/catalogue/article/accessoire/vok6lxc4/620720-1-Coque-transparente-Samsung-Galaxy-Z-Flip6-150x150.jpg",
            "name" => "Coque transparente pour Samsung Galaxy Z Fold6",
            "props" => "Gris",
            "price" => "<i>29.99€</i>"
        ),
        array(
            "pic" => "images/demo/forfait.png",
            "name" => "Forfait Extrems OOOKKI",
            "props" => "Sans engagements - 300Go",
            "price" => "<i>18,99€</i>/mois",
            "is_plan" => "Y"
        ),
        
    ];
?>
<section class="summary-block order-summary-block">
    <h3 class="title">Détails de la commande</h3>

    <div class="summary-products">
        <?php foreach($cart as $index => $cartItem):?>
            <div class="summary-product" data-id="<?php echo $index?>" 
                <?php if (isset($cartItem["is_plan"])) echo 'aria-label="plan"';?>>
                <div class="product-pic">
                    <a href="product.php" target="_blank">
                        <img src="<?php echo $cartItem["pic"]?>" alt="<?php echo $cartItem["name"]?>">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-title"><a href="product.php" target="_blank"><?php echo $cartItem["name"]?></a></div>
                    <div class="product-props"><?php echo $cartItem["props"]?></div>
                </div>
                <div class="product-price"><?php echo $cartItem["price"]?></div>
            </div>
        <?php endforeach?>
    </div>
</section>
