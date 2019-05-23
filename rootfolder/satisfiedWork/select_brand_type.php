<?php

// requ ire_once ("config.php");
require_once("../../database/database_connections/config.php");
try {
        require_once("../../database/database_connections/ProductClass.php");
        $productTabel = new Product();
        $result = $productTabel->selectbrand($_GET["q"]);

        echo '<select name="brand"  id="brand_type">';
        while($row = $result->fetch())
        {
            echo "<option value=" . $row['id'] .">" . $row['name'] . "</option>";  
        } 

        echo '</select>';
       
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
        ?>