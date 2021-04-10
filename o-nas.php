<?php
session_start();
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Shop</title>
        <meta name="description" content="This is the oficial website of the shop">
        <meta name="author" content="Jędrzej Chmiel, Natalia Koktysz, Piotr Duży">
        <link rel="stylesheet" href="css/top-style.css">
        <link rel="stylesheet" href="css/nav-style.css">
        <link rel="stylesheet" href="css/footer-style.css">
        <link rel="stylesheet" href="css/about-style.css">
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
            <div id="fabisiak-photo">
                <img src="img/fabisiak.jpg">
            </div>
            <div id="fabisiak-text">
                <p>Firma MalwaTea istnieje od 1986 roku. Jest jedną z wiodących firm zajmujących się 
                produkcja naturalnych herbat owocowych i ziołowych, uzupełnieniem asortymentu są herbaty zielone, 
                czarne i czerwone. Produkty firmy Malwa Tea charakteryzują się tym iż są produkowane z naturalnych 
                owoców, ziół bez dodatków (konserwantów).</p>

                <p>Wyroby firmy Malwa Tea cieszą się ogromnym powodzeniem w kraju jak i poza jego granicami. 
                Dzięki wspaniałym wartością odżywczym i smakowym zdobyły sobie rzesze konsumentów na wszystkich 
                kontynentach. Produkty nasze są produkowane zgodnie z zasadami systemu zarządzania ISO 9001: 2000 oraz pod nadzorem systemu HACCP.</p>


                <p>Herbatki firmy Malwa Tea są pakowane w bardzo atrakcyjnych opakowaniach handlowych, które 
                są niepowtarzalne i wyjątkowo znakomicie rozpoznawalne. Jesteśmy firma nowoczesną i bardzo 
                elastyczną, możemy sprostować wymaganiom naszych klientów. Zapraszamy do współpracy. Możemy 
                wykonać usługę pakowania na zlecenie.</p>
                <a id="ulotka" href="ulotka.pdf">--> pobierz ulotkę <--</a>
                <div id="awards"> 
                    <img src="img/odkrycie2021.png">
                    <img src="img/produkt2020.png">
                </div>
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