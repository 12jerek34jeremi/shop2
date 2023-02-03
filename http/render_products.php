<?php
function echo_product_img($id){
    echo'
    <div class="product-img-container">
        <img class="img-hover" src="img/products/product'.$id.'.png">
        <img class="img-main" src="img/products/product'.$id.'-raw.png">
    </div>
    ';
}

function echo_product_description($id, $name, $price, $description){
    echo'
    <div class="product-description">
        <h3>'.$name.'</h3>
        <p>'.$description.'</p>
        <div class="basket-price-div">
            <span class="price">'.$price.'zł</span>
            <button class="basket" type="button" id="p'.$id.'">'.($_SESSION["basket"][$id] > 0 ? 'Usuń z koszyka.' : 'Dodaj do koszyka.').'</button>
        </div>
    </div>
    ';
}

function echo_tea_type($rows, $div_id, $name, $type){
    echo '
    <div class="tea-type" id="'.$div_id.'">
        <h1>'.$name.'</h1>
        <br>
        <br>
    ';

    $site = True;
    foreach ($rows as $row) {
        if($row['type'] == $type){
            $id = $row['id'];
            echo '<div class="product-template" id="t'.$id.'">';
            if($site){
                echo_product_img($id);
                echo_product_description($id, $row['name'], $row['price'], $row['describtion']);
            }else{
                echo_product_description($id, $row['name'], $row['price'], $row['describtion']);
                echo_product_img($id);
            }
            echo '</div>';
            $site = !$site;
        }
    }
    echo '
    </div>
    <hr>
    ';
}

?>
