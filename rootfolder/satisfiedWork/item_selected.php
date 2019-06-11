<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="item_selected.css">
    <link rel="stylesheet" href="../normalized_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php require_once("navbar.php");?>
    
    <div class="container-fluid">
        <!-- Navigation Bar  user data so to know user is logged in-->
        
        <?php
            
            require_once("../../database/database_connections/ProductClass.php");
            $prod = new Product();

            $id = $_GET["id"];
            $result = $prod->GetSingleRecord($id);


            $prodData = $result->fetch();

        ?>

        <div class="row">

            <div class="col-lg-4" >

                <div class="item-pics">

                    <div class="card img-item-lg">

                        <?php
                            echo "<img src='../../product_images/".$prodData['picture']."' alt='Product Image' width='100%'>";
                        ?>
                    
                    </div>

                </div>

            </div>

            <div class="col-lg-8">

                <div class="item-data">

                    <!-- Related to compnay -->
                    <div class="company-related">

                    <?php
                        echo "<div class='item-name'><h2>".$prodData['name']."</h2></div>";
                    ?>


                    </div>

                    <!-- Related to item -->
                    <div class="item-related">

                        <div class="item-price">
                            <label for="">Price:</label>
                            <?php
                                echo "<label>".$prodData['price']." Rs</label>";
                            ?>
                        </div>


                    </div>

                    <!-- Realted to item description -->
                    <div class="des-item">
                        <h4>Description:</h4>

                        <?php
                            echo "<p>".$prodData['product_des']."</p>";
                        ?>
                        
                    </div>

                </div>

                <div class="item-shipping-menu">
                    <div class="delivery-related">
                        
                        <div class="delivery-options">
                            <label for="">Delivery Options</label>

                            <img src="../../images/infoIcon.svg" alt="Info Icon" width="20px">

                            <br clear="all">
                        </div>


                        <div class="delivery-location">

                            <input type="text" placeholder="Enter location">
                            <br><br> 
                            
                        </div>

                        <div class="item-add-cart">
                            
                            <div><h4 id="noInStock" value=<?php echo $prodData['stock']; ?> >In Stock: <?php echo $prodData['stock']; ?></h4></div>

                            <div class="buy-quantity">
                                <label for="">Quantity:</label>

                                <button class="button" id="incNoItem" onclick="incItem()"><img src="../../images/add.svg" alt="" width="30px"></button>
                                <label id="itemQuantity" for="" value="1">1</label>
                                <button class="button" id="decNoItem" onclick="decItem()"><img src="../../images/substract.svg" alt="" width="30px"></button>

                                <script>

                                    function incItem(){
                                        var toBuy = document.getElementById("itemQuantity").getAttribute("value"); 
                                        var inStock = document.getElementById("noInStock").getAttribute("value");

                                        if(parseInt(toBuy) < parseInt(inStock)){
                                            toBuy = parseInt(toBuy) + 1;
                                            document.getElementById("itemQuantity").setAttribute("value",toBuy);
                                            document.getElementById("itemQuantity").innerHTML = toBuy;
                                        }
                                    }

                                    function decItem(){
                                        var toBuy = document.getElementById("itemQuantity").getAttribute("value"); 
                                        var inStock = document.getElementById("noInStock").getAttribute("value");

                                        if(parseInt(toBuy) == 0){

                                        }
                                        else if(parseInt(toBuy) > 0){
                                            toBuy = parseInt(toBuy) - 1;
                                            document.getElementById("itemQuantity").setAttribute("value",toBuy);
                                            document.getElementById("itemQuantity").innerHTML = toBuy;
                                        }
                                    }
                                
                                    
                                
                                </script>
                            </div>

                            <div class="shopping">

                                <div class="add-cart">
                                    <button class="button" type="button">
                                        <div>
                                            <a href="">Add To Cart</a>
                                            <img src="../../images/shopping-cart.svg" alt="" width="40px">
                                        </div>
                                    </button>
                                </div>

                            </div>

                        </div>
                            
                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-4"></div>

            <div class="col-lg-8">

                <div class="item-manufacturer">

                    <div>

                        <h2>Manufacturer Description:</h2>

                        <?php
                            echo "<p>".$prodData['manufacturer_des']."</p>";
                        ?>

                    </div>

                </div>


            </div>
            
        </div>

    </div>
    
</body>
</html>