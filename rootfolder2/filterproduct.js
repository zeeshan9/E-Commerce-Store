
              function producttypeselected(obj) 
              {
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
                      
                      $("#parentDiv").append(" <div class='col-sm-2 pad'><form action='' ><div class='center-div'><div class='card-jfy-image card-jfy-image-background J_GridImage' id='productimage'><img src='../product_images/"+value["picture"]+"' height='100%' alt='Product Image' width='100%'></div><div class='card-jfy-item-desc'><div class='card-jfy-title'><span class='title'  onclick='productDesc(this)'>"+value["name"]+"</span></div><div class='hp-mod-price textstyle'><div class='hp-mod-price-second-line'><span >Rs "+value["price"]+"  -40%</span></div></div><div class='card-jfy-footer'><p class='textstyle'>rating</p></div></div></div></form></div>");
                    });
                });
              }

              function selectByPricing() {
                var price = [];
               
                price.push($('#minprice').val());
                price.push($('#maxprice').val());
                 
                // var result = price.join();

                console.log(price);
                $.get("../database/database_connections/ajaxGetPrice.php", {data:price}, function(data){
                   
                  var jsonConverted = JSON.parse(data);

                  $("#parentDiv").html("");
                  var count=0;
                  $.each(jsonConverted, function(index, value){
                      
                    $("#parentDiv").append(" <div class='col-sm-2 pad'><form action='' ><div class='center-div'><div class='card-jfy-image card-jfy-image-background J_GridImage' id='productimage'><img src='../product_images/"+value["picture"]+"'  alt='Product Image' width='100%'></div><div class='card-jfy-item-desc'><div class='card-jfy-title'><span class='title'  onclick='productDesc(this)'>"+value["name"]+"</span></div><div class='hp-mod-price textstyle'><div class='hp-mod-price-second-line'><span >Rs "+value["price"]+"  -40%</span></div></div><div class='card-jfy-footer'><p class='textstyle'>rating</p></div></div></div></form></div>");
                    count++;
                    if(count==3)
                    {
                      break;
                    }
                  });
                });

              }
              function productDesc(product_id) {

              }