<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="filter-product.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
  h3{
    color: linear-gradient(to bottom left, #003366 0%, #33cccc 100%);
  }
</style>
</head>
<body style=" background-color: #f5f5f5, color linear-gradient(to bottom left, #003366 0%, #33cccc 100%)">
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
          <div class="col-sm-3 maxheight-div" >
            <div class="container-fluid">
              <div class="row" >
                <div class="col-md-6" >
                <?php
                    echo "<img src='../product_images/$img[0]' alt='Product Image' width='100%'>";  
                ?>
                </div>
                <div class="col-md-6">
                <?php
                    echo "<img src='../product_images/$img[1]' alt='Product Image' width='100%'>";  
                ?>               
                 </div>
              </div>
            </div>

            <div class="container-fluid">
                <div class="row" >
                  <div class="col-md-6" >
                  <?php
                    echo "<img src='../product_images/$img[1]' alt='Product Image' width='100%'>";  
                   ?>
                  </div>
                  <div class="col-md-6">
                  <?php
                                    echo "<img src='../product_images/$img[0]' alt='Product Image' width='100%'>";  
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
                    <!-- ?php $protypeid[$bi] ? -->
                      <input type="checkbox" name="checkedproducts" value="<?php echo $protypeid[$bi]; ?>"
                      style="margin: 7px" onclick="producttypeselected(this)">
                      <?php echo $bname[$bi]; ?>
                    </div>
                    <?php
                    }
                ?>
                <!-- <p id="text1" style="display:none">Checkbox is CHECKED!</p> -->
                </form>
              </div>
            </div>
                    <div class="col-md-10" id="parentDiv">
                             <!-- Product item 2 -->
                  <?php 
                  for ($i=0; $i <= 4; $i++) { 
                  ?>
                    <div class="col-sm-2 pad">
                    <form action="" >
                        <div class="center-div">
                        <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                          <?php
                            echo "<img src='../product_images/$img[$i]'  alt='Product Image' width='100%'>";  
                          ?>
                        </div>
                            <div class="card-jfy-item-desc">
                                    
                            <div class="card-jfy-title">
                            <span class="title" onclick="productDesc()">
                          <?php echo $name[$i]; ?>
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
                  <form action="/action_page.php">
                    <div>
                      <h4 style="color: #ff6a00;">Warranty</h4>
                    </div>
                    <?php 
            for ($wi=0; $wi <$w_index; $wi++) { 
            ?>
              
              <div>
                <input type="checkbox" name="vehicle" value="Bike" style="margin: 7px"><?php echo $w_name[$wi]; ?>
              </div>
              <?php
            }
            ?>
                  </form>
              </div>
                                 <!-- Product item 2 -->
                                 
          <?php 
            for ($i=5; $i <= 9; $i++) { 
            ?>
              <div class="col-sm-2 pad">
              <form action="" >
                  <div class="center-div">
                  <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                    <?php
                      echo "<img src='../product_images/$img[$i]'  alt='Product Image' width='100%'>";  
                    ?>
                  </div>
                      <div class="card-jfy-item-desc">
                              
                      <div class="card-jfy-title">
                      <span class="title" onclick="productDesc()">
                    <?php echo $name[$i]; ?>
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
                    </form>
              </div>
              <?php
            }
            ?>
            
                   
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
                <h4 style="margin: 7px; color: #ff6a00">Price</h4>
                  <div>
                      <input type="number" min="0" class="input_price" name="vehicle" placeholder="Min" value="Bike" style="margin: 7px">
                    </div>
                    <div>
                        <input type="number" min="0" class="input_price" name="vehicle" placeholder="Max" value="Bike" style="margin: 7px">
                      </div>
                      <br>
                      <button type="button" class="btn btn-info" style="margin: 7px;">Apply</button>
              </div>
                                 <!-- Product item 2 -->
                                 <?php 
            for ($i=10; $i <= 14; $i++) { 
            ?>
              <div class="col-sm-2 pad">
              <form action="" >
                  <div class="center-div">
                  <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                    <?php
                      echo "<img src='../product_images/$img[$i]'  alt='Product Image' width='100%'>";  
                    ?>
                  </div>
                      <div class="card-jfy-item-desc">
                              
                      <div class="card-jfy-title">
                      <span class="title" onclick="productDesc()">
                    <?php echo $name[$i]; ?>
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
                    </form>
              </div>
              <?php
            }
            ?>
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
                  <h5 style="color: #ff6a00;">Ranking</h5>
                    <hr>
                    
                </div>
                <div class="col-md-10">
                      <h3 >Collections</h3>
                      <hr style="color: black; size: 5px; margin-top: 25px">
                  </div>
              </div>
          
          <div class="row inner-row">
              <div class="col-sm-2 pad">
                  <h5 style="margin: 7px; color: #ff6a00;">Rating</h5>
                  
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <br>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <br>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <br>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <br>
                  <span class="fa fa-star checked"></span>
                  
              </div>
                                 <!-- Product item 2 -->
                                 <?php 
            for ($i=15; $i <= 19; $i++) { 
            ?>
              <div class="col-sm-2 pad">
              <form action="" >
                  <div class="center-div">
                  <div class="card-jfy-image card-jfy-image-background J_GridImage" id="productimage">
                    <?php
                      echo "<img src='../product_images/$img[$i]'  alt='Product Image' width='100%'>";  
                    ?>
                  </div>
                      <div class="card-jfy-item-desc">
                              
                      <div class="card-jfy-title">
                      <span class="title" onclick="productDesc()">
                    <?php echo $name[$i]; ?>
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
                    </form>
              </div>
              <?php
            }
            ?>
          
                                          <!-- End of Row -->
          </div>
        </div>
      </div>
      <script src="../jquery-3.4.1.min.js"></script>
      <script>

              function producttypeselected(obj) 
              {
                debugger;
                var checkedBoxes = [];
                $.each($("div.productlist [type='checkbox']:checked"), function() 
                { 
                  checkedBoxes.push($(this).val());
                });

                var result = checkedBoxes.join();

                $.get("../database/database_connections/ajaxGetProducts.php", {data:result}, function(data){
                   
                  var jsonConverted = JSON.parse(data);

                  $("#parentDiv").html("");

                  $.each(jsonConverted, function(index, value){
                      
                      $("#parentDiv").append(" <div class='col-sm-2 pad'><form action='' ><div class='center-div'><div class='card-jfy-image card-jfy-image-background J_GridImage' id='productimage'><img src='../product_images/"+value["picture"]+"'  alt='Product Image' width='100%'></div><div class='card-jfy-item-desc'><div class='card-jfy-title'><span class='title' value='"+value["id"]+"' onclick='productDesc(this)'></span></div><div class='hp-mod-price textstyle'><div class='hp-mod-price-second-line'><span >Rs "+value["price"]+"  -40%</span></div></div><div class='card-jfy-footer'><p class='textstyle'>rating</p></div></div></div></form></div>");
                    });
                });


                // var el = document.getElementById('productlist');
                // var tops = el.children;
                
                // for (var i=0, len=tops.length; i<6; i++) {
                //   // alert("tops " + tops.value);
                //     if ( tops[i].type === 'checkbox' ) {
                //         tops[i].onclick = function() {
                //           // updatelist();
                //           alert("tops " + tops.value);

                //             // put your awesome code here
                //         }
                //     }
                //}
                // document.getElementById('checkproduct').onclick = function(){
                //   var border = document.getElementsByClassName("ischecked");
                //     for(i=0;i < border.length; i++)
                //     {
                //       border[i].checked = (this.checked)? alert(border[i]) : false;
                //     }
                //   }
                //     var border = document.getElementsByClassName("ischecked");
                //     for(i=0;i < border.length; i++)
                //     {
                //     border[i].addEventListener("click", function() {
                //       if (this.checked) {
                //         alert("jelo");
                //         console.log("Hello world!");
                //       } else {
                //         alert("telo");
                //         console.log("Hello world2!");
                //       }
                //     });
                //   }
              }

              function updatelist()
              {
                alert("check box clicked in update list");
              } 
              function productDesc(product_id) {
              
              }
              // Check Selected Check boxes
              // function producttypeselected(protype_id) 
              // {
              //   var checkboxes = document.getElementsByClassName("ischecked");
              //   for(let i = 0;i < checkboxes.length;i++){
              //     checkboxes[i].onclick = function(){
              //       if (checkboxes[i].checked) {
              //         var xhttp;  
                      
              //         xhttp = new XMLHttpRequest();
              //         xhttp.onreadystatechange = function() {
              //             if (this.readyState == 4 && this.status == 200) {
              //             document.getElementById("test").innerHTML = this.responseText;
              //             }
              //         };
              //         xhttp.open("GET", "ShowProducts.php?q=" + protype_id, true);
              //         xhttp.send();
              //       }
                    
              //     };
              //   }
              // }
              
              </script>
          </body>
</html>