<?php 
    $products = [
        array(
            "pic" => "images/demo/Master_Phone_Samsung_8_912cba634f 2.png",
            "price" => "1091",
            "old_price" => "1171",
            "brand" => "Samsung",
            "name" => "Galaxy Z Fold6",
            "colors_name" => ["Gris", "Bleu nuit", "Rose"],
            "colors_code" => ["rgb(121, 128, 129)", "rgb(50, 52, 75)", "rgba(255, 217, 223, 0.5)"],
            "colors_stock" => [1, 1, 0],
            "stockage" => ["128 Go", "256 Go", "512 Go", "1 To"],
            "promo" => ["0", "80"]
        ),
        array(
            "pic" => "images/demo/Carrousel_02_Samsung_Galaxy_Z_Flip6_Bleu_9b27ecacfe%201.png",
            "price" => "441",
            "old_price" => "521",
            "brand" => "Samsung",
            "name" => "Galaxy Z Flip6",
            "colors_name" => ["Bleu", "Gris", "Vert", "Jaune"],
            "colors_code" => ["rgb(94, 182, 221)", "rgb(121, 128, 129)", "rgb(81, 119, 132)", "rgb(255, 241, 104)"],
            "colors_stock" => [1, 0, 1, 0],
            "stockage" => ["256 Go", "512 Go"],
            "promo" => ["50", "80"]
        ),
        array(
            "pic" => "images/demo/1_Iphone15_Blue_184x184.webp",
            "price" => "341",
            "old_price" => "541",
            "brand" => "Apple",
            "name" => "Iphone 15",
            "colors_name" => ["Bleu", "Noir", "Rose", "Jaune", "Vert"],
            "colors_code" => ["rgb(94, 182, 221)", "rgb(56, 51, 54)", "rgb(255, 217, 223)", "rgb(255, 241, 104)", "rgb(81, 119, 132)"],
            "colors_stock" => [1, 1, 1, 1, 1],
            "stockage" => ["128 Go", "256 Go", "512 Go"],
            "promo" => ["100", "100"]
        ),
        array(
            "pic" => "https://images.samsung.com/is/image/samsung/p6pim/fr/sm-s721bzkdeub/gallery/fr-galaxy-s24-fe-s721-sm-s721bzkdeub-thumb-543654434?$216_216_PNG$",
            "price" => "640",
            "old_price" => "",
            "brand" => "Samsung",
            "name" => "Galaxy S24 FE",
            "colors_name" => ["Gris", "Bleu nuit", "Rose"],
            "colors_code" => ["rgb(121, 128, 129)", "rgb(50, 52, 75)", "rgba(255, 217, 223, 0.5)"],
            "colors_stock" => [1, 0, 0],
            "stockage" => ["128 Go", "256 Go", "512 Go"],
            "promo" => ["0", "0"]
        ),
    ];
?>
<div class="section-products">
    <div class="section-products__inner">
        <?php $j = 0;?>
        <?php for($i = 1; $i <= 12; $i++):?>
            <?php 
                $num = rand(1, 99);
            ?>
                <div class="product-card">
                    <a href="/product.php">
                        <div class="pic">
                            <div class="colors flex">
                                <?php foreach($products[$j]["colors_name"] as $index => $color):?>
                                    <span class="<?php if ($products[$j]["colors_stock"][$index] == 0) echo "na";?>" title="<?php echo $color?>" style="background: <?php echo $products[$j]["colors_code"][$index]?>;"></span>
                                <?php endforeach?>
                            </div>

                            <img src="<?php echo $products[$j]["pic"]?>" alt="<?php echo $products[$j]["name"]?>">
                            <div class="icon"></div>
                        </div>
                        <div class="brand"><?php echo $products[$j]["brand"]?></div>
                        <div class="name"><span><?php echo $products[$j]["name"]?></span></div>
                    </a>
                    <div class="inner">
                        <ul class="props">
                            <?php foreach($products[$j]["stockage"] as $index => $volume):?>
                            <li>
                                <label>
                                    <input type="radio" name="memory<?php echo $num?>" <?php if ($index == 0) echo "checked"?> />
                                    <span><?php echo $volume?></span>
                                </label>    
                            </li>
                            <?php endforeach;?>
                        </ul>

                        <div class="price">
                            <span><?php echo $products[$j]["price"]?>€</span>
                            <?php if (!empty($products[$j]["old_price"])):?>
                                <span class="price-old"><?php echo $products[$j]["old_price"]?>€</span>
                            <?php endif;?>
                        </div>

                        <div class="compare">
                            <label>
                                <input type="checkbox" data-id="<?php echo rand(1, 1000)?>">
                                <span>Comparer</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="promo <?php if ($products[$j]["promo"][0] == "0" && $products[$j]["promo"][1] == "0") echo "empty";?>">
                        <p <?php if ($products[$j]["promo"][0] == "0") echo 'class="hidden"'?>><span class="bold"><?php echo $products[$j]["promo"][0]?>€</span> de remise immédiate</p>
                        <p <?php if ($products[$j]["promo"][1] == "0") echo 'class="hidden"'?>><span class="bold"><?php echo $products[$j]["promo"][1]?>€</span> remboursés après achat</p>
                    </div>
                </div>
            <?php 
                $j++;
                if ($i % 3 == 0) $j = 1;
            ?>
        <?php endfor;?>
    </div>
    <?php include("./parts/page-nav.php")?>
</div>