<?php
session_start();
if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array_fill(1, 8, 0);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php readfile('head_content.html'); ?>
        <link rel="stylesheet" href="css/contact-style.css">
    </head>

   <body>
       <?php include 'template.php'; ?>

        <div id="webpage-content">
            <div id="contact-photo">
                <img src="img/firma.jpg">
            </div>
            <div id="contact-text">
                <br>
                <p><b>Województwo:</b> lubuskie</p>
                <p><b>Miejscowość:</b> Lubiszyn</p>
                <p><b>Ulica i nr:</b> Dworcowa 30E</p>
                <p><b>Kod pocztowy:</b> 66-433</p>
                <p><b>Właściciel:</b> Wojciech Fabisiak</p>
                <p><b>Telefon:</b> 567 839 234</p>
                <p><b>Faks:</b> 95 731 82 56</p>
            </div>
        </div>

        <?php readfile('footer.html'); ?>
    </body>
</html>
