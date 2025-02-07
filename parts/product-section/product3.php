<?php $num = rand(100, 300);?>
<div class="product-card">
    <a href="/product.php">
        <div class="pic">
            <div class="badges">
                <div class="badge new">nouveau</div>
                <div class="badge offer">100€ bonus reprise</div>
            </div>
            <div class="colors flex">
                <span title="Bleu" style="background: rgb(94, 182, 221);"></span>
                <span title="Noir" style="background: rgb(56, 51, 54);"></span>
                <span title="Rose" style="background: rgb(255, 217, 223);"></span>
                <span title="Jaune" class="na" style="background: rgb(255, 241, 104);"></span>
                <span title="Vert" style="background: rgb(81, 119, 132);"></span>
            </div>

            <img src="images/demo/1_Iphone15_Blue_184x184.webp" alt="Iphone 15">
            <div class="icon"></div>
        </div>
        <div class="brand">Apple</div>
        <div class="name"><span>Iphone 15</span></div>
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
                    <input type="radio" name="memory<?php echo $num?>">
                    <span>256 Go</span>
                </label> 
            </li>
            <li>
                <label>
                    <input type="radio" name="memory<?php echo $num?>">
                    <span>512 Go</span>
                </label> 
            </li>
        </ul>

        <div class="price">
            <span>341€</span>
            <span class="price-old">541€</span>
        </div>

        <div class="compare">
            <label>
                <input type="checkbox" data-id="<?php echo rand(1, 1000)?>">
                <span>Comparer</span>
            </label>
        </div>
    </div>
    <div class="promo">
        <p><span class="bold">100€</span> de remise immédiate</p>
        <p><span class="bold">100€</span> remboursés après achat</p>
    </div>
</div>