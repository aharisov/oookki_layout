<header class="flex">
    <div class="cont">
        <div class="header__inner flex">
            <a href="index.php" class="header__logo"><img src="images/logo.png" alt="OOOKKI" title="OOOKKI"></a>
            <div class="header__search">
                <form action="">
                    <input type="text" placeholder="Recherchez des produits essentiels ...">
                    <button type="submit" title="Rechercher"></button>
                </form>
            </div>
            <div class="right flex">
                <div class="header__buttons flex">
                    <div class="header-btn btn-search js-open-search">
                        <img src="images/ic-search.svg" alt="Rechercher" title="Rechercher">
                    </div>
                    <a href="order-step1.php" class="header-btn btn-cart">
                        <img src="images/ic-cart.svg" alt="Panier" title="Panier">
                        <i class="cnt">0</i>
                        <span>Panier</span>
                    </a>
                    <a href="profile/index.php" class="header-btn btn-profile hidden">
                        <img src="images/ic-person-circle.svg" alt="Mon compte" title="Mon compte">
                        <span>Dominique</span>
                    </a>
                    <button class="header-btn js-logout" title="Déconnexion"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                    <a href="login.php" class="header-btn btn-login">
                        <img src="images/ic-person.svg" alt="Connexion" title="Connexion">
                        <span>Connexion</span>
                    </a>
                </div>
                <button
                    aria-label="Ouvrir le menu principal"
                    class="btn-mobile js-open-menu"
                    onClick=""
                >
                    <div class="bar-one"></div>
                    <div class="bar-two"></div>
                    <div class="bar-three"></div>
                </button>
            </div>
        </div>
        <nav class="main-menu">
            <ul class="main-menu__inner flex">
                <li class="main-menu__parent">
                    <span>Abonnements</span>
                    <div class="main-menu__dropdown">
                        <ul>
                            <li><a href="">Tous les forfaits</a></li>
                            <li><a href="">Forfait OOOKKI 5G</a></li>
                            <li><a href="">Séries OOOKKI</a></li>
                            <li><a href="">Forfait Low-cost</a></li>
                            <li><a href="">Forfait flexible</a></li>
                        </ul>
                    </div>
                </li>
                <li class="main-menu__parent">
                    <span>Mobiles</span>
                    <div class="main-menu__dropdown">
                        <ul>
                            <li><a href="mobiles.php">Tous les mobiles</a></li>
                            <li><a href="">Bons plans</a></li>
                            <li><a href="">Smartphones 5G</a></li>
                            <li><a href="">Comparer</a></li>
                        </ul>
                    </div>
                </li>
                <li class="main-menu__parent">
                    <span>TV & Audio</span>
                    <div class="main-menu__dropdown">
                        <ul>
                            <li><a href="">Tous les TV & Audio</a></li>
                            <li><a href="">Samsung</a></li>
                            <li><a href="">Apple</a></li>
                            <li><a href="">Acer</a></li>
                            <li><a href="">Oookki</a></li>
                        </ul>
                    </div>
                </li>
                </li>
                <li class="main-menu__parent">
                    <span>Informatique</span>
                    <div class="main-menu__dropdown">
                        <ul>
                            <li><a href="">Tous les laptops</a></li>
                            <li><a href="">Samsung</a></li>
                            <li><a href="">Apple</a></li>
                            <li><a href="">Acer</a></li>
                            <li><a href="">Oookki</a></li>
                        </ul>
                    </div>
                </li>
                <li class="main-menu__parent">
                    <span>Accessoires</span>
                    <div class="main-menu__dropdown">
                        <ul>
                            <li><a href="">Tous les laptops</a></li>
                            <li><a href="">Samsung</a></li>
                            <li><a href="">Apple</a></li>
                            <li><a href="">Acer</a></li>
                            <li><a href="">Oookki</a></li>
                        </ul>
                    </div>
                </li>
                <li class="main-menu__parent">
                    <span>Consoles</span>
                    <div class="main-menu__dropdown">
                        <ul>
                            <li><a href="">Tous les consoles</a></li>
                            <li><a href="">XBOX</a></li>
                            <li><a href="">SONY</a></li>
                            <li><a href="">Nitendo</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <button class="btn btn-black js-logout" title="Déconnexion"><i class="fa-solid fa-arrow-right-from-bracket"></i>Me déconnecter</button>
        </nav>
    </div>
</header>