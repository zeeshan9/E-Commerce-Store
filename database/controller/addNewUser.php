<?php


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=$_POST["userName"];
        $email=$_POST["userEmail"];
        $password=$_POST["userPass"];

        require_once("../database_connections/UserClass.php");
        $userTabel = new User();
        $userTabel->Insert($name,$email,$password);

        echo "Addition Sucessful";
        header("refresh:2,url=../../rootfolder2/ecommerce.php");
    }else{
        echo "Addition Un-Sucessful";
        header("refresh:2,url=../../rootfolder2/Signup-Account.html");
    }

?>