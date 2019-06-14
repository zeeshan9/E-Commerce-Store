<?php

    $name = $_GET["name"];

    require_once("../../database/database_connections/ProductClass.php");
    $prod = new Product();
    $result = $prod->nameId($name);

    $row = $result->fetch();
    if($row == null){
        echo "<h1>No item with Name: '$name' found.</h1>";
    }
    else{

        header("refresh:0,url=item_selected.php?id=".$row['id']);
    }
?>
