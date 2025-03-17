<?php 
    $props = array(
        "brand" => "Samsung",
        "name" => 'TV AI OLED 55" S90D 2024, 4K',
        "price" => 1195,
        "price_base" => 1295,
        "location" => [12, 18, 24],
        "bonus" => [80, 0]
    );
?>
<article id="product-info" class="product-info tab-panel flex" aria-hidden="false">
    <?php include("./parts/tv-product-page/product-images.php")?>
    <div class="product-info__inner">
        <div class="product-title">
            <div class="brand"><?php echo $props["brand"]?></div>
            <h1><?php echo $props["name"]?></h1>
        </div>

        <div class="product-promo__wrap">
            <h3>Promotions sur ce produit</h3>
            <div class="product-promo">
                <div class="promo-item">
                    <p><?php echo $props["bonus"][0]?>€ remboursés sur demande</p>
                    <a href="https://mobile.free.fr/webpublic/odr_2fb968c22e.pdf" target="_blank">Télécharger le coupon</a>
                </div>
        </div>

        <div class="product-configurator">
            <h3>Configurer mon téléviseur</h3>

            <div class="product-options">
                <div class="option-block">
                    <h5>Choisissez votre moyen de paiement</h5>

                    <ul class="option-props flex pay-type">
                        <li>
                            <input id="pay-type1" type="radio" name="pay-type" value="location" checked />
                            <label for="pay-type1">
                                <p class="config-title">OOOKKI power (loa)</p>
                                <span>à partir de 20€/ mois</span>
                            </label>    
                        </li>
                        <li>
                            <input id="pay-type2" type="radio" name="pay-type" value="credit" />
                            <label for="pay-type2">
                                <p class="config-title">EASY</p>
                                <span>payement en 3 ou 4 fois</span>
                            </label>    
                        </li>
                        <li>
                            <input id="pay-type3" type="radio" name="pay-type" value="cash" />
                            <label for="pay-type3">
                                <p class="config-title">CASH</p>
                                <span>en 1 seule fois</span>
                            </label>    
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-options payment-options">
                <div class="option-block">
                    <h5>En combien de fois ?</h5>

                    <ul class="option-props pay-type pay-subtype" data-type="credit" aria-hidden="true">
                        <li>
                            <input id="credit-3x" type="radio" name="credit" value="3" checked/>
                            <label for="credit-3x">
                                <p class="config-title w-icon">
                                    En 3 fois
                                </p>
                                <span><i><?php echo $props["price"]/3?></i>€/mois</span>
                            </label>  
                        </li>
                        <li>
                            <input id="credit-4x" type="radio" name="credit" value="4" />
                            <label for="credit-4x">
                                <p class="config-title w-icon">
                                    En 4 fois
                                </p>
                                <span><i><?php echo round($props["price"]/4, 2)?></i>€/mois</span>
                            </label>  
                        </li>
                    </ul>

                    <ul class="option-props pay-type pay-subtype" data-type="location" aria-hidden="false">
                        <?php foreach($props["location"] as $index => $location):?>
                        <li>
                            <input id="location-<?php echo $location?>x" 
                                type="radio" 
                                name="location" 
                                value="<?php echo $location?>" 
                                <?php if ($index == 0) echo "checked";?>
                            />
                            <label for="location-<?php echo $location?>x">
                                <p class="config-title"><?php echo $location?> mois</p>
                                <span><i><?php echo round($props["price"]/$location, 2)?></i>€/mois</span>
                            </label>  
                        </li>
                        <?php endforeach?>
                    </ul>
                </div>
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
                            <span class="left"><strong>Financement x12 mois</strong></span>
                            <span class="right"><strong>125€ /mois</strong></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="summary-inner pay-cash" aria-hidden="true">
                <div class="summary-block">
                    <ul>
                        <li>
                            <span class="left"><strong><?php echo $props["name"]?></strong></span>
                            <span class="right"><strong><?php echo $props["price"]?></strong></span>
                        </li>
                        <li>
                            <span class="left">Remboursement après achat</span>
                            <span class="right"><?php echo $props["bonus"][0]?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <button type="button" 
                class="btn btn-red add-to-cart open-modal" 
                data-modal="in-cart-modal"
                data-title='TV AI OLED 55" S90D 2024, 4K'
                data-image="https://images.samsung.com/is/image/samsung/p6pim/fr/tq55s90daexxc/gallery/fr-oled-s90d-tq55s90daexxc-541595850_10139416132943?$684_547_PNG$"
            >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
            </svg>
            Ajouter au panier</button>
        </div>
    </div>
</article>