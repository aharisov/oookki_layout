<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes adresses</title>

    <link rel="stylesheet" href="../css/swiper.css">
    <link rel="stylesheet" href="../css/photoswipe.css">
    <link rel="stylesheet" href="../css/styles.css?t=<?php echo time()?>">
    <script src="https://kit.fontawesome.com/425e9c0def.js" crossorigin="anonymous"></script>
</head>
<body class="profile-page">
    <?php include("../parts/profile/header-profile.php")?>
    <main>
        <div class="cont">
            <?php include("../parts/profile/profile-breadcrumbs.php")?>

            <div class="profile-page-inner flex">
                <?php include("../parts/profile/profile-sidebar.php")?>
                <div class="profile-right">
                    <h1>Mettre à jour mon adresse</h1>
                    <?php include("../parts/profile/form-modify-address.php")?>
                </div>
            </div>
    </main>
    <?php include("../parts/profile/footer-profile.php")?>
</body>
</html>