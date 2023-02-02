<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array_fill(1, 8, 0);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php readfile('head_content.html'); ?>
        <link rel="stylesheet" href="css/cart-style.css">
        <script src="javaScript/cart.js"></script>

    </head>

   <body>
       <?php include 'template.php'; ?>

        <div id="webpage-content">
          <?php
          $products_number = array_sum($_SESSION['basket']);
          if($products_number == 0){
              echo"<h1>Twój koszyk jest pusty. Aby coś zamowić, dodaj to najpierw do koszyka.</h1>";
          }else{
              $data_base = new mysqli($host, $db_username, $db_password, $db_name);
              if($data_base->connect_error){
                  header("Location: error.php");
                  exit();
              }
              echo '<div id="form">';
              echo
'<div id="table-top">
<span id="id">ID</span>
<span id="name">Nazwa produktu</span>
<span id="price">Cena</span>
<span id="how-many">Ilość</span>
</div>'          ;
              $products = $data_base->query("SELECT * FROM products")->fetch_all(MYSQLI_ASSOC);
              for($i = 1; $i<=8; $i++){
                  if($_SESSION["basket"][$i] > 0){
                      echo
'<div class = "product">
<span class="id">'.$i.'</span>
<a class="name" href="produkty.php#t'.$i.'">'.$products[$i-1]["name"].'</a>
<input class="price" type="number" value="'.$products[$i-1]["price"].'" readonly="readonly"/>
<span class="currency">zł</span>
<input class="how-many" type="number" min="1" value="'.$_SESSION["basket"][$i].'"/>
<div class="remove"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></div>
</div>';
                  }
              }
              $suma = 0.0;
              for($i = 1; $i<=8; $i++){
                  $suma += $_SESSION["basket"][$i] * (float) $products[$i-1]["price"];
              }

              echo '<div id="total-price-div"><span>Łączna cena produktów to: </span><span id="total-price">'.$suma.'</span><span>zł.</span></div>';
              echo
'<div id="delivery">
<h1>Adres Dostawy:</h1>
<span id="wojewodzwo-span">Województwo: </span>
<select id="wojewodzwo" name="wojewodzwo" value="6">
    <option value="0">Dolnośląskie</option>
    <option value="1">Kujawsko-Pomorskie</option>
    <option value="2">Lubelskie</option>
    <option value="3">Lubuskie</option>
    <option value="4">Łódzkie</option>
    <option value="5" selected="selected">Małopolskie</option>
    <option value="6">Mazowieckie</option>
    <option value="7">Opolskie</option>
    <option value="8">Podkarpackie</option>
    <option value="9">Podlaskie</option>
    <option value="10">Pomorskie</option>
    <option value="11">Śląskie</option>
    <option value="12">Świętokrzyskie</option>
    <option value="13">Warmińsko-Mazurskie</option>
    <option value="14">Wielkopolskie</option>
    <option value="15">Zachodniopomorskie</option>
</select>
<br/>
<span id="adress-span">Adres (miejscowość, ulica, nr): </span>
<input id="adress" type="text" />
</div>'          ;
              echo '
<div id="order">
<span>Klikając "zamawiam" zobowiązujesz się do zapłacenia za produkty przy odbiorze.</span><br/>
<button type="button" id="order-button">Zamawiam</button>
</div>
';

              echo "</div>";
          }
          ?>
        </div>
        <?php readfile('footer.html'); ?>
    </body>
</html>
