<?php 
    $cart = [
        array(
            "pic" => "images/demo/z-fold6/Phone_Samsung_ZFold6_blue_1.png",
            "name" => "Galaxy Z Fold6",
            "props" => "Bleu nuit - 256Go",
            "note" => "Avec Location OOOKKI",
            "is_changeable" => "Y"
        ),
        array(
            "pic" => "https://static.s-sfr.fr/media/catalogue/article/accessoire/vok6lxc4/620720-1-Coque-transparente-Samsung-Galaxy-Z-Flip6-150x150.jpg",
            "name" => "Coque transparente pour Samsung Galaxy Z Fold6",
            "props" => "Gris"
        ),
        array(
            "pic" => "images/demo/forfait.png",
            "name" => "Forfait Extrems OOOKKI",
            "props" => "Sans engagements - 300Go",
            "note" => "18,99€/mois",
            "is_plan" => "Y"
        ),
        
    ];
?>
<section class="summary-block">
    <h3 class="title">Votre panier</h3>

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
                    <?php if (isset($cartItem["note"])):?>
                        <div class="product-note"><?php echo $cartItem["note"]?></div>
                    <?php endif?>
                </div>
                <div class="product-buttons flex">
                    <?php if (isset($cartItem["is_changeable"])):?>
                        <a href="mobiles.php" class="btn btn-black__empty">
                            <i class="fa-solid fa-arrows-rotate"></i>
                            <span>Modifier</span>    
                        </a>
                    <?php endif?>
                    <?php if (isset($cartItem["is_plan"])):?>
                        <button class="btn btn-black__empty open-modal" data-modal="change-plan-modal" data-id="<?php echo $index?>">
                            <i class="fa-solid fa-right-left"></i>
                            <span>Changer</span>
                        </button>
                    <?php endif?>
                    <button class="btn delete" data-id="<?php echo $index?>">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </div>
            </div>
        <?php endforeach?>
    </div>
</section>
