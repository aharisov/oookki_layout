<?php
$parts = parse_url($_SERVER["PHP_SELF"]);
$path_parts= explode('/', $parts["path"]);
$page = $path_parts[count($path_parts) - 1];
?>
<aside class="profile-sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-block">
            <div class="title">
                <i class="fa-solid fa-user"></i>
                <span>Mon profil</span>
            </div>
            <ul class="links">
                <li class="<?php if ($page == "profile-personal.php") echo "active";?>"><a href="profile-personal.php">Mes informations personnelles</a></li>
                <li class="<?php if ($page == "profile-addresses.php") echo "active";?>"><a href="profile-addresses.php">Mes adresses</a></li>
                <li class="<?php if ($page == "profile-gdpr.php") echo "active";?>"><a href="profile-gdpr.php">Mes données personnelles</a></li>
            </ul>
        </div>
        <div class="sidebar-block">
            <div class="title">
                <i class="fa-solid fa-basket-shopping"></i>
                <span>Mes achats</span>
            </div>
            <ul class="links">
                <li class="<?php if ($page == "profile-orders.php") echo "active";?>"><a href="profile-orders.php">Mes achats en cours</a></li>
                <li class="<?php if ($page == "profile-orders.php") echo "active";?>"><a href="profile-orders.php">Mes achats terminés</a></li>
            </ul>
        </div>
        <div class="sidebar-block">
            <div class="title">
                <i class="fa-solid fa-bookmark"></i>
                <span>Mes préférences</span>
            </div>
            <ul class="links">
                <li class="<?php if ($page == "profile-wishlist.php") echo "active";?>"><a href="profile-wishlist.php">Mes favoris</a></li>
            </ul>
        </div>
    </div>
    <button class="btn btn-black js-logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Déconnexion</button>
</aside>