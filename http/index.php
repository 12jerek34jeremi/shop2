<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array_fill(1, 8, 0);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php readfile('head_content.html'); ?>
        <link rel="stylesheet" href="css/main-style.css">
    </head>

   <body>
       <?php include 'template.php'; ?>

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

        <?php readfile('footer.html'); ?>
    </body>
</html>
