<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la commande</title>

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
                    <div class="title-wrap">
                        <h1>Détails de la commande</h1>

                        <a href="../images/demo/FA000001.pdf" class="btn btn-black__empty icon-left" target="_blank">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>Téléchargez votre facture</span>
                        </a>
                    </div>
                    <?php include("../parts/profile/order-details.php")?>
                </div>
            </div>
    </main>
    <?php include("../parts/profile/footer-profile.php")?>
</body>
</html>