<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecommerce</title>

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body style=" background-color: #f5f5f5">
          
          <?php
              require_once("navbar.php");
              
              require_once("../database/database_connections/ProductClass.php");
              $productTabel = new Product();
              $result = $productTabel->GetAllRecords();
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
              // "<img src='../product_images/$img[0]' alt='Product Image' width='100%'>";
              
          ?>
    <div class="container-fluid" id="courasal">
        <div class="row">
          <div class="col-sm-3" >
          <div class="container-fluid maxheight-div" >
              <div class="row padrow">
                <div class="col-md-6 gridimg">  
                <?php
                    echo '<a class="title" 
                    href="../rootfolder/satisfiedWork/item_selected.php?id=15" >';
                    echo "<img  src='../product_images/$img[1]' alt='Product Image' width='100%' >"; 
                    echo '</a>'; 
                ?>
                
                </div>
                <div class="col-md-6 gridimg">
                <?php
                    echo '<a class="title" 
                    href="../rootfolder/satisfiedWork/item_selected.php?id=13" >';
                    echo "<img  src='../product_images/$img[1]' alt='Product Image' width='100%' >"; 
                    echo '</a>'; 
                ?>             
                 </div>
              </div>
            </div>

            <div class="container-fluid maxheight-div">
              <div class="row padrow">
                  <div class="col-md-6 gridimg">
                  <?php
                    echo '<a class="title"
                    href="../rootfolder/satisfiedWork/item_selected.php?id=16" >';
                    echo "<img  src='../product_images/$img[1]' alt='Product Image' width='100%' >"; 
                    echo '</a>'; 
                ?>
                  </div>
                  <div class="col-md-6 gridimg">
                  <?php
                    echo '<a class="title" 
                    href="../rootfolder/satisfiedWork/item_selected.php?id=17" >';
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
    <!-- Products Row Section-->
    <div class="container-fluid product-row-boundary" style="margin:2%">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <h3 class="title">Flash Sale</h3>
            </div>
            <div class="col-md-10">
                  <hr style="color: black; size: 5px; margin-top: 25px">
            </div>
        </div>
        
        <div class="row inner-row">
          
                               <!-- Product items -->
            <?php 
              for ($i=0; $i <= 5; $i++) { 
            ?>     
            <div class="col-sm-2 pad">
                  <!-- //onclick="productDesc($id[$i])"" -->
                  <div class="center-div">
                      <div class="card-jfy-image card-jfy-image-background J_GridImage" id="<?php echo $i ?>">
                        <?php
                          echo "<img src='../product_images/$img[$i]' height='145px' alt='Product Image' width='100%'>";  
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
                        <span >Rs <?php echo $price[$i]; ?>-40%</span> 
                      </div>

                      </div>     
                      <div class="card-jfy-footer">
                        <p class="textstyle" >rating</p>
                      </div>
                    </div>

              </div>
            </div>
            <?php
            }
            ?>
          <!-- </form> -->
            
        </div>
      </div>
    </div>

              <!--            Next Row                 -->
    <div class="container-fluid product-row-boundary" style="margin:2%">
        <div class="container-fluid">
          <h3 class="title">Collections</h3>
          
          <div class="row inner-row">
          <!-- Product items -->
          <form action="" >
        <?php 
        for ($i=7; $i <= 12; $i++) { 
          ?>
        
        <div class="col-sm-2 pad" >
              
              <div class="center-div">
                  <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                    <?php
                      echo "<img src='../product_images/$img[$i]'   alt='Product Image' width='100%'>";  
                    ?>
                  </div>
                  <div class="card-jfy-item-desc"> 
                          
                  <div class="card-jfy-title">
                  <span class="title" onclick="productDesc()">
                    <?php echo $prod_desc[$i]; ?>
                    </span>
                    </div>
                 
                  <div class="hp-mod-price textstyle">
                
                  <div class="hp-mod-price-second-line">
                     <span >Rs <?php echo $price[$i]; ?> -40%</span> 
                  </div>

                  </div>     
                  <div class="card-jfy-footer">
                     <p class="textstyle">rating</p>
                  </div>
                </div>

          </div>
      </div>
            <?php
            }
            ?>
</form>
                                
                                          <!-- End of Row -->
          </div>
        </div>
      </div>

      <!--            Next Row                 -->
    <div class="container-fluid product-row-boundary" style="margin:2%">
        <div class="container-fluid">
          <h3 class="title">Weekly Deals</h3>
          
          <div class="row inner-row">
          <!-- Product items -->
          <form action="" >
        <?php 
        for ($i=13; $i <= 18; $i++) { 
          ?>
        
        <div class="col-sm-2 pad">
              
              <div class="center-div">
                  <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                    <?php
                      echo "<img src='../product_images/$img[$i]' height='145px' alt='Product Image' width='100%'>";  
                    ?>
                  </div>
                  <div class="card-jfy-item-desc"> 
                          
                  <div class="card-jfy-title">
                  <span class="title" onclick="productDesc()">
                    <?php echo $prod_desc[$i]; ?>
                    </span>
                    </div>
                 
                  <div class="hp-mod-price textstyle">
                
                  <div class="hp-mod-price-second-line">
                     <span >Rs <?php echo $price[$i]; ?> -40%</span> 
                  </div>

                  </div>     
                  <div class="card-jfy-footer">
                     <p class="textstyle">rating</p>
                  </div>
                </div>

          </div>
      </div>
            <?php
            }
            ?>
</form>
                                          <!-- End of Row -->
          </div>
        </div>
      </div>

       <!--            Next Row                 -->
       <div class="container-fluid product-row-boundary" style="margin:2%">
        <div class="container-fluid">
          <h3 class="title">Global Collections</h3>
          
          <div class="row inner-row">
          <!-- Product items -->
          <form action="" >
        <?php 
        for ($i=19; $i <= 24; $i++) { 
          ?>
        
        <div class="col-sm-2 pad">
              
              <div class="center-div">
                  <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                    <?php
                      echo "<img src='../product_images/$img[$i]' height='145px' alt='Product Image' width='100%'>";  
                    ?>
                  </div>
                  <div class="card-jfy-item-desc"> 
                          
                  <div class="card-jfy-title">
                  <span class="title" onclick="productDesc()">
                    <?php echo $prod_desc[$i]; ?>
                    </span>
                    </div>
                 
                  <div class="hp-mod-price textstyle">
                
                  <div class="hp-mod-price-second-line">
                     <span >Rs <?php echo $price[$i]; ?> -40%</span> 
                  </div>

                  </div>     
                  <div class="card-jfy-footer">
                     <p class="textstyle">rating</p>
                  </div>
                </div>

          </div>
      </div>
            <?php
            }
            ?>
</form>
                                          <!-- End of Row -->
          </div>
        </div>
      </div>

        <script src="ecommerce.js"></script>
    </body>
</html>