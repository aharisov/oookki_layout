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
<article id="product-features" class="product-features tab-panel" aria-hidden="true">
    <div class="features-top flex">
        <div class="top-feature">
            <div class="icon">
                <img src="images/ic-phone.svg" alt="">
            </div>
            <p>Taille de l’écran</p>
            <span>7,6" (2160 x 1856 px)</span>
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
            <ul class="list special">
                <?php foreach($props[0]["colors_name"] as $index => $color):?>
                    <li><span style="background: <?php echo $props[0]["colors_code"][$index]?>"></span> <?php echo $color?></li>
                <?php endforeach?>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Stockages disponibles</div>
            <ul class="list special capacity">
                <?php foreach($props[0]["stockage"] as $index => $capacity):?>
                    <li><?php echo $capacity?></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Photo</div>
            <ul class="list">
                <li><span>Appareil photo arrière :</span> 50 Mpx</li>
                <li><span>Appareil photo frontal :</span> 10 Mpx</li>
                <li><span>Flash :</span> Oui</li>
                <li><span>Téléobjectif :</span> 10 Mpx</li>
                <li><span>Zoom :</span> Oui</li>
                <li><span>Nombre de caméras :</span> 5</li>
                <li><span>Grand angle :</span> 12 Mpx</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Vidéo</div>
            <ul class="list">
                <li><span>Enregistrement vidéo :</span> 8K à 30 ips</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Sécurité</div>
            <ul class="list">
                <li><span>Déverrouillage par reconnaissance faciale :</span> Oui</li>
                <li><span>Emplacement du capteur d'écran :</span> cote</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Réseau et connexion</div>
            <ul class="list">
                <li><span>Compatibilité 4G :</span> Oui</li>
                <li><span>Compatibilité 5G :</span> Oui</li>
                <li><span>Bluetooth :</span> Bluetooth 5.3
                </li>
                <li><span>Wifi :</span> Wifi 6E (ax)</li>
                <li><span>NFC :</span> Oui</li>
                <li><span>Bandes 5G NSA :</span> <b>n1, n2, n3, n5, n7, n8, n12, n20, n25, n26, n28, n38, n40</b></li>
                <li><span>Bandes 4G TDD :</span> <b>B39, B40, B41, B66</b></li>
                <li><span>Bandes 4G FDD :</span> <b>4G : B1, B2, B3, B4, B5, B7, B8, B12, B13, B17, B18, B19, B20, B25, B26, B28, B32, B38</b></li>
                <li><span>Bandes 3G :</span> <b>B1(2100), B2(1900), B4(AWS), B5(850), B8(900)</b></li>
                <li><span>Bandes 2G :</span> <b>GSM850, GSM900, DCS1800, PCS1900</b></li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Autonomie</div>
            <ul class="list">
                <li><span>Capacité de la batterie :</span> 4400 mAh</li>
                <li><span>Recharge sans fil :</span> Oui</li>
                <li><span>Recharge rapide filaire :</span> Oui</li>
                <li><span>Recharge rapide sans fil :</span> Oui</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Écran</div>
            <ul class="list">
                <li><span>Taille :</span> 7.6 pouces</li>
                <li><span>Design :</span> pliable</li>
                <li><span>Résolution :</span> 2160 x 1856 px</li>
                <li><span>DPI :</span> 374 DPI</li>
                <li><span>Écran :</span> Dynamic AMOLED</li>
                <li><span>Compatibilité :</span> HDR</li>
            </ul>
        </div>
        <div class="feature-section">
            <div class="title">Performance</div>
            <ul class="list">
                <li><span>OS :</span> Android version 14</li>
                <li><span>Processeur :</span> Qualcomm Snapdragon 8 Gen3</li>
                <li><span>RAM :</span> 12 Go de RAM</li>
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
                        <div class="icon">
                            <svg width="46" height="46" viewBox="0 0 126 126" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M106.577 0c11.01.099 19.882 9.052 19.882 20.062v86.515c-.098 10.94-8.942 19.784-19.882 19.882H20.062c-11.01 0-19.964-8.873-20.062-19.883V20.062C0 8.982 8.982 0 20.062 0h86.515ZM66.275 11.285H55.348a2.687 2.687 0 0 0-2.508 2.149l-1.433 9.135a39.944 39.944 0 0 0-11.643 4.836l-7.7-5.553a2.687 2.687 0 0 0-3.224.179l-7.7 7.7a2.687 2.687 0 0 0-.179 3.224l5.553 7.7a39.944 39.944 0 0 0-4.836 11.643l-9.14 1.439a2.687 2.687 0 0 0-2.149 2.507v10.927a2.687 2.687 0 0 0 2.149 2.508l9.135 1.433a39.944 39.944 0 0 0 4.836 11.643l-5.553 7.7a2.687 2.687 0 0 0 .179 3.224l7.7 7.7c.915.77 2.23.844 3.224.179l7.7-5.553c3.6 2.218 7.53 3.85 11.643 4.836l1.439 9.144a2.687 2.687 0 0 0 2.508 2.149h10.926a2.687 2.687 0 0 0 2.507-2.149l1.433-9.135 4.12-1.254-8.777-8.781-4.836.358a29.555 29.555 0 1 1 29.2-23.644l8.6 8.6a39.586 39.586 0 0 0 1.612-5.015l9.135-1.433a2.687 2.687 0 0 0 2.149-2.508V56.244a2.687 2.687 0 0 0-2.329-2.508v.001l-9.135-1.433a39.944 39.944 0 0 0-4.836-11.643l5.553-7.7a2.687 2.687 0 0 0-.179-3.224l-7.7-7.7a2.687 2.687 0 0 0-3.224-.179l-7.7 5.553a39.944 39.944 0 0 0-11.643-4.836l-1.443-9.141a2.687 2.687 0 0 0-2.507-2.149Zm6.999 37.378a18.629 18.629 0 0 0-18.285-3.878.9.9 0 0 0-.357 1.249L65.738 57.14a3.941 3.941 0 0 1 0 5.553l-4.478 4.478a3.941 3.941 0 0 1-5.553 0L44.601 56.068a.9.9 0 0 0-1.254.358 18.629 18.629 0 0 0 21.674 24l19.168 19.345a9.943 9.943 0 0 0 14.148-13.972l-19.348-19.34a18.629 18.629 0 0 0-5.715-17.796Z" fill="currentcolor" fill-rule="nonzero"></path></svg>
                        </div>
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
</article>