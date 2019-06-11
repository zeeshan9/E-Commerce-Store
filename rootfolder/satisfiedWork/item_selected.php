<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="item_selected.css">
    <link rel="stylesheet" href="../normalized_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container-fluid">
        <!-- Navigation Bar -->
        <?php
            require_once("../../rootfolder2/navbar.php");
            $id = $_GET["id"];
        ?>
           

        <div class="row">

            <div class="col-lg-4" >

                <div class="item-pics">

                    <div class="card img-item-lg">

                        <?php

                            require_once("../../database/database_connections/ProductClass.php");
                            $prodImg = new Product();
                            $imgName = $prodImg->GetProductPicture($id);
                            echo $imgName;
                            //echo "<img src='../../product_images/$imgName' alt='Product Image' width='100%'>";
                        ?>
                    </div>
            </div>

            <div class="col-lg-8">

                <div class="item-data">

                    <!-- Related to compnay -->
                    <div class="company-related">

                        <div class="item-name"><h2>Mobile</h2></div>

                        <div class="item-company-name"><h6>Google LLC</h6></div>

                    </div>

                    <!-- Related to item -->
                    <div class="item-related">

                        <div class="item-price">
                            <label for="">Price:</label>
                            <label>350.0 $</label>
                        </div>


                    </div>

                    <!-- Realted to item description -->
                    <div class="des-item">
                        <h4>Description:</h4>
                        
                        <p>

                            Product works and looks like new. Backed by the 90-day Amazon Renewed Guarantee. <br>
                            
                            This Amazon Renewed product is professionally inspected and tested by an Amazon qualified supplier. Box and accessories may be generic. Learn more
                            
                            <ul>
                                <li>12.2MP Camera with f/1.8, 27mm, 1/2.6" Sensor Size + 8MP Front Camera with f/2.4, 27mm, 1/3.2" Sensor Size</li>
                                <li>5.0-inch AMOLED Capacitive Touchscreen, 1080 x 1920 pixels with Corning Gorilla Glass 5 </li>
                                <li>Android OS </li>
                                <li>Internal Memory: 64GB, 4GB RAM </li>
                                <li>Non-Removable Lithium Ion 2700 mAh Battery, Dimensions: 5.74 x 2.74 x 0.31 inches, Weight: 5.04 oz </li>
                            </ul>    
                        </p>
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

                            <button class="button" type="button">
                                <div>
                                    <a href="">Location</a> 
                                    <img src="../../images/locatioIcon.svg" alt="Loc Icon" width="30px">
                                </div>
                            </button>

                            <p>Selected Location</p>

                            
                        </div>

                        <div class="item-add-cart">
                            
                            <div><h4>In Stock</h4></div>

                            <div class="buy-quantity">
                                <label for="">Quantity:</label>

                                <button class="button"><img src="../../images/add.svg" alt="" width="30px"></button>
                                <label id="itemQuantity" for="">1</label>
                                <button class="button"><img src="../../images/substract.svg" alt="" width="30px"></button>

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

                                <div class="buy-now">
                                    <button class="button" type="button">
                                        <div>
                                            <a class="removelinkdefault" href="">Add To Cart</a>
                                            <img src="../../images/buy_now.svg" alt="" width="40px">
                                        </div>
                                    </button>
                                </div>

                                <div class="item-supplier">
                                    <label for="">Sold By <a href="">----</a></label>
                                </div>

                            </div>

                        </div>
                            
                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-4">

                <div class="item-similar">

                    <div class="card">
                        <img class="card-img-top" id="simItem-1" src="../../images/samsungGalaxyXCurve.jpg" alt="Samsung Galaxy X Curve 2019" width="100%">
                        <br>
                        <label for="">Samsung Galaxy X Curve 2019</label>

                    </div>

                    <div class="card">
                        <img class="card-img-top" id="simItem-1" src="../../images/samsungGalaxyA8Star.jpg" alt="Samsung Galaxy A8 Star" width="100%">
                        <br>
                        <label for="simItem-1">Samsung Galaxy A8 Star</label>
                    </div>

                    <div class="card">
                        <img class="card-img-top" id="simItem-1" src="../../images/iPhoneX.jpg" alt="iPhone X" width="100%">
                        <br>
                        <label for="simItem-1">iPhone X</label>
                    </div>

                </div>

            </div>

            <div class="col-lg-8">

                <div class="item-manufacturer">

                    <div>

                        <h2>Manufacturer Description:</h2>

                        <p>
                            The best smartphone camera in the world.

                            <ul>
                                <li>Capture your best photos ever with Pixel.</li>
                                <li>Never delete a shot with free unlimited storage for all your photos and videos in original quality.</li>
                                <li>Take next-level photos with HDR+ integrated into Instagram, WhatsApp and Snapchat.</li>
                                <li>Incredible detail even in low light with HDR+.</li>
                                <li>Add interactive characters and emojis to live scenes with AR.</li>
                                <li>Image stabilization keeps videos steady.</li>
                                <li>Blurs background for DSLR-quality portraits.</li>
                                <li>Google Photos helps you find, save, organize and share.</li>
                            </ul>
                        
                        </p>

                        <h3>Key Features:</h3>

                        <p>
                            <h5>Search what you see.</h5>

                            Learn more about landmarks or look up books, movies, albums and artwork using Google Lens.

                        </p>

                        <p>

                            Your own personal Google, built in.

                            Request a ride, reserve a table and buy a ticket using just your voice.

                            <h5>Squeeze for help.</h5>

                            With a squeeze, you can launch your Google Assistant for real-time help

                        </p>

                        <p>
            
                            Big entertainment, wherever you go.

                            High‑definition stereo speakers and High‑resolution displays

                            <h5>Name that tune.</h5>

                            Curious about that song playing in your favorite coffee shop? Pixel automatically displays song info so you know what's playing.

                        </p>

                    </div>

                </div>

                <div class="item-rating-review">

                    <div class="item-rating"></div>

                </div>

            </div>
            
        </div>

        <footer>

        </footer>

    </div>
    
</body>
</html>