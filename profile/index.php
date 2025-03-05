<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre compte</title>

    <link rel="stylesheet" href="../css/swiper.css">
    <link rel="stylesheet" href="../css/photoswipe.css">
    <link rel="stylesheet" href="../css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body class="profile-page">
    <?php include("../parts/header-profile.php")?>
    <main>
        <div class="cont">
            <h1>Mon compte</h1>
            <div class="profile-links">
                <div class="profile-link">
                    <a href="profile-orders.php">
                        <span class="icon"><i class="fa-solid fa-clock-rotate-left"></i></span>
                        <span class="name">Historique de mes commandes</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-personal.php">
                        <span class="icon"><i class="fa-solid fa-circle-user"></i></span>
                        <span class="name">Informations personnelles</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-addresses.php">
                        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="name">Mes adresses de livraison</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-wishlist.php">
                        <span class="icon"><i class="fa-solid fa-clipboard-list"></i></span>
                        <span class="name">Mes produits favoris</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-gdpr.php">
                        <span class="icon"><i class="fa-solid fa-clipboard-user"></i></span>
                        <span class="name">Informations GDPR</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php include("../parts/footer-profile.php")?>
</body>
</html>