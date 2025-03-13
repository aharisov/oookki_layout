<div id="compare-modal" class="modal compare-modal compare-search-modal">
    <div class="title">
        <button class="return">
            <i class="fa-solid fa-chevron-left"></i>
            <span>Retour</span>
        </button>
        <h3>Comparateur</h3>
    </div>
    <div class="compare-search">
        <div class="top">
            <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <input type="text" placeholder="Rechercher">
        </div>
        <div class="content">
            <div class="brand-list"></div>
            <div class="model-list"></div>
        </div>
        <div id="selectedModel"></div>
    </div>
    <div class="compare-inner flex">
        <div class="modal-close" title="Fermer le comparateur"></div>
        <div class="compare-list flex">
            <div class="compare-item" data-id="1">
                <div class="compare-remove js-compare-remove" data-id="1"></div>
                <div class="inner flex">
                    <div class="pic">
                        <img src="https://mobile.free.fr/webpublic/Phone_i_Phone_16_Color_Sarcelle_View_Front_Back_1acd78e913.png" alt="">
                    </div>
                    <div class="right">
                        <div class="brand">Apple</div>
                        <div class="name"><a href="product.php">Iphone 16 Plus</a></div>
                    </div>
                </div>
            </div>
            <div class="compare-item" data-id="2">
                <div class="compare-remove js-compare-remove" data-id="2"></div>
                <div class="inner flex">
                    <div class="pic">
                        <img src="https://mobile.free.fr/webpublic/samsung_galaxy_S25_ULTRA_argent_titane_7930aca960.png" alt="">
                    </div>
                    <div class="right">
                        <div class="brand">Samsung</div>
                        <div class="name"><a href="product.php">Galaxy S25 Ultra</a></div>
                    </div>
                </div>
            </div>
            <div class="compare-item empty"></div>
        </div>
        <div class="compare-buttons flex">
            <button type="button" class="btn btn-red__empty js-clear-compare">Réinitialiser</button>
            <button type="button" class="btn btn-black js-open-compare" disabled data-url="/compare.php">Comparer</button>
        </div>
    </div>
    <p class="note">Sélectionnez jusqu’à <span>2</span> produits pour comparer</p>
</div>