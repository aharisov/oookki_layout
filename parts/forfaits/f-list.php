<?php
    // echo '<pre>';print_r($_GET);echo '</pre>'; 
?>
<div class="packs-list mb-common">
    <div class="pack-item" <?php if (count($_GET) == 0 || ($_GET["forfait"] == "5g" || $_GET["forfait"] == "low")) echo "aria-hidden='false'";else echo "aria-hidden='true'"; ?>>
        <h3 class="pack-item__title">One</h3>
        <div class="pack-item__offer">3Go</div>
        <ul class="pack-item__specs">
            <li class="calls"><strong>2 Heures</strong> d’appels en France</li>
            <li class="sms">SMS <strong>Illimités</strong></li>
            <li class="mms">MMS <strong>Illimités</strong></li>
            <li class="net4g">
                <span>Internet <strong>3Go</strong> en <strong>4G</strong></span>
                <i>SMS et MMS illimités depuis l’Europe, DOM.</i>
            </li>
        </ul>
        <div class="pack-item__price">
            <div class="num">2</div>
            <div class="more">
                <span>€ 99</span>
                <i>/ mois TTC</i>
            </div>
            <div class="note">Sans engagements</div>
        </div>
        <div class="pack-item__buttons">
            <a href="forfait-details.php" class="btn btn-black__empty pack-item__link">Voir l’offre</a>
            <a href="" class="btn btn-red js-open-modal" data-modal="pack-modal" data-id="1">Je souscris</a>
        </div>
    </div>
    <div class="pack-item" <?php if (count($_GET) == 0 || ($_GET["forfait"] == "5g" || $_GET["forfait"] == "flex")) echo "aria-hidden='false'";else echo "aria-hidden='true'"; ?>>
        <h3 class="pack-item__title">Génial</h3>
        <div class="pack-item__offer">140Go</div>
        <ul class="pack-item__specs">
            <li class="calls">Appels <strong>Illimités</strong></li>
            <li class="sms">SMS <strong>Illimités</strong></li>
            <li class="mms">MMS <strong>Illimités</strong></li>
            <li class="net5g">
                <span>Internet <strong>140Go</strong> en <strong>5G</strong></span>
                <i>SMS et MMS illimités depuis l’Europe, DOM.</i>
            </li>
        </ul>
        <div class="pack-item__price">
            <div class="num">10</div>
            <div class="more">
                <span>€ 99</span>
                <i>/ mois TTC</i>
            </div>
            <div class="note">Sans engagements</div>
        </div>
        <div class="pack-item__buttons">
            <a href="forfait-details.php" class="btn btn-black__empty">Voir l’offre</a>
            <a href="" class="btn btn-red js-open-modal" data-modal="pack-modal" data-id="2">Je souscris</a>
        </div>
    </div>
    <div class="pack-item" <?php if (count($_GET) == 0 || ($_GET["forfait"] == "5g" || $_GET["forfait"] == "s")) echo "aria-hidden='false'";else echo "aria-hidden='true'"; ?>>
        <h3 class="pack-item__title">Extrems</h3>
        <div class="pack-item__offer">300Go</div>
        <ul class="pack-item__specs">
            <li class="calls">Appel <strong>Illimités</strong></li>
            <li class="sms">SMS <strong>Illimités</strong></li>
            <li class="mms">MMS <strong>Illimités</strong></li>
            <li class="net5g">
                <span>Internet <strong>300Go</strong> en <strong>5G</strong></span>
                <i>SMS et MMS illimités depuis l’Europe, DOM.</i>
            </li>
        </ul>
        <div class="pack-item__price">
            <div class="num">18</div>
            <div class="more">
                <span>€ 99</span>
                <i>/ mois TTC</i>
            </div>
            <div class="note">Sans engagements</div>
        </div>
        <div class="pack-item__buttons">
            <a href="forfait-details.php" class="btn btn-black__empty">Voir l’offre</a>
            <a href="" class="btn btn-red js-open-modal" data-modal="pack-modal" data-id="3">Je souscris</a>
        </div>
    </div>
</div>