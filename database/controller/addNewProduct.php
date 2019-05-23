<?php


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id=0;
        $name=$_POST["productName"];
        $price=$_POST["productPrice"];
        $stock=$_POST["productStock"];
        $type=$_POST["productType"];
        $brand=$_POST["brand"];
        $warrenty=$_POST["warrenty"];
        $productDes=$_POST["productDes"];
        $manDes=$_POST["manufacturerDes"];
        $picture=basename($_FILES["picture"]["name"]);
        uploadImage();

        require_once("../database_connections/ProductClass.php");
        $productTabel = new Product();
        echo $id;
        $productTabel->InsertNewProduct($id, $name, $price, $stock, $picture, $productDes, $manDes, $type,
         $brand, $warrenty);

    }


    function uploadImage()
    {
        $target_dir = "../../product_images/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["picture"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo file_exists($target_file);
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["picture"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

    }

?>
