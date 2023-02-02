<?php session_start();
if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array_fill(1, 8, 0);
if(isset($_GET["add"])){
    $id = $_GET["add"];
    try{
        $id = (int) $id;
        if($id<1 || $id >8 ) exit();
        if($_SESSION["basket"][$id] == 0){
            $_SESSION["basket"][$id] = 1;
        }
    }catch(Exception $e){
        echo "error";
    }
}else if(isset($_GET["remove"])){
    $id = $_GET["remove"];
    try{
        $id = (int) $id;
        if($id<1 || $id >8 ) exit();
        $_SESSION["basket"][$id] = 0;
    }catch (Exception $e){
        echo "error";
    }
}else if(isset($_GET["id"]) && isset($_GET["how-many"])){
    $id = $_GET["id"]; $how_many = $_GET["how-many"];
    try{
        $id = (int) $id; $how_many = (int) $how_many;
        if($id<1 || $id >8 ) exit();
        if($how_many < 1) exit();
        $_SESSION["basket"][$id] = $how_many;
    }catch(Exception $e){
        echo "error";
    }
}

?>
