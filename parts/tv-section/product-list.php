<?php 
    $products = [
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/tq55s90daexxc/gallery/fr-oled-s90d-tq55s90daexxc-thumb-541595867?$216_216_PNG$",
            "price" => "1195",
            "old_price" => "1295",
            "brand" => "Samsung",
            "name" => "TV AI OLED 55\" S90D 2024, 4K",
            "credit" => "398"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/4548736150683_h_f_l_0?wid=388&hei=388&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => "1790",
            "old_price" => "1990",
            "brand" => "Sony",
            "name" => "TV Oled Sony XR65A80L",
            "credit" => "596"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/8806091898364_h_f_l_0?wid=388&hei=388&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => "1190",
            "old_price" => "1390",
            "brand" => "LG",
            "name" => "TV Oled LG OLED55C4",
            "credit" => "396"
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/tu55du8575uxxc/gallery/fr-uhd-4k-tv-tu55du8575uxxc-tu--du----uxxc-thumb-541123384?$216_216_PNG$",
            "price" => "605",
            "old_price" => "",
            "brand" => "Samsung",
            "name" => "TV Crystal UHD 55\" DU8575 2024, 4K, Smart TV",
            "credit" => "202"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/6942351402871_h_f_l_0?wid=388&hei=388&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => "649",
            "old_price" => "",
            "brand" => "Hisense",
            "name" => "TV QLED HISENSE 65E7NQ PRO 2024",
            "credit" => "142"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/6942351403625_h_f_l_0?wid=388&hei=388&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => "629",
            "old_price" => "649",
            "brand" => "Hisense",
            "name" => "TV QLED HISENSE 65A7NQ 2024",
            "credit" => "162"
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/tq55s90daexxc/gallery/fr-oled-s90d-tq55s90daexxc-thumb-541595867?$216_216_PNG$",
            "price" => "1195",
            "old_price" => "1295",
            "brand" => "Samsung",
            "name" => "TV AI OLED 55\" S90D 2024, 4K",
            "credit" => "202"
        ),
    ];
?>
<div class="section-products">
    <div class="section-products__inner">
        <?php for($i = 0; $i < count($products); $i++):?>
            <?php 
                $num = rand(1, 99);

                // echo $products[$j]["brand"]." - ".$_GET["brand"];
            ?>
                <div class="product-card 
                    <?php if ($_GET["brand"] && $_GET["brand"] != "") {
                        if (strtolower($products[$i]["brand"]) != $_GET["brand"]) echo "hidden";
                    }?>
                ">
                    <div class="pic">
                        <a href="tv-product-page.php">
                            <img src="<?php echo $products[$i]["pic"]?>" alt="<?php echo $products[$i]["name"]?>">
                        </a>
                        <div class="icon energy">
                            <img src="https://boulanger.scene7.com/is/image/Boulanger/FLECHE-LABEL-ENERGIE-G" alt="">
                        </div>
                    </div>
                    <div class="name-wrap">
                        <div class="brand"><a href="brand-page.php"><?php echo $products[$i]["brand"]?></a></div>
                        <div class="name"><a href="product.php"><?php echo $products[$i]["name"]?></a></div>
                    </div>
                    <div class="inner">
                        <div class="price">
                            <div class="price-inner">
                                <span><?php echo $products[$i]["price"]?>€</span>
                                <?php if (!empty($products[$i]["old_price"])):?>
                                    <span class="price-old"><?php echo $products[$i]["old_price"]?>€</span>
                                <?php endif;?>
                            </div>
                            <div class="price-credit">
                                <span>ou <?php echo $products[$i]["credit"]?>€</span>
                                <span>/mois x 3 mois</span>
                            </div>
                        </div>

                        <div class="compare">
                            <label>
                                <input type="checkbox" data-id="<?php echo rand(1, 1000)?>">
                                <span>Comparer</span>
                            </label>
                        </div>
                    </div>
                </div>
        <?php endfor;?>
    </div>
    <?//php include("./parts/page-nav.php")?>
</div>