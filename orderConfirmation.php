<?php
session_start();
$_SESSION["products_number"] = 0;
header("Location: cart.php");
if(! (isset($_POST['wojewodzwo']) && isset($_POST['adres'])
    && isset($_POST["total-price"])  && isset($_POST["products"]))) exit();
try{ 
    $wojewodzwo = (int) $_POST['wojewodzwo'];
    $adres = $_POST['adres'];
    if($wojewodzwo < 1 || $wojewodzwo >16 || $adres=="") exit();
}catch(Exception $e){
    exit();
}
$wojewodztwa = array('dolnośląskie',
    'kujawsko-omorskie',
    'lubelskie',
    'lubuskie',
    'łódzkie',
    'małopolskie',
    'mazowieckie',
    'opolskie',
    'podkarpackie',
    'podlaskie',
    'pomorskie',
    'śląskie',
    'świętokrzyskie',
    'warmińsko-mazurskie',
    'wielkopolskie',
    'zachodniopomorskie');

header_remove("Location"); 
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
        <link rel="stylesheet" href="css/orderConfrmation-style.css">
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
        <h1>Potwierdzenie zamowienia.</h1>
        <div id="header"><span class="id">Id</span><span class="name">Produkt</span><span class="price">Cena</span><span class="how-many">Ilosc</span></div>
        <div id="products">
        <?php
        try{
            $products = json_decode($_POST["products"]);
            foreach ($products as $product){
                echo '<div class="product"><span class="id">'.($product->id).'</span><span class="name">'.($product->name).'</span><span class="price">'.($product->price).'</span><span class="how-many">'.($product->how_many).'</span></div>';
            }
            $wojewodztwo = $wojewodztwa[$_POST["wojewodzwo"]];
            
            unset($_SESSION["products_number"]);
            unset($_SESSION["how_many"]);
            unset($_SESSION["basket"]);
        }catch(Exception $e){
            header("Location: cart.php");
            exit();
        }
        ?>
        </div>
        <div><p>Łączna cena produktów to: <?=$_POST["total-price"]?> zł.<p></div>
        <div><p>Powyższe produkty zostaną dostarczone na adres: <?=$_POST["adres"]?> do wojewódzwa: <?=$wojewodztwo?>.</p></div>
        </div>
    </body>
</html>
