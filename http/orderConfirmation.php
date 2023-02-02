<?php
session_start();
if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array_fill(1, 8, 0);
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
        <?php readfile('head_content.html'); ?>
        <link rel="stylesheet" href="css/orderConfrmation-style.css">
    </head>

   <body>
       <?php include 'template.php'; ?>

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
        
        <?php readfile('footer.html'); ?>
    </body>
</html>
