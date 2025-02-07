<?php $num = rand(1, 99);?>
<div class="product-card">
    <a href="/product.php">
        <div class="pic">
            <div class="colors flex">
                <span title="Gris" style="background: rgb(121, 128, 129);"></span>
                <span title="Bleu nuit" style="background: rgb(50, 52, 75);"></span>
                <span title="Rose" class="na" style="background: rgba(255, 217, 223, 0.5);"></span>
            </div>

            <img src="images/demo/Master_Phone_Samsung_8_912cba634f 2.png" alt="Samsung Galaxy Z Fold6">
            <div class="icon"></div>
        </div>
        <div class="brand">Samsung</div>
        <div class="name">Galaxy Z Fold6</div>
    </a>
    <div class="inner">
        <ul class="props">
            <li>
                <label>
                    <input type="radio" name="memory<?php echo $num?>" checked />
                    <span>128 Go</span>
                </label>    
            </li>
            <li>
                <label>
                    <input type="radio" name="memory<?php echo $num?>" />
                    <span>256 Go</span>
                </label>    
            </li>
            <li>
                <label>
                    <input type="radio" name="memory<?php echo $num?>" />
                    <span>512 Go</span>
                </label> 
            </li>
            <li>
                <label>
                    <input type="radio" name="memory<?php echo $num?>" />
                    <span>1 To</span>
                </label> 
            </li>
        </ul>

        <div class="price">
            <span>1091€</span>
            <span class="price-old">1171€</span>
        </div>

        <div class="compare">
            <label>
                <input type="checkbox" data-id="<?php echo rand(1, 1000)?>">
                <span>Comparer</span>
            </label>
        </div>
    </div>
    <div class="promo">
        <p class="hidden"><span class="bold"></span> de remise immédiate</p>
        <p><span class="bold">80€</span> remboursés après achat</p>
    </div>
</div>