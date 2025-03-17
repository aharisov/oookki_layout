<?php 

    $num = rand(1, 4);

    $products = [
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674089399_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 49,99,
            "name" => "Support mural TV",
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674174453_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 129,99,
            "name" => "Support mural TV",
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674180997_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 29,99,
            "name" => 'Câble HDMI 2.1/48Gbps 1.50M Noir',
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/0745883643622_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 22,
            "name" => 'Parafoudre 8 prises parafoudres + 2 USB',
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674151621_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 14,99,
            "name" => "Multiprise Pack de 2 multiprises x4 Prises",
        )
    ];
?>
<div class="product-card">
    <div class="pic">
        <a href="product.php">
            <img src="<?php echo $products[$num]["pic"]?>" alt="<?php echo $products[$num]["name"]?>">
        </a>
    </div>
    <div class="brand"><a href="brand-page.php">Samsung</a></div>
    <div class="name"><a href="product.php"><?php echo $products[$num]["name"]?></a></div>
    
    <div class="inner">
        <div class="price">
            <div class="price-inner">
                <span><?php echo $products[$num]["price"]?>€</span>
            </div>
        </div>
        <div class="btn to-cart btn-red">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
            </svg>
        </div>
    </div>
</div>