<div class="product-top">
    <?php include("product-breadcrumbs.php")?>
    <div class="product-top__inner flex">
        <div class="product-top__name">Galaxy Z Fold6</div>
        <div class="product-top__tabs">
            <div class="product-top__tabs-select">Présentation</div>
            <div class="product-top__tabs-switch">
                <button type="button" class="tab-button active" data-type="1" data-tab="product-info">Présentation</button>
                <button type="button" class="tab-button" data-type="2" data-tab="product-features">Caractéristiques</button>
                <button type="button" class="tab-button" data-type="3" data-tab="product-description">Description</button>
            </div>
        </div>
        <div class="product-top__price flex">
            <div class="info">
                <span class="info-sum">200 €</span>
                <i class="info-note">puis 24€/mois</i>
            </div>
            <div class="buttons flex">
                <button type="button" class="btn btn-black__empty js-show-price" data-modal="price-details-modal">Détails du prix</button>
                <button type="button" class="btn btn-red  open-modal add-to-cart" 
                    title="Ajouter au panier"
                    data-modal="in-cart-modal"
                    data-title="Samsung Galaxy Z Fold6"
                    data-image="images/demo/z-fold6/Phone_Samsung_ZFold6_blue_1.png"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>