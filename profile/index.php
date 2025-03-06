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
    <?php include("../parts/profile/header-profile.php")?>
    <main>
        <div class="profile-top">
            <div class="inner">
                <h2>Bonjour Dominique</h2>
                <p>Bienvenue dans votre espace OOOKKI !</p>
            </div>
        </div>
        <div class="cont">
            <?php include("../parts/profile/profile-breadcrumbs.php")?>
            <h1>Mon compte</h1>
            <div class="profile-links">
                <div class="profile-link">
                    <a href="profile-orders.php">
                        <span class="icon"><i class="fa-solid fa-clock-rotate-left"></i></span>
                        <span class="name">Mes achats</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-addresses.php">
                        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="name">Mes adresses</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-wishlist.php">
                        <span class="icon"><i class="fa-solid fa-bookmark"></i></span>
                        <span class="name">Mes favoris</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-personal.php">
                        <span class="icon"><i class="fa-solid fa-circle-user"></i></span>
                        <span class="name">Mes informations personnelles</span>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="profile-gdpr.php">
                        <span class="icon"><i class="fa-solid fa-clipboard-user"></i></span>
                        <span class="name">Mes données personnelles</span>
                    </a>
                </div>
            </div>
        </div>
        <?php include("../parts/profile/profile-recommend.php")?>
    </main>
    <?php include("../parts/profile/footer-profile.php")?>
</body>
</html>