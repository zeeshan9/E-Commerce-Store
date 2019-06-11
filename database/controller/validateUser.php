<?php

    $email=$_POST["email"];
    $password=$_POST["password"];

    require_once("../database_connections/UserClass.php");
    $product_typeTable = new User();

    $result = $product_typeTable->GetUser($email,$password);

    $row = result->fetch();
    if($row != null){
        echo "<img src='../../images/userLogedIn.jpg' alt='cart img' style='height: 50px; width: 50px;'> ";
    }else{
        echo "<img src='../../images/orangecart.png' alt='cart img' style='height: 50px; width: 50px;'> ";
    }



?>