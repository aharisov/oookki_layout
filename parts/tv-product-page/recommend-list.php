<?php 
    $products = [
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674089399_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 49,99,
            "price_new" => 0,
            "name" => "Support mural TV",
            "brand" => "ESSENTIELB"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674174453_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 129,99,
            "price_new" => 169,99,
            "name" => "Support mural TV",
            "brand" => "ADEQWAT"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674180997_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 29,99,
            "price_new" => 0,
            "name" => 'Câble HDMI 2.1/48Gbps 1.50M Noir',
            "brand" => "ADEQWAT"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/0745883643622_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 22,
            "price_new" => 25,99,
            "name" => 'Parafoudre 8 prises parafoudres + 2 USB',
            "brand" => "BELKIN"
        ),
        array(
            "pic" => "https://boulanger.scene7.com/is/image/Boulanger/3497674151621_h_f_l_0?wid=356&hei=200&resMode=sharp2&op_usm=1.75,0.3,2,0",
            "price" => 14,99,
            "price_new" => 0,
            "name" => "Multiprise Pack de 2 multiprises x4 Prises",
            "brand" => "ESSENTIELB"
        ),
    ];
?>
<section class="section-products products-slider modal-recommend">
    <div class="">
        <div class="section-head flex">
            <h3>Recommandés avec votre article</h3>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach($products as $product):?>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="top">
                                <div class="pic">
                                    <a href="product.php">
                                        <img src="<?php echo $product["pic"]?>" alt="<?php echo $product["name"]?>">
                                        <?php if($product["price_new"] > 0):?>
                                            <div class="badges">
                                                <div class="badge discount"><?php echo "-".round(100 - ($product["price_new"]*100/$product["price"]))."%";?></div>
                                            </div>
                                        <?php endif?>
                                    </a>
                                </div>   
                                <div class="right">
                                    <div class="brand"><a href=""><?php echo $product["brand"]?></a></div>
                                    <div class="name"><a href="product.php"><?php echo $product["name"]?></a></div>
                                </div> 
                            </div>
                            <div class="inner">
                                <div class="price">
                                    <div class="price-inner">
                                        <?php if($product["price_new"] > 0):?>
                                            <span><?php echo $product["price_new"]?>€</span>
                                            <span class="price-old"><?php echo $product["price"]?>€</span>
                                        <?php else:?>
                                            <span><?php echo $product["price"]?>€</span>
                                        <?php endif?>
                                    </div>
                                </div>

                                <div class="btn to-cart btn-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            
            <div class="swiper-pagination circle"></div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>