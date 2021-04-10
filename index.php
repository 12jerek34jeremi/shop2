<?php
session_start();
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Shop</title>
        <meta name="description" content="This is the official website of the shop">
        <meta name="author" content="Jędrzej Chmiel, Natalia Koktysz, Piotr Duży">
        <link rel="stylesheet" href="css/top-style.css">
        <link rel="stylesheet" href="css/nav-style.css">
        <link rel="stylesheet" href="css/footer-style.css">
        <link rel="stylesheet" href="css/main-style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
        
        <script src="javaScript/script.js"></script>
    </head>
    
   <body>
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
                        <div id="products-number-div"><span id="products-number"><?php 
                        if(isset($_SESSION["products_number"])){
                            echo $_SESSION["products_number"];
                        }else{
                            echo "0";
                        }
                        ?></span></div>
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
        
        <div id="webpage-content">
            <div id="main-photo">
                <img src="img/herbataglowna.jpeg">
            </div>
            <div id="main-text">
                <h3>Witamy w internetowym sklepie MalwaTea!</h3>
                <p>Znajdziesz u nas wiele rodzajów herbat, każda z nich jest jedyna w swoim rodzaju i uświetni Twoje chwile relaksu. Gwarantujemy naszym klientom zadowolenie z produktu i posiadamy wiele certyfikatów jakości oraz nagród (możesz obejrzeć je w zakładce "O nas")</p>
                <p>Przejrzyj naszą ofertę i rozkoszuj się smakiem!</p>
            </div>
        </div>
		
		      <div id="footer">
            <div id="footer-container">
                <hr>
                <br>
                <div id="footer-text">2021 - Jędrzej Chmiel, Natalia Koktysz, Piotr Duży</div>
            </div>
        </div>

    </body>
</html>