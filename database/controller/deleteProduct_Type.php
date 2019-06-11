<?php

    $id=$_POST["id"];

    require_once("../database_connections/Product_TypeClass.php");
    $product_typeTable = new Product_Type();
    $product_typeTable->Delete($id);

    $result = $product_typeTable->GetAllRecords();

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
