<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_styling.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#view-div").on('click','.del-value',function() {
                var del_id = $(this).attr("value");
                $("#view-div").load("../../database/controller/deleteBrand.php", {id: del_id});
            });

            $("#upload_button").click(function() {
                var value_name = $("#brandName").val();
                var group_id = $("#productType").children("option:selected").val();
                $("#view-div").load("../../database/controller/addNewBrand.php", {brandName: value_name, productType: group_id});

                $("#brandName").val("");          
                $('#productType option').prop('selected', function() {
                    return this.defaultSelected;
                });      
            });
        });
    </script>

</head>
<body>

    <div class="container-fluid">

        <?php
            include_once("admin_navbar.html")
        ?>

        <div class="panel panel-default">

            <div class="panel-heading"><h3>Add a new Brand:</h3></div>

            <div class="panel-body">

                <div class="input-group mb-3">
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                    </div>
                    
                    <input required maxlength="100" id="brandName" type="text" class="form-control" placeholder="Brand Name" aria-label="Brand Name" aria-describedby="basic-addon1">
                
                </div>

                <div class="input-group mb-3">
                    
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Product Type</label>
                    </div>

                    <select id="productType" class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        
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

                <button class="btn btn-primary" id="upload_button">Add</button>
                

            </div>

        </div>

         <div class="panel panel-default">
                    
            <div class="panel-heading"><h3>View:</h3></div>

            <div id="view-div" class="panel-body">

                <?php

                    echo "<table id='product_typeTable' class='table-striped'>";
                    echo "<thead>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Delete</th>";
                    echo "</thead>";


                    require_once("../../database/database_connections/selectbrand.php");
                    $product_typeTable = new brand();
                    $result = $product_typeTable->GetAllbrands();

                    while($row = $result->fetch())
                    {
                        echo "<tr>";

                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td><button value=".$row['id']." class='del-value btn btn-primary'>Delete</button></td>";

                        echo "</tr>";
                    }

                    echo "</table>";

                ?>

            </div>

        </div>

    </div>
    
</body>
</html>