<?php 
    $props = [
        array(
            "colors_name" => ["Gris", "Bleu nuit", "Rose"],
            "colors_code" => ["rgb(121, 128, 129)", "rgb(50, 52, 75)", "rgba(255, 217, 223, 0.5)"],
            "colors_stock" => [1, 1, 0],
            "stockage" => ["128 Go", "256 Go", "512 Go"],
        ),
    ]
?>
<div class="product-features">
    <div class="features-top flex">
        <div class="top-feature">
            <div class="icon">
                <img src="images/ic-phone.svg" alt="">
                <span>7,6</span>
            </div>
            <p>Taille de l’écran</p>
            <span>2160 x 1856 px</span>
        </div>
        <div class="top-feature">
            <div class="icon">
                <img src="images/ic-camera.svg" alt="">
            </div>
            <p>Appareil photo arrière</p>
            <span>50 Mpx</span>
        </div>
        <div class="top-feature">
            <div class="icon">
                <img src="images/ic-battery.svg" alt="">
            </div>
            <p>Capacité de batterie</p>
            <span>4400 mAh</span>
        </div>
    </div>
    <div class="features-inner">
        <div class="feature-section">
            <div class="title">Couleurs disponibles</div>
            <ul class="list">
                <?php foreach($props[0]["colors_name"] as $index => $color):?>
                    <li><span style="background: <?php echo $props[0]["colors_code"][$index]?>"></span> <?php echo $color?></li>
                <?php endforeach?>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Stockages disponibles</div>
            <ul class="list">
                <?php foreach($props[0]["stockage"] as $index => $capacity):?>
                    <li><?php echo $capacity?></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Photo</div>
            <ul class="list">
                <li>Appareil photo arrière : 50 Mpx</li>
                <li>Appareil photo frontal : 10 Mpx</li>
                <li>Flash : Oui</li>
                <li>Téléobjectif : 10 Mpx</li>
                <li>Zoom : Oui</li>
                <li>Nombre de caméras : 5</li>
                <li>Grand angle : 12 Mpx</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Vidéo</div>
            <ul class="list">
                <li>Enregistrement vidéo : 8K à 30 ips</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Sécurité</div>
            <ul class="list">
                <li>Déverrouillage par reconnaissance faciale : Oui</li>
                <li>Emplacement du capteur d'écran : cote</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Réseau et connexion</div>
            <ul class="list">
                <li>Compatibilité 4G : Oui</li>
                <li>Compatibilité 5G : Oui</li>
                <li>Bluetooth : Bluetooth 5.3
                </li>
                <li>Wifi : Wifi 6E (ax)</li>
                <li>NFC : Oui</li>
                <li>Bandes 5G NSA : <b>n1, n2, n3, n5, n7, n8, n12, n20, n25, n26, n28, n38, n40</b></li>
                <li>Bandes 4G TDD : <b>B39, B40, B41, B66</b></li>
                <li>Bandes 4G FDD : <b>4G : B1, B2, B3, B4, B5, B7, B8, B12, B13, B17, B18, B19, B20, B25, B26, B28, B32, B38</b></li>
                <li>Bandes 3G : <b>B1(2100), B2(1900), B4(AWS), B5(850), B8(900)</b></li>
                <li>Bandes 2G : <b>GSM850, GSM900, DCS1800, PCS1900</b></li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Autonomie</div>
            <ul class="list">
                <li>Capacité de la batterie : 4400 mAh</li>
                <li>Recharge sans fil : Oui</li>
                <li>Recharge rapide filaire : Oui</li>
                <li>Recharge rapide sans fil : Oui</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Écran</div>
            <ul class="list">
                <li>Taille : 7.6 pouces</li>
                <li>Design : pliable</li>
                <li>Résolution : 2160 x 1856 px</li>
                <li>DPI : 374 DPI</li>
                <li>Écran : Dynamic AMOLED</li>
                <li>Compatibilité HDR</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Performance</div>
            <ul class="list">
                <li>OS : Android version 14</li>
                <li>Processeur : Qualcomm Snapdragon 8 Gen3</li>
                <li>RAM : 12 Go de RAM</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Dans ma boîte</div>
            <ul class="list">
                <li>Garantie de 2 ans par le constructeur</li>
                <li>Guide</li>
                <li>Aiguille d'extraction</li>
                <li><span class="note">*Chargeur non-inclus</span></li>
            </ul>
        </div>
        <div class="feature-section repare-score">
            <div class="title">Indice de réparabilité</div>
            <div class="list">
                <div class="score-left">
                    <div class="inner">
                        <div class="icon"></div>
                        <div class="num">7,8<span>/10</span></div>
                    </div>
                    <a href="https://mobile.free.fr/webpublic/Reparability_grid_smartphone_FR_V2_0_SM_F956_B_b9e14f6b66.pdf" target="_blank">En savoir plus</a>
                </div>
                <div class="score-right">
                    <p>DAS Smartphone</p>
                    <p>Tête : <i>1.24 W/Kg</i></p>
                    <p>Tronc : <i>1.39 W/Kg</i></p>
                    <p>Membres : <i>2.94 W/Kg</i></p>
                </div>
            </div>
        </div>
    </div>
</div>