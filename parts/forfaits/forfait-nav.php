<nav class="section-nav mb-common">
    <div class="section-nav__list swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="forfait-list.php?forfait=5g" class="<?php if ($_GET["forfait"] == "5g") echo "active";?>">
                        <img src="images/ic-forfait1.png" alt="">
                        <span>Forfaits OOOKKI 5G</span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="forfait-list.php?forfait=s" class="<?php if ($_GET["forfait"] == "s") echo "active";?>">
                        <img src="images/ic-forfait2.png" alt="">
                        <span>Séries OOOKKI</span>
                    </a>
                </div>
            </div>  
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="forfait-list.php?forfait=low" class="<?php if ($_GET["forfait"] == "low") echo "active";?>">
                        <img src="images/ic-forfait3.png" alt="">
                        <span>Forfaits Low-cost</span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="forfait-list.php?forfait=flex" class="<?php if ($_GET["forfait"] == "flex") echo "active";?>">
                        <img src="images/ic-forfait4.png" alt="">
                        <span>Forfaits flexibles</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination circle"></div>
    </div>
</nav>