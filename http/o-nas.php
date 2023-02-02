<?php
session_start();
if(!isset($_ION["basket"])) $_ION["basket"] = array_fill(1, 8, 0);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php readfile('head_content.html'); ?>
        <link rel="stylesheet" href="css/about-style.css">
    </head>

   <body>
       <?php include 'template.php'; ?>

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


        <?php readfile('footer.html'); ?>
    </body>
</html>
