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
                $("#view-div").load("../../database/controller/deleteProduct_Type.php", {id: del_id});
            });

            $("#upload_button").click(function() {
                var value_name = $("#product_typeName").val();
                $("#view-div").load("../../database/controller/addNewProduct_Type.php", {product_typeName: value_name});

                $("#product_typeName").val("");                
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
     
            <div class="panel-heading"><h3>Add:</h3></div>

            <div class="panel-body">

                <div class="input-group mb-3" id="add-new-value">
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                    </div>
                    
                    <input required maxlength="100" id="product_typeName" type="text" class="form-control" placeholder="Product_Type Name" aria-label="Product_Type Name" aria-describedby="basic-addon1">
                
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

                    

                    require_once("../../database/database_connections/Product_TypeClass.php");
                    $product_typeTable = new Product_Type();
                    $result = $product_typeTable->GetAllRecords();

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