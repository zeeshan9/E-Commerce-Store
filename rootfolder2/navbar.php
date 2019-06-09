<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce Store</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">    

</head>
<body>

<div class="container-fluid" id="outer-nav">
        <div class="row-2">
            <div class="col-sm-2 row-1">
            <div class="nav bar-header">
                <img class="navbar-brand" src="../images/add.svg" alt="image logo">
        </div>
         </div>
         <div class="col-sm-9 row-1">
        <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" id="inputsearch" placeholder="Search" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
            </div>
          </div>
        </form>
        </div>

            <div class="col-sm1 row-1">
              <img class="" src="../images/orangecart.png" alt="cart img" style="height: 50px; width: 50px;"> 
            </div>
      </div>
      </div>

      <div class="container-fluid" >
          <div class="row" id="top_row" >
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="inline" style="color: slateblue">
                  <a class="anchor" style="color: #ec830be8;" id="home" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                  <strong>Home</strong>
                </a>
              </div>
              <div class="inline" >
                  <div class="dropdown">
                      <a  class="anchor" style="color: #ec830be8;" id="category" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                      <span><strong>Categories</strong></span>
                      </a>
                      <div class="dropdown-content">
                        <a href="#">Electronic</a>
                        <a href="#">Mobile Phone</a>
                        <a href="#">Laptops</a>
                      </div>
                    </div>
              </div>
              <div class="inline" >
                  <div class="dropdown">
                      <a class="anchor" style="color: #ec830be8;" id="deals" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                      <strong>Today's Deal</strong></a>
                      <div class="dropdown-content">
                        <a href="#">gifts</a>
                        <a href="#">locket</a>
                        <a href="#">Laptops</a>
                      </div>
                    </div>
              </div>
              <div class="inline" style="color: slateblue">
                  <a class="anchor" style="color: #ec830be8;" id="todaydeal" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                  <strong>Brand</strong>
                </a>
              </div>
              
              
              <div class=""></div>
            </div>
            <div class="col-md-1">
              <div class="col-md-1" >
                    <a class="register" style="color: #ec830be8;" id="signup" onmouseover="mouseover(this)" onmouseout="mouseout(this)" >
                        <strong>Signup</strong>
                    </a>
                </div>
                <div class="col-md-0" id="register1">
                    <p><a class="register1" style="color: #ec830be8;" id="login" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                        <strong>Login</strong>
                </a></p>
                </div>
            </div>
          
           </div> 


    <!-- <div class="container-fluid">

         
        <header>
            <div class="row">
                <div class="col-sm-2">
                    <img src="images/logo.png" alt="logo" height="75px">
                </div>
    
                <div class="col-sm-5">
                    <form class="navbar-form navbar-left" style="padding: 20px; padding-right: 2px;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>

                <div class="col-sm-3">
                </div>
    
                <div class="col-sm-2">
                    <div style="padding: 20px; padding-right: 2px;">
                    <a href="" id="signin">Sign In</a>
                    <a href="" id="signin">Logout</a>
                    
                    </div>  
                </div>
               
            </div>
        </header>
    
        <div style="background-color: white; width: 100%;">
    
            <div class="row">
    
                <div class="col-lg-1"></div>
    
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categories
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </div> 
    
                <div><button type="button" class="btn btn-default">Gift Cards</button></div>
    
                <div><button type="button" class="btn btn-default">Today's Deal</button></div>
    
                <div><button type="button" class="btn btn-default">Help and Community</button></div>
    
                <div><button type="button" class="btn btn-default">Tools</button></div>
    
            </div>
        </div>
    
     </div> -->

     </body>
</html>