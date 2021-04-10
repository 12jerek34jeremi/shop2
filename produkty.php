<?php
session_start();
if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array_fill(1, 8, false);
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
        <link rel="stylesheet" href="css/product-style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?  family=Arvo:wght@400;700&family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
        
        <script src="javaScript/script.js"></script>
        <script src="javaScript/products.js"></script>
    </head>
    
   <body>
        <a href="#template" id="send-to-top">▲</a>
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
            <div class="tea-type" id="green-tea">
                <h1>Zielone herbaty</h1>
                <br>
                <br>
                <div class="product-template" id="t1">
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/lungching.png">
                        <img class="img-main" src="img/products/lungching-raw.png">
                    </div>
                    <div class="product-description">
                        <h3>Lung Ching - Studnia Smoka</h3>
                        <p>Wystarczy napisać - Dragon Well (Long Jing Xi Hu) i każdy, kto lubi pić herbatę naprawdę dobrej jakości jest  w domu. Najsłynniejsza chińska zielona herbata wyróżnia się płaskimi palonymi groszkowo-zielonymi liśćmi. W tradycyjnej herbaciarni tą herbatę podaje się zgodnie ze starożytnymi rytuałami, ale w domu  możesz ją gotować w komfortowych warunkach.</p>
                        <div class="basket-price-div">
                            <span class="price">13.20zł</span>
                            <button class="basket" type="button" id="p1"><?php
                            if ($_SESSION["basket"][1]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
                </div>
                
                <div class="product-template" id="t2">
                    <div class="product-description">
                        <h3>Japan Gyokuro</h3>
                        <p>Polubisz ją! Nowa oferta obejmuje herbatę, która serwowana jest tylko w Japonii dla szczególnych gości. Jest uprawiana w bardzo szczególnych warunkach, sprzedaje się za duże pieniądze i smakuje bardzo dobrze. Japonia Gyokuro jest naprawdę wyjątkowa. Zanurz się w luksusie i pociesz się herbatą, dla której Japończycy wynaleźli piąty smak. Gyokuro nie jest słodki, słony, kwaśny czy gorzki, lecz umami.</p>
                        <div class="basket-price-div">
                            <span class="price">25.40zł</span>
                            <button class="basket" type="button" id="p2"><?php
                            if ($_SESSION["basket"][2]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/gyokuro.png">
                        <img class="img-main" src="img/products/gyokuro-raw.png">
                    </div>
                </div>
                
                <div class="product-template" id="t3">
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/senchamakato.png">
                        <img class="img-main" src="img/products/senchamakato-raw.png">
                    </div>
                    <div class="product-description">
                        <h3>Sencha Makato</h3>
                        <p>W Japonii po prostu wiedzą co jest dobre. Zdrowa żywność, miłość do przyrody, uprzejmość i porządek. Japończycy mają szczególny związek z tradycją, są ostrożni i bardzo uprzejmi. Z taką samą pokorą już tysiące lat przystępują do uprawy herbat. Renomowane ogrody japońskiej herbaty dają światu niezapomniany smak i aromat. Przywieźliśmy je, by wspólnie podzielić się z wami tym pięknem. Daj się skusić!</p>
                        <div class="basket-price-div">
                            <span class="price">54.83zł</span>
                            <button class="basket" type="button" id="p3"><?php
                            if ($_SESSION["basket"][3]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <div class="tea-type" id="black-tea">
                <h1>Czarne herbaty</h1>
                <br>
                <br>
                <div class="product-template" id="t4">
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/earlgrey.png">
                        <img class="img-main" src="img/products/earlgrey-raw.png">
                    </div>
                    <div class="product-description">
                        <h3>Royal Earl Grey</h3>
                        <p>Wyśmienita czarna klasyka z Chin wzbogacona olejkiem bergamotu. Jest ona stworzona dla spokojnych śniadań w ciągu weekendu, a także dla chwil popołudniowych pełnych pośpiechu. Kiedykolwiek będziecie chcieć, orzeźwi waszą myśl i pobudzi ciało.</p>
                        <div class="basket-price-div">
                            <span class="price">4.96zł</span>
                            <button class="basket" type="button" id="p4"><?php
                            if ($_SESSION["basket"][4]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
                </div>
                
                <div class="product-template" id="t5">
                    <div class="product-description">
                        <h3>Yunnan Black Premium</h3>
                        <p>Bardzo intensywne przeżycie! Premium Yunnan ma siłę Herkulesa. Ciemno-czerwony kolor naparu jasno mówi o sile tej herbaty. Z tradycyjnych chińskich ogrodów herbacianych przynosimy wam przysmak dla prawdziwego entuzjasty. Daj sobie  Yunnan Czarny Premium zamiast  porannego śniadania – będziesz pełny  energii i dobrego humoru aż do wieczora.</p>
                        <div class="basket-price-div">
                            <span class="price">3.21zł</span>
                            <button class="basket" type="button" id="p5"><?php
                            if ($_SESSION["basket"][5]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/yunnan.png">
                        <img class="img-main" src="img/products/yunnan-raw.png">
                    </div>
                </div>
            </div>
            
            <hr>
            
            <div class="tea-type" id="other-tea">
                <h1>Inne herbaty</h1>
                <br>
                <br>
                <div class="product-template" id="t6">
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/dragon.png">
                        <img class="img-main" src="img/products/dragon-raw.png">
                    </div>
                    <div class="product-description">
                        <h3>Smocza herbata</h3>
                        <p>Tyle smakołyków  w jednej herbacie! Ten „smoczy smakołyk“  powstał pewnego zachmurzonego popołudnia.  Jedyne co potrzebowaliśmy  to naładować się energią i pesymizm zachmurzonego dnia zagnać do kąta!  Sukces! Mieszanka bardzo delikatnych herbat,  kawałki owoców i do tego ociupina różowego pieprzu postawiła nas na nogi, rozweseliło się wnętrze. Naprawdę, ta mieszanka herbaty jest silna jak smok.</p>
                        <div class="basket-price-div">
                            <span class="price">18.70zł</span>
                            <button class="basket" type="button" id="p6"><?php
                            if ($_SESSION["basket"][6]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
                </div>
                
                <div class="product-template" id="t7">
                    <div class="product-description">
                        <h3>Niebieska herbata</h3>
                        <p>Nazywa się go grochowym kwiatem motylim. Albo także mniej prozaicznie klitorią. I potrafi zaskoczyć! Oprócz tego, że zabarwia wodę na niesamowicie piękny odcień turkusu, zawiera substancje mające zbawienny wpływ na cały organizm ludzki. Od stuleci wykorzystywany w medycynie ajurwedycznej, obecnie jego właściwości są poddawane szczegółowym badaniom. Niebieskiej herbaty nie kupicie w supermarkecie. Jest rzadkością. Parzcie ją osobno lub dodajcie kilka suszonych kwiatów do ulubionego napoju. Pomoże i zainteresuje.</p>
                        <div class="basket-price-div">
                            <span class="price">7.40zł</span>
                            <button class="basket" type="button" id="p7"><?php
                            if ($_SESSION["basket"][7]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/blue.png">
                        <img class="img-main" src="img/products/blue-raw.png">
                    </div>
                </div>
                
                <div class="product-template" id="t8">
                    <div class="product-img-container">
                        <img class="img-hover" src="img/products/ayurvedic.png">
                        <img class="img-main" src="img/products/ayurvedic-raw.png">
                    </div>
                    <div class="product-description">
                        <h3>Regeneracyjna Ajurwedyjska Mieszanka Bio</h3>
                        <p>Regeneracja jest ... wtedy, kiedy po spędzonym dniu w pracy marzysz zanurzyć się w wannie pełnej gorącej wody, gdy po powrocie z podróży marzysz o relaksie na własnej kanapie. Podczas odpoczynku i odnajdowania siły do innych doświadczeń przygotuj sobie regeneracyjną  ajurwedyjską herbatę. Posiada zdolności wyciszenia i potrafi wyeliminować stres. </p>
                        <div class="basket-price-div">
                            <span class="price">23.22zł</span>
                            <button class="basket" type="button" id="p8"><?php
                            if ($_SESSION["basket"][8]) echo "Usuń z koszyka.";
                            else echo "Dodaj do koszyka." ;
                            ?></button>
                        </div>
                    </div>
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