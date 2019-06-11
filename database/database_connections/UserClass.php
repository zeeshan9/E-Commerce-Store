<?php
require_once ("config.php");
class User {
    private $pdo;

    public function __construct()
    {
        $connString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $this->pdo = new PDO($connString, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }


    public function Insert($userName,$userEmail,$userPassword) {

        $sql = $this->pdo->prepare("insert into user values(null,'$userEmail','$userName','$userPassword')");
        $sql->execute();
        
    }

    public function Update($id, $warrenty_name, $FullName, $Details) {
        $sql = $this->pdo->prepare("update user set name='$warrenty_name' where id='$id'");
        $sql->execute();
    
    }

    public function Delete($id) {
        $sql = $this->pdo->prepare("delete from user where id='$id'");
        $sql->execute();
    }

    public function GetUser($userEmail) {
        $sql = "select name,password from user where email='$userEmail'";
        $result = $this->pdo->query($sql);
        
        return $result;
    }
}

?>
