<?php
require_once ("config.php");
class Warrenty {
    public $id, $warrenty_name;
    private $pdo;

    public function __construct($id=null, $warrenty_name=null)
    {
        $connString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $this->pdo = new PDO($connString, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($id != null) {
            $this->id = $id;
            $this->warrenty_name = $warrenty_name;
        }
    }


    public function Insert($id,$warrenty_name) {

        $sql = $this->pdo->prepare("insert into warrenty values('$id','$warrenty_name')");
        $sql->execute();
        
    }

    public function Update($id, $warrenty_name, $FullName, $Details) {
        // TODO: Write Definition of this method
        
        $sql = $this->pdo->prepare("update warrenty set name='$warrenty_name' where id='$id'");
        $sql->execute();
    
    }

    public function Delete($id) {
        $sql = $this->pdo->prepare("delete from warrenty where id='$id'");
        $sql->execute();
    }

    public function GetAllRecords() {
        $sql = "select * from warrenty";
        
        $result = $this->pdo->query($sql);
        
        return $result;
    }
}

?>
