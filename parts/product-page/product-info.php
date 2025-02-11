<?php 
    $props = array(
        "brand" => "Samsung",
        "name" => "Galaxy Z Fold6",
        "colors_name" => ["Gris", "Bleu nuit", "Rose"],
        "colors_code" => ["rgb(121, 128, 129)", "rgb(50, 52, 75)", "rgba(255, 217, 223, 0.5)"],
        "colors_stock" => [1, 1, 0],
        "stockage" => ["128 Go", "256 Go", "512 Go"],
        "price" => 1200,
        "price_base" => 1960,
        "location" => [12, 18, 24],
        "bonus" => [80, 150]
    );
?>
<section class="product-info">
    <div class="product-title">
        <div class="brand"><?php echo $props["brand"]?></div>
        <h1><?php echo $props["name"]?></h1>
        <div class="model"><?php echo $props["colors_name"][1]?> - <?php echo $props["stockage"][1]?></div>
    </div>

    <div class="return-calculate">
        <button>
            <p>Estimez votre ancien mobile et profitez d’une remise de 100€ supplémentaire</p>
        </button>
    </div>

    <div class="product-promo">
        <div class="promo-item">
            <p><?php echo $props["bonus"][0]?>€ remboursés sur demande</p>
            <a href="" target="_blank">Télécharger le coupon</a>
        </div>
        <div class="promo-item">
            <p><?php echo $props["bonus"][1]?>€ de bonus reprise</p>
            <a href="https://mobile.free.fr/webpublic/odr_2fb968c22e.pdf"></a>
        </div>
    </div>

    <div class="product-configurator">
        <h3>Configurer mon téléphone</h3>

        <div class="product-options">
            <div class="option-block">
                <h5>Choisissez votre capacité de stockage</h5>

                <ul class="option-props flex capacity">
                    <?php foreach($props["stockage"] as $index => $capacity):?>
                        <li>
                            <input id="capacity<?php echo $index?>" type="radio" name="capacity" <?php if ($index == 0) echo "checked"?> />
                            <label for="capacity<?php echo $index?>">
                                <span><?php echo $capacity?></span>
                            </label>    
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="option-block">
                <h5>Choisissez votre couleur</h5>

                <ul class="option-props flex color">
                    <?php foreach($props["colors_name"] as $index => $color):?>
                        <li>
                            <input id="color<?php echo $index?>" type="radio" name="color" 
                                <?php if ($index == 0) echo "checked"?> 
                                <?php if ($props["colors_stock"][$index] == 0) echo "disabled";?> />
                            <label for="color<?php echo $index?>">
                                <span style="background: <?php echo $props["colors_code"][$index]?>"></span>
                                <p><?php echo $color?></p>
                            </label>    
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="option-block">
                <h5>Choisissez votre moyen de paiement</h5>

                <ul class="option-props flex pay-type">
                    <li>
                        <input id="pay-type1" type="radio" name="pay-type" value="location" checked />
                        <label for="pay-type1">
                            <p class="config-title">Location</p>
                            <span>à partir de 20 €/ mois</span>
                        </label>    
                    </li>
                    <li>
                        <input id="pay-type2" type="radio" name="pay-type" value="credit" />
                        <label for="pay-type2">
                            <p class="config-title w-icon">
                                Comptant
                                <img src="images/ic-alma.svg" alt="">
                            </p>
                            <span>en 3 ou 4 fois</span>
                        </label>    
                    </li>
                    <li>
                        <input id="pay-type3" type="radio" name="pay-type" value="cash" />
                        <label for="pay-type3">
                            <p class="config-title"><?php echo $props["price"]?> €</p>
                            <span>en 1 seule fois</span>
                        </label>    
                    </li>
                </ul>
            </div>
        </div>
        <div class="payment-options">
            <ul class="option-props hidden" data-type="credit">
                <li>
                    <input id="credit-3x" type="radio" name="credit-3x" value="3x" />
                    <label for="credit-3x">
                        <p class="config-title w-icon">
                            En 3 fois
                            <img src="images/ic-alma.svg" alt="">
                        </p>
                        <span><i><?php echo $props["price"]/3?></i>€/mois</span>
                    </label>  
                </li>
                <li>
                    <input id="credit-4x" type="radio" name="credit-4x" value="4x" />
                    <label for="credit-4x">
                        <p class="config-title w-icon">
                            En 4 fois
                            <img src="images/ic-alma.svg" alt="">
                        </p>
                        <span><i><?php echo round($props["price"]/4, 2)?></i>€/mois</span>
                    </label>  
                </li>
            </ul>

            <ul class="option-props hidden" data-type="location">
                <?php foreach($props["location"] as $index => $location):?>
                <li>
                    <input id="location-<?php echo $location?>x" type="radio" name="location" value="location-<?php echo $location?>x" />
                    <label for="location-<?php echo $location?>x">
                        <p class="config-title"><?php echo $location?> mois</p>
                        <span><i><?php echo round($props["price"]/$location, 2)?></i>€/mois</span>
                    </label>  
                </li>
                <?php endforeach?>
            </ul>
        </div>
    </div>
    <div class="product-summary">
        <h3>Détail du prix</h3>
        <div class="summary-inner">
            <div class="summary-block">
                <ul>
                    <li>
                        <span class="left"><strong><?php echo $props["name"]?></strong></span>
                        <span class="right"><strong><?php echo $props["price"]?></strong></span>
                    </li>
                    <li>
                        <span class="left">
                            <p>Prix à payer aujourd'hui </p>
                            <i>dont 3,07€ d'éco-participation</i>
                        </span>
                        <span class="right"><?php echo $props["price"]?></span>
                    </li>
                    <li>
                        <span class="left">Remboursement après achat</span>
                        <span class="right"><?php echo $props["bonus"][0]?></span>
                    </li>
                </ul>
                <button type="button" class="link open-modal" data-modal="price-details-modal">Voir le détail du prix</button>
            </div>
            <div class="summary-block">
                <ul class="block-body">
                    <li>
                        <span class="left"><strong>Forfait 200Go 5G avantages smartphone</strong></span>
                        <span class="right"><strong>30,99 €/mois</strong></span>
                    </li>
                    <li>
                        <span class="left">
                            <p>Pendant 12 mois puis 40,99 €/mois</p>
                            <p>engagement 24 mois</p>
                        </span>
                    </li>
                </ul>
                <button type="button" class="link open-modal" data-modal="price-details-modal">Voir le détail du forfait</button>
            </div>
            <div class="summary-block">
                <ul class="block-body">
                    <li>
                        <span class="left"><strong>Financement smartphone x24 mois</strong></span>
                        <span class="right"><strong>22,49 €/mois</strong></span>
                    </li>
                    <li>
                        <span class="left">
                            <p>Prélevés par Alma</p>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <button type="button" class="btn btn-red">Ajouter au panier</button>
    </div>
</section>