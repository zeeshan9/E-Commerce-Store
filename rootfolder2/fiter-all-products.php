<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="filter-product.css">
    <script src="../jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
  h3{
    color: linear-gradient(to bottom left, #003366 0%, #33cccc 100%);
  }
</style>
</head>
<body style=" background-color: #f5f5f5">
<?php
              require_once("navbar.php");
              
              require_once("../database/database_connections/ShowProducts.php");
             

              // "<img src='../product_images/$img[0]' alt='Product Image' width='100%'>";
                //   Brand Class 
              require_once("../database/database_connections/selectbrand.php");
              $brandLabel = new brand();
              $result = $brandLabel->GetAllbrands();
              $b_index = 0;
              while($row = $result->fetch())
              {
                 
               $protypeid[$b_index] = $row["product_type_id"];
               $bname[$b_index] = $row["name"];
              //  echo $bname[$]
               $b_index++;
              } 
              
              // Warrenty Class
              require_once("../database/database_connections/WarrentyClass.php");
              $warrentyLabel = new Warrenty();
              $result = $warrentyLabel->GetAllRecords();
              $w_index = 0;
              while($row = $result->fetch())
              {
                 
               $w_id[$w_index] = $row["id"]; 
               $w_name[$w_index] = $row["name"];
              //  echo $bname[$]
               $w_index++;
              } 
          ?>
    <div class="container-fluid" id="courasal" >
        <div class="row" >
          <div class="col-sm-3">
            <div class="container-fluid maxheight-div">
              <div class="row padrow" >
              <div class="col-md-6 gridimg">  
                <?php
                    echo '<a class="title" href="../rootfolder/satisfiedWork/item_selected.php?id=15" >';
                    echo "<img  src='../product_images/$img[1]' alt='Product Image' width='100%' >"; 
                    echo '</a>'; 
                ?>
                
                </div>
                <div class="col-md-6 gridimg">  
                <?php
                    echo '<a class="title" href="../rootfolder/satisfiedWork/item_selected.php?id=15" >';
                    echo "<img  src='../product_images/$img[1]' alt='Product Image' width='100%' >"; 
                    echo '</a>'; 
                ?>
                
                </div>
              </div>
            </div>

            <div class="container-fluid maxheight-div" >
                <div class="row padrow" >
                <div class="col-md-6 gridimg">  
                <?php
                    echo '<a class="title" href="../rootfolder/satisfiedWork/item_selected.php?id=15" >';
                    echo "<img  src='../product_images/$img[1]' alt='Product Image' width='100%' >"; 
                    echo '</a>'; 
                ?>
                
                </div>
                <div class="col-md-6 gridimg">  
                <?php
                    echo '<a class="title" href="../rootfolder/satisfiedWork/item_selected.php?id=15" >';
                    echo "<img  src='../product_images/$img[1]' alt='Product Image' width='100%' >"; 
                    echo '</a>'; 
                ?>
                
                </div>
                </div>
              </div>

          </div>
          <div class="col-md-9">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
              
               <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                    <div class="item active">
                      <img src="../images/corousal_d.webp" alt="Los Angeles" style="width:100%;">
                      <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="../images/bags_coraosal.webp" alt="Chicago" style="width:100%;">
                      <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="../images/coroasal_2.webp"  alt="New York" style="width:100%;">
                      <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                      </div>
                    </div>

                    </div>
                   <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              </div>
    </div>
    <!-- ============== -->
    <div class="container-fluid product-row-boundary">
      <div class="container-fluid">
        
        
        <div class="row">
          <div class="col-md-2">
            <br>
              <h5 class="textcolor" id="textcol" style="color: #ff6a00;">Mobiles</h5>
              <hr>              
          </div>
          <div class="col-md-10">
                <h3 class="textcolor">Best Mobiles Prices in Pakistan</h3>
                <hr style="color: black; size: 5px; margin-top: 25px">
            </div>
        </div>
        
        
        <div class="row inner-row">
            
            <div class="col-md-2">
              <div class="col-sm-12 pad">
                <!-- form -->
                <form action="/action_page.php">
                  <div>
                    <h4 style="color: #ff6a00;">Product</h4>
                  </div>

                  <!-- Product items Checklist -->
                <?php 
                    for ($bi=0; $bi < $b_index; ++$bi) {
                ?>
                    <div class="productlist">    
                      <input id="checkb" type="checkbox" name="checkedproducts"  value="<?php echo $protypeid[$bi]; ?>"
                      style="margin: 7px" onclick="producttypeselected(this)">
                      <?php echo $bname[$bi]; ?>
                    </div>
                    <?php
                    }
                ?>
                </form>
              </div>
            </div>
            <div class="col-md-10" id="parentDiv">
                             <!-- Product item 2 -->
                  <?php 
                  for ($i=0; $i <= 5; $i++) { 
                  ?>
                    <div class="col-sm-2 pad">
                    <form action="" >
                        <div class="center-div">
                        <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                          <?php
                            echo "<img src='../product_images/$img[$i]' height='100%'  alt='Product Image' width='100%'>";  
                          ?>
                        </div>
                            <div class="card-jfy-item-desc">
                            <div class="card-jfy-title">
                            
                            <span>
                            <a class="title" id="<?php echo $id[$i] ?>" onmouseover="mouseover(this)" onmouseout="mouseout(this)"
                              href="../rootfolder/satisfiedWork/item_selected.php?id=<?php echo $id[$i] ?>" >
                              <span class="title"> <?php echo $name[$i]; ?> </span>
                            </a>
                            </span>
                            </div>  
                      
                        <div class="hp-mod-price textstyle">
                      
                        <div class="hp-mod-price-second-line">
                          <span >Rs <?php echo $price[$i]; ?> -40%</span> 
                        </div>

                        </div>  
                        <div class="card-jfy-footer">
                         
                        </div>
                              

                              </div>
                          </div>
                          </form>
                    </div>
                    <?php
                  }
                  ?>
                  </div>        <!-- End of Row -->
        </div>
      </div>
    </div>
    
    <div class="container-fluid product-row-boundary">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-2">
                <br>
                  <h5 style="color: #ff6a00;">Warranty Type</h5>    
                  <hr>
                  
              </div>
              <div class="col-md-10">
                    <h3 >Weekly Deals</h3>
                    <hr style="color: black; size: 5px; margin-top: 25px">
                </div>
            </div>
          <div class="row inner-row">
           <div class="col-sm-2 pad">
                <h4 style="margin: 7px; color: #ff6a00">Price</h4>
                  <div>
                      <input type="number" id="minprice" min="0" class="input_price" name="minprice" placeholder="Min"  style="margin: 7px">
                    </div>
                    <div>
                        <input type="number" id="maxprice" min="0" class="input_price" name="maxprice" placeholder="Max" style="margin: 7px">
                      </div>
                      <br>
                      <button type="button" class="btn btn-info" style="margin: 7px;" onclick="selectByPricing()">Apply</button>
                  </div>  

                                 <!-- Product item 2 -->
            <div class="col-md-10" id="parentDiv2">
                  <?php 
                    for ($i=2; $i <= 7; $i++) { 
                  ?>
                     <div class="col-sm-2 pad">
                    <form action="" >
                        <div class="center-div">
                        <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                          <?php
                            echo "<img src='../product_images/$img[$i]' height='100%'  alt='Product Image' width='100%'>";  
                          ?>
                        </div>
                            <div class="card-jfy-item-desc">
                            <div class="card-jfy-title">
                            
                            <span>
                            <a class="title" id="<?php echo $id[$i].$id[$i] ?>" onmouseover="mouseover(this)" onmouseout="mouseout(this)"
                              href="../rootfolder/satisfiedWork/item_selected.php?id=<?php echo $id[$i] ?>" >
                              <span class="title"> <?php echo $name[$i]; ?> </span>
                            </a>
                            </span>
                            </div>  
                      
                        <div class="hp-mod-price textstyle">
                      
                        <div class="hp-mod-price-second-line">
                          <span >Rs <?php echo $price[$i]; ?> -40%</span> 
                        </div>

                        </div>  
                        <div class="card-jfy-footer">
                        </div>
                              

                              </div>
                          </div>
                          </form>
                    </div>
                    <?php
                  }
                  ?>
                  </div>        <!-- End of Row -->

            
                   
                                          <!-- End of Row -->
          </div>
        </div>
      </div>

       <!--            Next Row                 -->
    <div class="container-fluid product-row-boundary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                  <br>
                    <h5 style="color: #ff6a00;">Pricing</h5>
                    <hr>
                    
                </div>
                <div class="col-md-10">
                      <h3 >Weekly Deals</h3>
                      <hr style="color: black; size: 5px; margin-top: 25px">
                  </div>
              </div>
          
          <div class="row inner-row">
          <div class="col-sm-2 pad">
                  <form action="/action_page.php">
                    <div>
                      <h4 style="color: #ff6a00;">Warrenties Available</h4>
                    </div>
                    <?php 
                      for ($wi=0; $wi <$w_index; $wi++) { 
                      ?>
                        <div>
                          <label  style="color: #d18631e8; margin: 5px" for=""> <?php echo $w_name[$wi]; ?></label>
                          <!-- <input type="checkbox" name="vehicle" value="Bike" style="margin: 7px"> -->
                        </div>
                        <?php
                      }
                      ?>
                  </form>
              </div>

                                 <!-- Product item 2 -->
              <div class="col-md-10" id="parentDiv3">
                             <!-- Product item 2 -->
                  <?php 
                  for ($i=1; $i <= 6; $i++) { 
                  ?>
                     <div class="col-sm-2 pad">
                    <form action="" >
                        <div class="center-div">
                        <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                          <?php
                            echo "<img src='../product_images/$img[$i]' height='100%'  alt='Product Image' width='100%'>";  
                          ?>
                        </div>
                            <div class="card-jfy-item-desc">
                            <div class="card-jfy-title">
                            
                            <span>
                            <a class="title" id="<?php echo $id[$i].$id[$i].$id[$i].$id[$i] ?>" onmouseover="mouseover(this)" onmouseout="mouseout(this)"
                              href="../rootfolder/satisfiedWork/item_selected.php?id=<?php echo $id[$i] ?>" >
                              <span class="title"> <?php echo $name[$i]; ?> </span>
                            </a>
                            </span>
                            </div>  
                      
                        <div class="hp-mod-price textstyle">
                      
                        <div class="hp-mod-price-second-line">
                          <span >Rs <?php echo $price[$i]; ?> -40%</span> 
                        </div>

                        </div>  
                        <div class="card-jfy-footer">
                        </div>
                              

                              </div>
                          </div>
                          </form>
                    </div>
                    <?php
                  }
                  ?>
                  </div>        <!-- End of Row -->

                                          <!-- End of Row -->
          </div>
        </div>
      </div>

       <!--            Next Row                 -->
    <div class="container-fluid product-row-boundary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                  <br>
                 <h5 style="color: #ff6a00;"></h5>  <!-- Ranking -->
                  <hr>
                </div>
                <div class="col-md-10">
                      <h3 >Collections</h3>
                      <hr style="color: black; size: 5px; margin-top: 25px">
                  </div>
              </div>
          
          <div class="row inner-row">
              <div class="col-sm-2 pad">
              </div>
                                 <!-- Product item 2 -->
            <div class="col-md-10" id="parentDiv4">
                             <!-- Product item 2 -->
                  <?php 
                  for ($i=0; $i <= 5; $i++) { 
                  ?>
                    <div class="col-sm-2 pad">
                    <form action="" >
                        <div class="center-div">
                        <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                          <?php
                            echo "<img src='../product_images/$img[$i]' height='100%'  alt='Product Image' width='100%'>";  
                          ?>
                        </div>
                            <div class="card-jfy-item-desc">
                            <div class="card-jfy-title">
                            
                            <span>
                            <a class="title" id="<?php echo $id[$i].$id[$i].$id[$i] ?>" onmouseover="mouseover(this)" onmouseout="mouseout(this)"
                              href="../rootfolder/satisfiedWork/item_selected.php?id=<?php echo $id[$i] ?>" >
                              <span class="title"> <?php echo $name[$i]; ?> </span>
                            </a>
                            </span>
                            </div>  
                      
                        <div class="hp-mod-price textstyle">
                      
                        <div class="hp-mod-price-second-line">
                          <span >Rs <?php echo $price[$i]; ?> -40%</span> 
                        </div>

                        </div>  
                        <div class="card-jfy-footer">
                        </div>
                              

                              </div>
                          </div>
                          </form>
                    </div>
                    <?php
                  }
                  ?>
                  </div>        <!-- End of Row -->

          
                                          <!-- End of Row -->
          </div>
        </div>
      </div>
      
      <script src="filterproduct.js"></script>
      
          </body>
</html>