<?php $num = rand(11, 30);?>
<div class="product-card">
    <a href="/product.php">
        <div class="pic">
            <div class="colors flex">
                <span title="Bleu" style="background: rgb(94, 182, 221);"></span>
                <span title="Gris" style="background: rgb(121, 128, 129);"></span>
                <span title="Vert" class="na" style="background: rgb(81, 119, 132);"></span>
                <span title="Jaune" class="na" style="background: rgb(255, 241, 104);"></span>
            </div>

            <img src="images/demo/Carrousel_02_Samsung_Galaxy_Z_Flip6_Bleu_9b27ecacfe%201.png" alt="Samsung Galaxy Z Fold6">
            <div class="icon"></div>
        </div>
        <div class="brand">Samsung</div>
        <div class="name">Galaxy Z Flip6</div>
    </a>
    <div class="inner">
        <ul class="props">
            <li>
                <label>
                    <input type="radio" name="memory<?php echo $num?>">
                    <span>256 Go</span>
                </label> 
            </li>
            <li>
                <label>
                    <input type="radio" name="memory<?php echo $num?>" checked />
                    <span>512 Go</span>
                </label> 
            </li>
        </ul>

        <div class="price">
            <span>441€</span>
            <span class="price-old">521€</span>
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