<?php
$parts = parse_url($_SERVER["PHP_SELF"]);
$path_parts= explode('/', $parts["path"]);
$page = $path_parts[count($path_parts) - 1];

$title = ["Mes achats", "Mes informations personnelles", "Mes adresses", "Mes favoris", "Mes données personnelles", "Détails de la commande N° PDXUFISVW"];
?>
<nav class="breadcrumbs">
    <ul class="flex">
        <li><a href="../index.php">Accueil</a></li>
        <?php if ($page == "index.php"):?>
            <li><span>Mon compte</span></li>
        <?php else:?>
            <li><a href="index.php">Mon compte</a></li>
            <li><span>
                <?php
                    if ($page == "profile-orders.php") echo $title[0];
                    if ($page == "profile-personal.php") echo $title[1];
                    if ($page == "profile-addresses.php") echo $title[2];
                    if ($page == "profile-wishlist.php") echo $title[3];
                    if ($page == "profile-gdpr.php") echo $title[4];
                    if ($page == "profile-orders-archive.php") echo $title[0];
                    if ($page == "profile-order-details.php") echo $title[5];
                ?>
            </span></li>
        <?php endif;?>
    </ul>
</nav>