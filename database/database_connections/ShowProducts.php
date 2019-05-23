<?php 

require_once("../database/database_connections/ProductClass.php");
              $productTabel = new Product();
              if ($_SERVER["REQUEST_METHOD"] == "Get") {
                
                $result = $productTabel->selectproducttype($_GET["q"]);

            }else{
                $result = $productTabel->GetAllRecords();
            }
              
              
              $index = 0;
              while($row = $result->fetch())
              {
                $id[$index] = $row["id"];
                $name[$index] = $row["name"];
                $price[$index] = $row["price"];
                $stock[$index] = $row["stock"];
                $img[$index] = $row["picture"];
                $prod_desc[$index] = $row["product_des"];
                $manu_desc[$index] = $row["manufacturer_des"];
                $index++;
              }




// require_once("../database/database_connections/ProductClass.php");
//             $productTabel = new Product();
         
//             if ($_SERVER["REQUEST_METHOD"] == "Get") {

//                 $result = $productTabel->selectproducttype($_GET["q"]);

//             }else{
//                 $result = $productTabel->GetAllRecords();
//             }
        
//               selectproduct($result);
              
              

//          function selectproduct($result1) 
//             {
//                 $index = 0;
//                 while($row = $result1->fetch())
//                 {
//                     $id[$index] = $row["id"];
//                     $name[$index] = $row["name"];
//                     $price[$index] = $row["price"];
//                     $stock[$index] = $row["stock"];
//                     $img[$index] = $row["picture"];
//                     $prod_desc[$index] = $row["product_des"];
//                     $manu_desc[$index] = $row["manufacturer_des"];
//                     $index++;
//                 }
                
//             }

              
?>