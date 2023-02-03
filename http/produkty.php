<?php
session_start();
if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array_fill(1, 8, 0);
require_once "connect.php";
require_once "render_products.php";
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php readfile('head_content.html'); ?>
        <link rel="stylesheet" href="css/product-style.css">
        <script src="javaScript/products.js"></script>
    </head>

   <body>
        <a href="#template" id="send-to-top">▲</a>
        <?php include 'template.php'; ?>

        <div id="webpage-content">
<?php

    try{
        $data_base = new mysqli($host, $db_username, $db_password, $db_name);
        $data_base->set_charset("utf8mb4");
        if($data_base->connect_error){
            echo '<h1 class="error">Przepraszamy, nie udało się połączyć z bazą danych. Problemy tehchniczne. Spróbuj ponownie później</h1>';
        }else{
            $products = $data_base->query("SELECT * FROM products")->fetch_all(MYSQLI_ASSOC);
        }
    }catch(Exception $e){
        echo '<h1 class="error">Przepraszamy, nie udało się połączyć z bazą danych. Problemy tehchniczne. Spróbuj ponownie później</h1>';
    }

    echo_tea_type($products, "green-tea", "Zielone Herbaty", 1);
    echo_tea_type($products, "black-tea", "Czarne Herbaty", 2);
    echo_tea_type($products, "other-tea", "Inne Herbaty", 3);


 ?>
        </div>
        <?php readfile('footer.html'); ?>

    </body>
</html>
