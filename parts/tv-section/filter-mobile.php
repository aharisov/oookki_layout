<div class="filter-close js-close-filter">
    <img src="images/ic-close.svg" alt="Fermer">
</div>
<div class="filter-head flex">
    <span class="filter-head__title">Filtres</span>
    <span class="filter-head__result"><span>12</span> résultats</span>
</div>

<form class="filter-form" method="get">
    <div class="filter-active">

    </div>
    <div class="filter-inner">
        <div class="filter-block">
            <h4 role="btn" aria-active="true"><span>Marques</span></h4>
            <div class="filter-block__inner" aria-hidden="false">
                <div class="item">
                    <label>
                        <input type="checkbox" name="tv" value="Samsung" <?php if ($_GET["brand"] == "samsung") echo "checked";?>>
                        <span>Samsung <i>(10)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="tv" value="Hisense" <?php if ($_GET["brand"] == "hisense") echo "checked";?>>
                        <span>Hisense <i>(5)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="tv" value="Lg" <?php if ($_GET["brand"] == "lg") echo "checked";?>>
                        <span>LG <i>(2)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="tv" value="Sony" <?php if ($_GET["brand"] == "sony") echo "checked";?>>
                        <span>Sony <i>(4)</i></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-block">
            <h4 role="btn" aria-active="true"><span>Taille de l'écran</span></h4>
            <div class="filter-block__inner" aria-hidden="false">
                <div class="item">
                    <label>
                        <input type="checkbox" name="size">
                        <span>97 pouces (> 245 cm) <i>(1)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="size">
                        <span>85 pouces (214 cm) <i>(5)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="size">
                        <span>75 pouces (189 cm) <i>(6)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="size">
                        <span>55 pouces (140 cm) <i>(9)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="size">
                        <span>49 pouces (123 cm) <i>(7)</i></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-block">
            <h4 role="btn" aria-active="true"><span>Technologie</span></h4>
            <div class="filter-block__inner" aria-hidden="false">
                <div class="item">
                    <label>
                        <input type="checkbox" name="techno">
                        <span>Full Led <i>(1)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="techno">
                        <span>Led <i>(3)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="techno">
                        <span>Mini Led <i>(5)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="techno">
                        <span>Oled <i>(7)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="techno">
                        <span>Qled <i>(6)</i></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-block">
            <h4 role="btn" aria-active="false"><span>Prix</span></h4>
            <div class="filter-block__inner" aria-hidden="true">
                <div class="item">
                    <label>
                        <input type="checkbox" name="price" value="200">
                        <span>Jusqu'à 200€</span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="price" value="499">
                        <span>200€ - 499€</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="filter-block">
            <h4 role="btn" aria-active="false"><span>État</span></h4>
            <div class="filter-block__inner" aria-hidden="true">
                <div class="item">
                    <label>
                        <input type="checkbox" name="etat">
                        <span>Neuf <i>(10)</i></span>
                    </label>
                </div>
                <div class="item">
                    <label>
                        <input type="checkbox" name="etat">
                        <span>Reconditionné <i>(1)</i></span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="filter-btn__mobile">
        <button type="submit" class="btn btn-black">Appliquer</button>
    </div>
</form>