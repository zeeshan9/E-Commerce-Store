<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product</title>
    

    <link rel="stylesheet" href="add_res_admin_css.css">
    <link rel="stylesheet" href="../normalized_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container-fluid">
        <!--Nav Bar  -->
    <?php require_once("navbar.php"); ?>
            
        <form action="../../database/controller/addNewProduct.php" method="POST" enctype="multipart/form-data">

            <div class="panel-group">

                <div class="panel panel-default">
                    <h3>ADD NEW PRODUCT</h3>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Product Information:</h3></div>

                    <div class="panel-body">

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Product Name</span>
                            </div>
                            
                            <input name="productName" type="text" class="form-control" placeholder="Product Name" aria-label="Productname" aria-describedby="basic-addon1">
                        
                        </div>

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1">Product Price</span>
                                
                            </div>

                            <input name="productPrice" type="text" class="form-control" placeholder="Rupees" aria-label="Amount (to the nearest rupee)">
                            
                        </div>

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1">Stock</span>
                                
                            </div>

                            <input name="productStock" type="text" class="form-control" placeholder="Stock" aria-label="Amount (to the nearest rupee)">
                            
                        </div>

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Product Type</label>
                            </div>

                            <select name="productType" class="custom-select" id="inputGroupSelect01" 
                            onchange="showbrand(this.value)">
                                <option value="" selected >Select Product..</option>
                                
                                <?php
                                    require_once("../../database/database_connections/Product_TypeClass.php");
                                    $product_TypeTabel = new Product_Type();
                                    $result = $product_TypeTabel->GetAllRecords();

                                    while($row = $result->fetch())
                                    {
                                        echo "<option value=" . $row["id"] . ">" . $row["name"] . "</option>";
                                    } 
                                ?>
                            </select>



                        </div>

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="brand_type">Brands</label>
                            </div>

                                <select id="test"  class="custom-select" name="brand" id="brand_type">
                                    <option value="" selected>Select Brand...</option>
                                    
                                </select>
                            
                        </div>

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Warrenty Type</label>
                            </div>

                            <select name="warrenty" class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose..</option>

                                <?php

                                    require_once("../../database/database_connections/WarrentyClass.php");
                                    $warrentyTabel = new Warrenty();
                                    $result = $warrentyTabel->GetAllRecords();

                                    while($row = $result->fetch())
                                    {
                                        echo "<option value=" . $row["id"] . ">" . $row["name"] . "</option>";
                                    } 

                                ?> 

                            </select>

                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    
                    <div class="panel-heading"><h3>Descriptions:</h3></div>

                    <div class="panel-body">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Product Desciption</span>
                            </div>
                            <textarea name="productDes" class="form-control" aria-label="With textarea"></textarea>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Manufacturer Desciption</span>
                            </div>
                            <textarea name="manufacturerDes" class="form-control" aria-label="With textarea"></textarea>
                        </div>

                    </div>

                </div>

                <div class="panel panel-default">
                    
                    <div class="panel-heading"><h3>Picture Upload:</h3></div>

                    <div class="panel-body">

                        <div class="input-group mb-3">
                            
                            <div class="custom-file">
                                <input name="picture" type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose Picture</label>
                            </div>
                            

                        </div>

                    </div>

                </div>

                <div class="panel panel-default">
                    
                    <div class="panel-heading"><h3>Upload Data:</h3></div>

                    <div class="panel-body">

                            <div class="input-group mb-3">
                                
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="upload_button">
                                        Upload
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>
        
        </form>

    </div>

                            <script>
                                function showbrand(str) {
                                    var xhttp;  
                                    if (str == "") {
                                        //change will occur here
                                        document.getElementById("test").innerHTML = "";
                                        return;
                                    }
                                    xhttp = new XMLHttpRequest();
                                    xhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("test").innerHTML = this.responseText;
                                        }
                                    };
                                    xhttp.open("GET", "select_brand_type.php?q=" + str, true);
                                    xhttp.send();
                                }
                            </script>
</body>
</html>