<nav class="section-nav products-nav mb-common">
    <div class="section-nav__list swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="tv-section-page.php?brand=samsung" class="<?php if ($_GET["brand"] == "samsung") echo "active";?>">
                        <img src="images/demo/tv/samsung.png" alt="" loading="lazy">
                        <span>Samsung</span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="tv-section-page.php?brand=hisense" class="<?php if ($_GET["brand"] == "hisense") echo "active";?>">
                        <img src="images/demo/tv/hisense.png" alt="" loading="lazy">
                        <span>Hisense</span>
                    </a>
                </div>
            </div>  
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="tv-section-page.php?brand=lg" class="<?php if ($_GET["brand"] == "lg") echo "active";?>">
                        <img src="images/demo/tv/lg.png" alt="" loading="lazy">
                        <span>LG</span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-nav__item">
                    <a href="tv-section-page.php?brand=sony" class="<?php if ($_GET["brand"] == "sony") echo "active";?>">
                        <img src="images/demo/tv/sony.png" alt="">
                        <span>Sony</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination circle"></div>
    </div>
</nav>