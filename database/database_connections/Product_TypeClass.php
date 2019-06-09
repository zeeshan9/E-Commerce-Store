<?php
require_once ("config.php");
class Product_Type {
    public $id, $type_name;
    private $pdo;

    public function __construct($id=null, $type_name=null)
    {
        $connString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $this->pdo = new PDO($connString, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($id != null) {
            $this->id = $id;
            $this->type_name = $type_name;
        }
    }


    public function Insert($type_name) {

        $sql = $this->pdo->prepare("insert into product_type values(null,'$type_name')");
        $sql->execute();
        
    }

    public function Update($id, $type_name) {
        
        $sql = $this->pdo->prepare("update product_type set name='$type_name' where id='$id'");
        $sql->execute();
    
    }

    public function Delete($id) {
        $sql = $this->pdo->prepare("delete from product_type where id='$id'");
        $sql->execute();
    }
    
    public function GetAllRecords() {
        $sql = "select * from product_type";
        
        $result = $this->pdo->query($sql);
        
        return $result;
    }

    
}

?>
