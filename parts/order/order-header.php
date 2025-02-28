<?php

$parts = parse_url($_SERVER["PHP_SELF"]);
$path_parts= explode('/', $parts["path"]);
$page = $path_parts[count($path_parts) - 1];
$stepNumber = "";
$stepName = "";
$mobileIcon = "";

switch($page) {
    case "order-step1.php":
        $stepNumber = "1";
        $stepName = "Récapitulatif";
        $mobileIcon = '<i class="fa-solid fa-gear"></i>';
        break;
    case "order-step2.php":
        $stepNumber = "2";
        $stepName = "Mes données";
        $mobileIcon = '<i class="fa-regular fa-circle-user"></i>';
        break;
    case "order-step3.php":
        $stepNumber = "3";
        $stepName = "Livraison";
        $mobileIcon = '<i class="fa-solid fa-truck"></i>';
        break;
    case "order-step4.php":
        $stepNumber = "4";
        $stepName = "Paiement";
        $mobileIcon = '<i class="fa-solid fa-credit-card"></i>';
        break;
    case "order-step5.php":
        $stepNumber = "5";
        $stepName = "Confirmation";
        $mobileIcon = '<i class="fa-solid fa-circle-check"></i>';
        break;
}
?>
<header class="order-header">
    <div class="cont">
        <div class="header__inner flex">
            <a href="index.php" class="header__logo"><img src="images/logo.png" alt="OOOKKI" title="OOOKKI"></a>

            <div class="order-steps">
                <div class="order-step current">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="order-step <?php if ($page == "order-step2.php") echo "current";?>">
                    <span></span>
                    <i class="fa-regular fa-circle-user"></i>
                </div>
                <div class="order-step <?php if ($page == "order-step3.php") echo "current";?>">
                    <span></span>
                    <i class="fa-solid fa-truck"></i>
                </div>
                <div class="order-step <?php if ($page == "order-step4.php") echo "current";?>">
                    <span></span>
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <!-- <div class="order-step <?php if ($page == "order-step5.php") echo "current";?>">
                    <span></span>
                    <i class="fa-regular fa-pen-to-square"></i>
                </div> -->
                <div class="order-step <?php if ($page == "order-step5.php") echo "current";?>">
                    <span></span>
                    <i class="fa-solid fa-circle-check"></i>
                </div>
            </div>

            <div class="order-current-step flex">
                <div class="content flex">
                    <p class="sup-title">Étape <?php echo $stepNumber?> / 5</p>
                    <div class="title"><?php echo $stepName?></div>
                </div>
                <div class="icon-mobile"><?php echo $mobileIcon?></div>
            </div>
        </div>
    </div>
</header>