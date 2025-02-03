<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOOKKI page d'accueil</title>

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("./parts/header.php")?>
    <main>
        <?php include("./parts/home/top-slider.php")?>
        <!-- home packages -->
        <section class="home-packs home-section mb-common">
            <div class="cont">
                <div class="section-head flex">
                    <h2>Offres forfaits <span class="text-red">sans engagements</span></h2>
                    <a href="" class="section-link__top link">Voir tous les forfaits</a>
                </div>

                <div class="packs-list flex">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="pack-item">
                                    <h3 class="pack-item__title">One</h3>
                                    <div class="pack-item__offer">100Mo</div>
                                    <ul class="pack-item__specs">
                                        <li class="calls"><strong>2 Heures</strong> d’appels en France</li>
                                        <li class="sms">SMS <strong>Illimités</strong></li>
                                        <li class="mms">MMS <strong>Illimités</strong></li>
                                        <li class="net4g">
                                            <span>Internet <strong>100Mo</strong> en <strong>4G</strong></span>
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
                                        <a href="" class="btn btn-red__empty pack-item__link">Voir l’offre</a>
                                        <a href="" class="btn btn-red js-open-modal" data-modal="pack-modal" data-id="1">Je souscris</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="pack-item">
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
                                        <a href="" class="btn btn-red__empty">Voir l’offre</a>
                                        <a href="" class="btn btn-red js-open-modal" data-modal="pack-modal" data-id="2">Je souscris</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="pack-item">
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
                                        <a href="" class="btn btn-red__empty">Voir l’offre</a>
                                        <a href="" class="btn btn-red js-open-modal" data-modal="pack-modal" data-id="3">Je souscris</a>
                                    </div>
                                </div>
                            </div> 
                        </div> <!-- .swiper-wrapper -->
                        <div class="swiper-pagination circle"></div>
                    </div> <!-- .swiper -->
                </div>
                <div class="section-link__bottom flex">
                    <a href="" class="link">Voir tous les forfaits</a>
                </div>
            </div>
        </section>
        <!-- difficile choisir -->
        <div class="howto-block mb-common">
            <div class="cont">
                <div class="howto-list flex">
                    <div class="howto-item">
                        <div class="pic"><img src="images/home/pic-howto1.jpg" alt="Notre réseau"></div>
                        <div class="inner">
                            <div class="title">Notre réseau</div>
                            <div class="text">Notre engagement envers l’excellence se reflète dans la robustesse et la fiabilité de notre réseau. Nous comprenons que dans le monde d’aujourd’hui, rester connecté est plus important que jamais. </div>
                            <a href="" class="btn btn-black">Voir le réseau</a>
                        </div>
                    </div>
                    <div class="howto-item">
                        <div class="pic"><img src="images/home/pic-howto2.jpg" alt="Difficile de choisir"></div>
                        <div class="inner">
                            <div class="title">Difficile de choisir</div>
                            <div class="text">Nous savons que le choix du bon téléphone peut être une tâche ardue, c’est pourquoi notre équipe d’experts est toujours disponible pour vous aider à naviguer dans notre large sélection et à trouver l’appareil qui correspond le mieux à vos besoins.</div>
                            <a href="" class="btn btn-black">Trouver votre mobile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- phones selection -->
        <section class="home-section home-products mb-common">
            <div class="cont">
                <div class="section-head flex">
                    <div class="subtitle">Notre sélection</div>
                    <h2>Smartphone <span class="text-red">+ forfait 5G</span></h2>
                    <a href="" class="section-link__top link">Voir tous les téléphones</a>
                </div>

                <div class="products-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card">
                                <a href="">
                                    <div class="pic">
                                        <img src="images/home/Master_Phone_Samsung_8_912cba634f 2.png" alt="Samsung Galaxy Z Fold6">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="brand">Samsung</div>
                                    <div class="name">Galaxy Z Fold6</div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <a href="">
                                    <div class="pic">
                                        <img src="images/home/Carrousel_02_Samsung_Galaxy_Z_Fold6_Rose_c25064c132 1.png" alt="Samsung Galaxy S24 Ultra">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="brand">Samsung</div>
                                    <div class="name">Galaxy S24 Ultra</div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <a href="">
                                    <div class="pic">
                                        <img src="images/home/Carrousel_02_Samsung_Galaxy_Z_Flip6_Bleu_9b27ecacfe 1.png" alt="Samsung GalaxyZ Flip6">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="brand">Samsung</div>
                                    <div class="name">GalaxyZ Flip6</div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <a href="">
                                    <div class="pic">
                                        <img src="images/home/samsung-galaxy-S25-ULTRA-bleu.png" alt="Samsung Galaxy S25 Ultra">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="brand">Samsung</div>
                                    <div class="name">Galaxy S25 Ultra</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-pagination circle"></div>
                  
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="section-link__bottom flex">
                    <a href="" class="link">Voir tous les téléphones</a>
                </div>
            </div>
        </section>

        <!-- advantages -->
        <section class="home-advants home-section mb-common">
            <div class="cont">
                <h2>Pourquoi choisir <span>OOOKKI</span> ?</h2>
                <div class="advants-list flex">
                    <div class="advants-item">
                        <div class="pic"><img src="images/home/adv1-new.jpg" alt=""></div>
                        <div class="inner">
                            <div class="text">Notre assistance téléphonique est disponible 24 heures sur 24, 7 jours sur 7, ce qui signifie que vous pouvez toujours compter sur nous, peu importe l’heure ou le jour. </div>
                            <a href="" class="btn btn-black">Contacter l’assistance</a>
                        </div>
                    </div>
                    <div class="advants-item">
                        <div class="pic"><img src="images/home/adv2.png" alt=""></div>
                        <div class="inner">
                            <div class="text">Notre engagement envers l’excellence se reflète dans la robustesse et la fiabilité de notre réseau. Nous comprenons que dans le monde d’aujourd’hui, rester connecté est plus important que jamais. </div>
                            <a href="" class="btn btn-black">Voir le réseau</a>
                        </div>
                    </div>
                    <div class="advants-item">
                        <div class="pic"><img src="images/home/adv3.jpg" alt=""></div>
                        <div class="inner">
                            <div class="text">Dans un monde où la technologie évolue rapidement, nous comprenons l’importance d’un téléphone qui offre à la fois des performances exceptionnelles et un excellent rapport qualité-prix.</div>
                            <a href="" class="btn btn-black">En savoir plus</a>
                        </div>
                    </div>
                    <div class="advants-item">
                        <div class="pic"><img src="images/home/adv4.jpg" alt=""></div>
                        <div class="inner">
                            <div class="text">Dans notre boutique, nous croyons que chaque individu a des besoins uniques en matière de technologie. C’est pourquoi nous sommes fiers d’offrir un large choix de téléphones pour répondre à une variété de préférences et de budgets.</div>
                            <a href="" class="btn btn-black">Voir les offres</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- faq -->
        <section class="home-section faq mb-common">
            <div class="cont">
                <h2>Quelques conseils ?</h2>
                <div class="faq-list">
                    <div class="faq-item accordion-item">
                        <div class="faq-item__title accordion-head" role="button" tabindex="0">Choisir le meilleur téléphone <span class="special-title">OOOKKI</span></div>
                        <div class="faq-item__text accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec velit sed lacus malesuada cursus. Donec urna libero, bibendum sit amet sollicitudin sed, luctus nec mi. Nullam vehicula dolor id nisi semper imperdiet. Cras tempus ante et nunc rutrum posuere. Nunc at elit vel elit sollicitudin congue pretium quis tortor. </div>
                    </div>
                    <div class="faq-item accordion-item">
                        <div class="faq-item__title accordion-head" role="button" tabindex="1">Recevoir sa carte sim gratuitement</div>
                        <div class="faq-item__text accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec velit sed lacus malesuada cursus. Donec urna libero, bibendum sit amet sollicitudin sed, luctus nec mi. Nullam vehicula dolor id nisi semper imperdiet. Cras tempus ante et nunc rutrum posuere. Nunc at elit vel elit sollicitudin congue pretium quis tortor. </div>
                    </div>
                    <div class="faq-item accordion-item">
                        <div class="faq-item__title accordion-head" role="button" tabindex="2">L’espace abonnés <span class="special-title">OOOKKI</span></div>
                        <div class="faq-item__text accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec velit sed lacus malesuada cursus. Donec urna libero, bibendum sit amet sollicitudin sed, luctus nec mi. Nullam vehicula dolor id nisi semper imperdiet. Cras tempus ante et nunc rutrum posuere. Nunc at elit vel elit sollicitudin congue pretium quis tortor. </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("./parts/footer.php")?>
</body>
</html>