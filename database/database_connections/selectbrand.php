<?php
require_once ("config.php");
class brand {
    public $id, $productTypeId,$brand_name;
    private $pdo;

    public function __construct($id=null, $productTypeId=null,$name=null)
    {
        $connString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $this->pdo = new PDO($connString, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($id != null) {
            $this->id = $id;
            $this->brand_name = $brand_name;
            $this->productTypeId = $productTypeId;
        }
    }


    public function Insert($id,$warrenty_name) {

        $sql = $this->pdo->prepare("insert into brand values('$productTypeId','$name')");
        $sql->execute();
        
    }

    public function Update($id, $brand_name) {
        // TODO: Write Definition of this method
        
        $sql = $this->pdo->prepare("update brand set name='$$brand_name' where id='$id'");
        $sql->execute();
    
    }

    public function Delete($id) {
        $sql = $this->pdo->prepare("delete from brand where id='$id'");
        $sql->execute();
    }

    public function GetAllbrands() {
        $sql = "select * from brand";
        
        
        $result = $this->pdo->query($sql);
        
        return $result;
    }

    public function Getselectedbrands($brand_name) {
        $sql = "select name from brand where product_type_id = " . $brand_name;
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }
}

?>
