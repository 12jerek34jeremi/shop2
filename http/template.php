<div id="template">
    <div id="top-div">
        <div class="block" id="logo-container">
            <a href="index.php"><img src="img/logo.png"></a>
        </div>
        <div id="empty-space">

        </div>
        <div class="block" id="shop-nav">
            <div id="cart">
                <div>
                    <a href="cart.php"><img src="img/cart-icon.png"></a>
                </div>
            </div>
            <div id="number">
                <div id="products-number-div"><span id="products-number">
                    <?php
                    $counts=0;
                    foreach($_SESSION['basket'] as $count){if($count>0){$counts++;}}
                    echo $counts;
                    ?>
                </span></div>
            </div>
        </div>
    </div>
    <div id="nav">
        <div class="dropmenu">
            <div class="dropmenu-text">
                <a href="o-nas.php">O nas</a>
            </div>
        </div>
        <div class="dropmenu">
            <div class="dropmenu-text">
                <a href="produkty.php">Produkty</a>
            </div>
            <div class="dropdown-content">
                <a href="produkty.php#green-tea">Zielone herbaty</a>
                <a href="produkty.php#black-tea">Czarne herbaty</a>
                <a href="produkty.php#other-tea">Inne herbaty</a>
            </div>
        </div>
        <div class="dropmenu">
            <div class="dropmenu-text">
                <a href="cart.php">Zamów</a>
            </div>
        </div>
        <div class="dropmenu">
            <div class="dropmenu-text">
                <a href="kontakt.php">Kontakt</a>
            </div>
        </div>
    </div>
</div>
