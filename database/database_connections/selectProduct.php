<?php

// require_once ("config.php");
require_once("config.php");
try {
        require_once("ProductClass.php");
        $productTabel = new Product();
        $result = $productTabel->selectproducttype($_GET["q"]);
       
        echo $result;
       
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
        ?>