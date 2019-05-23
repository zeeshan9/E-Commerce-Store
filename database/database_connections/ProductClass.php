<?php
require_once ("config.php");
class Product {
    public $id, $name, $price, $stock, $picture, $product_des, $manufacturer_des, $product_type_id, $brand_id, $warrenty_id;
    private $pdo;

    public function __construct($id=null, $name=null, $price=null, $stock=null, $picture=null, $product_des=null,
     $manufacturer_des=null, $product_type_id=null, $brand_id=null, $warrenty_id=null)
    {
        $connString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $this->pdo = new PDO($connString, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($id != null) {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->stock = $stock;
            $this->picture = $picture;
            $this->product_des = $product_des;
            $this->manufacturer_des = $manufacturer_des;
            $this->product_type_id = $product_type_id;
            $this->brand_id = $brand_id;
            $this->warrenty_id = $warrenty_id;
        }
    }


    public function InsertNewProduct($id, $name, $price, $stock, $picture, $product_des, $manufacturer_des, $product_type_id, $brand_id, $warrenty_id) 
    {
        $id=null;
        $sql = $this->pdo->prepare("insert into product values('$id','$name','$price','$stock','$picture',
        '$product_des','$manufacturer_des','$product_type_id','$brand_id','$warrenty_id')");
        $sql->execute();
        
    }

    public function UpdateProductInfo($id, $name, $price, $product_des, $manufacturer_des) 
    {

        $sql = $this->pdo->prepare("update product set name='$name', price='$price', product_des='$product_des', manufacturer_des='$manufacturer_des' where id='$id'");
        $sql->execute();
    
    }

    public function UpdateProductPicture($id, $picture)
    {

        $sql = $this->pdo->prepare("update product set picture='$picture' where id='$id'");
        $sql->execute();

    }

    public function UpdateProductStock($id, $stock)
    {

        $sql = $this->pdo->prepare("update product set picture='$picture' where id='$id'");
        $sql->execute();

    }

    /*
     * This function returns Product objects Array
     */
    public function GetAllRecords() 
    {
        $sql = "select * from product";
    
        $result = $this->pdo->query($sql);
        
        return $result;
    }

    public function GetAllRecordsByValues($values) 
    {
        $sql = "SELECT * FROM product WHERE product_type_id in ($values)";
    
        $result = $this->pdo->query($sql);
        
        return $result;
    }

    /*
     * This function returns single Object of this class
     * Search Criteria: id
     */
    public function GetSingleRecord($id) 
    {
        $sql = "select name,price,stock,picture,product_des,manufacturer_des from product where id='$id'";
    
        $result = $this->pdo->query($sql);
        
        return $result;
    }

    public function GetProductName($id)
    {
        $sql = "select name from product where id='$id'";
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }

    public function GetProductPrice($id)
    {
        $sql = "select price from product where id='$id'";
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }

    public function GetProductStock($id)
    {
        $sql = "select stock from product where id='$id'";
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }

    public function GetProductPicture($id)
    {
        $sql = "select picture from product where id='$id'";
    
        $result = $this->pdo->query($sql);
        $row = $result->fetch();
        
        return $row["picture"];   
    }

    public function GetProductProductDes($id)
    {
        $sql = "select product_des from product where id='$id'";
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }

    public function selectproducttype($product_typeid)
    {
        $sql = "select * from product where product_type_id = " . $product_typeid;
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }


    public function GetProductManuDes($id)
    {
        $sql = "select manufacturer_des from product where id='$id'";
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }

    // This function is for selected brand based on products in add_res_admin.php
    public function selectbrand($productname)
    {
        $sql = "select * from brand where product_type_id = " . $productname;
    
        $result = $this->pdo->query($sql);
        
        return $result;   
    }

   
    /*
     * Delete single Record
     */
    public function Delete($id) 
    {
        // TODO: Write Definition of this method
    }

}

?>
