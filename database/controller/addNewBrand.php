<?php

    $name=$_POST["brandName"];
    $product_typeID=$_POST["productType"];

    require_once("../database_connections/selectbrand.php");
    $product_typeTable = new brand();
    $product_typeTable->Insert($name,$product_typeID);


    $result = $product_typeTable->GetAllbrands();

    echo "<table id='product_typeTable' class='table-striped'>";
    echo "<thead>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Delete</th>";
    echo "</thead>";

    while($row = $result->fetch())
    {
        echo "<tr>";

        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td><button value=".$row['id']." class='del-value btn btn-primary'>Delete</button></td>";

        echo "</tr>";
    }

    echo "</table>";



?>