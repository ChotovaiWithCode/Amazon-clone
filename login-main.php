<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/project1/main1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon"type="image/png"href="web_img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Duplicate</title>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="heder.css">
    <link rel="stylesheet" href="https://www.flaticon.com/free-icons/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Indie+Flower&family=Itim&family=Jersey+10+Charted&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Pacifico&family=Play:wght@400;700&family=Rubik+Wet+Paint&family=Satisfy&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="nav-bar">
            <div class="logo border">
                <div class="amazon-logo "></div>
            </div>
            <div class="location ">
                <div class="country border">
                    <div class="up">
                        <img class="icon-color" src="web_img/arrows.png">
                        <div class="up-dalever">
                            <p> Delever to</p>
                        </div>
                    </div>

                    <div class="down">
                        <p>Bangladesh</p>
                    </div>
                </div>
            </div>
            <div class="search">
                <div class="for-search navS">
                    <select class="option">
                        <option value="all">All</option>
                        <option value="Gaming">Gaming</option>
                    </select>

                    <div class="search_input1 ">
                        <input class="searchINP" type="text" id="search-input" placeholder="Search Please"></input>
                    </div>
                    <div class="search_icon">
                        <button class="nav-btn" id="filter-button">
                            <img class="searchICON" src="web_img/search.png">
                        </button>
                    </div>

                </div>
            </div>

            <div class="language">
                <img class="flag" src="https://flagsapi.com/IN/flat/64.png">
            </div>
            <div class="nav-signup ">
                <div class="nav-sign border" id="nv-logged">
                    <div class="loggedin-up">
                        <p>You'r loggedIn</p>
                    </div>
                    <div class="login-down">
                        <p>Account & List</p>
                    </div>
                </div>
            </div>
            <div class="cart ">
                <div class="nav-cart border">
                    <div class="cart-logo">
                        <img class="img-cart" src="web_img/shopping-cart.png">
                    </div>
                    <div class="cart1">
                        Cart
                    </div>
                </div>
            </div>
        </div>
        <div class="manu-bar">
            <ul class="menu-items">
                <li class="list-item border">
                    <img class="main-menu" src="web_img/main-menu.png">
                    All
                </li>
                <li class="list-item border">Today's Deals</li>
                <li class="list-item border">Customer Service</li>
                <li class="list-item border">Registry</li>
                <li class="list-item border">Gift Cards</li>
                <li class="list-item border">Sell</li>
            </ul>
        </div>

    </header>


    <div class="slider">
        <div class="slides">
            <div class="slide"><img class="hrios_img" src="web_img/hiros1.jpg" alt="img1"></div>
            <div class="slide"><img class="hrios_img" src="web_img/heros2.jpg" alt="img2"></div>
            <div class="slide"><img class="hrios_img" src="web_img/heros3.jpg" alt="img3"></div>
            <div class="slide"><img class="hrios_img" src="web_img/heros4.jpg" alt="img4"></div>
        </div>
    </div>
    <div class="shoping">
        
        <div class="row1">
            <!-- 1st box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>Shop deals in Fashion</h1>
                </div>
                <div class="up1">

                    <div class="left-up1"></div>
                    
                    
                    <div class="right-up1"></div>
                    
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Jens under 50$</span>
                    </div>
                    <div class="desc2">
                        <span>Tops under 25$</span>
                    </div>
                </div>
                <div class="down1">
                    <div class="left-down1"></div>
                    <div class="right-down1"></div>
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Jens under 30$</span>
                    </div>
                    <div class="desc2">
                        <span>Tops under 50$</span>
                    </div>
                </div>
                <div class="buy">
                    <a class="shop" href="#">Sell all deals</a>
                </div>
            </div>
             <!-- 2nd box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>Get your game on</h1>
                </div>
                <div class="pic2"></div>
                    
                <div class="buy">
                    <a class="shop" href="http://localhost/project1/product1.php">Shop Now</a>
                </div>
            </div>
             <!--3rd box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>Gaming accessories</h1>
                </div>
                <div class="up1">

                    <div class="left-up3"></div>
                    
                    
                    <div class="right-up3"></div>
                    
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Headphone</span>
                    </div>
                    <div class="desc3">
                        <span>Mouse</span>
                    </div>
                </div>
                <div class="down1">
                    <div class="left-down3"></div>
                    <div class="right-down3"></div>
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Keyboard</span>
                    </div>
                    <div class="desc3">
                        <span>Chair</span>
                    </div>
                </div>
                <div class="buy">
                    <a class="shop" href="#">Buy Now</a>
                </div>
            </div>
             <!-- 4th box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>Toys under $25</h1>
                </div>
               <div class="pic4"></div>
            
                <div class="buy">
                    <a class="shop" href="#">Shop Now</a>
                </div>
            </div>
            <!-- 4box end -->
            
        </div>

        <!-- 2nd row -->

        <div class="row2">
            <!-- 5th box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>Shop for your home essentials</h1>
                </div>
                <div class="up1">

                    <div class="left-up5"></div>
                    
                    
                    <div class="right-up5"></div>
                    
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Cleaning Tool</span>
                    </div>
                    <div class="desc5">
                        <span>Home Decor</span>
                    </div>
                </div>
                <div class="down1">
                    <div class="left-down5"></div>
                    <div class="right-down5"></div>
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Home Storage</span>
                    </div>
                    <div class="desc5">
                        <span>Bedding</span>
                    </div>
                </div>
                <div class="buy">
                    <a class="shop" href="#">Descover more in home</a>
                </div>
            </div>
             <!-- 6th box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>Take your computer</h1>
                </div>
                <div class="pic6"></div>
                <div class="buy6">
                    <a class="shop" href="#">Shop Now</a>
                </div>
            </div>
             <!--7th box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>Shop deals in Gameing</h1>
                </div>
                <div class="pic7"></div>
                <div class="buy">
                    <a class="shop" href="#">Shop Now</a>
                </div>
            </div>
             <!-- 8th box -->

            <div class="box1">
                <div class="box1-heading">
                    <h1>New home arrivals under</h1>
                </div>
                <div class="up1">

                    <div class="left-up8"></div>
                    
                    
                    <div class="right-up8"></div>
                    
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Kitchen & dining</span>
                    </div>
                    <div class="desc2">
                        <span>Decor</span>
                    </div>
                </div>
                <div class="down1">
                    <div class="left-down8"></div>
                    <div class="right-down8"></div>
                </div>
                <div class="up-desc1">
                    <div class="desc1">
                        <span>Home Improve</span>
                    </div>
                    <div class="desc2">
                        <span>bedding & bath</span>
                    </div>
                </div>
                <div class="buy">
                    <a class="shop" href="#">Shop the letest from home</a>
                </div>
            </div>
            <!-- 4box end -->
            
        </div>
        <!-- 3rd row -->
         <div class="scrollable-div">
            <div class="scrollimg1 scroll">
                <img src="web_img/pic25.jpg">
            </div>
            <div class="scrollimg2 scroll">
                <img src="web_img/pic26.jpg">
            </div>
            <div class="scrollimg3 scroll">
                <img src="web_img/pic27.jpg">
            </div>
            <div class="scrollimg4 scroll">
                <img src="web_img/pic28.jpg">
            </div>
            <div class="scrollimg5 scroll">
                <img src="web_img/pic29.jpg">
            </div>
            <div class="scrollimg6 scroll">
                <img src="web_img/pic30.jpg">
            </div>
            <div class="scrollimg7 scroll">
                <img src="web_img/pic32.jpg">
            </div>
            <div class="scrollimg8 scroll">
                <img src="web_img/pic33.jpg">
            </div>
            <div class="scrollimg9 scroll">
                <img src="web_img/pic34.jpg">
            </div>
            <div class="scrollimg10 scroll">
                <img src="web_img/pic35.jpg">
            </div>


         </div>


        
    </div>
   
    





<!-- bottom -->

    <div class="bottom">


       <!-- for logout -->

    <div class="logout-down">
            <div class="line-4">
                 <hr>
            </div>
            <div class="login-heading">
                <h1>See personalized recommendations</h1>
            </div>
            <form  action="main.php" method="POST">
            <button type="submit" class="logout-btn"> Logout</button>
            </form>
            <div class="start-here">
                <span> Do you logout?</span>
                <a class="start" href="http://localhost/project1/main1.php">Start here</a>
            </div>
        </div>
        
       
    
<!-- 
    back to top -->

        <div class="go-top" id="go-up"onclick="goup()">
            <p class="back-top">Back to top</p>
        </div>

    <!-- footer -->

        <div class="under">
            <div class="f1">
                <ul class="link1">
                    <h3>Get to Know Us</h3>
                    <li>Careers</li>
                    <li>Blog</li>
                    <li>About Amazon</li>
                    <li>Investor Relations</li>
                    <li>Amazon Devices</li>
                    <li>Amazon Science</li>
                </ul>
                <ul class="link2">
                    <h3>Make Money with Us</h3>
                    <li>Sell products on Amazon</li>
                    <li>Sell on Amazon Business</li>
                    <li>Sell apps on Amazon</li>
                    <li>Become an Affiliate</li>
                    <li>Advertise Your Products</li>
                    <li>Self-Publish with Us</li>
                    <li>Host an Amazon Hub</li>
                    <li>›See More Make Money</li>
               
                </ul>
                <ul class="link3">
                    <h3>Amazon Payment Products</h3>
                    <li>Amazon Business Card</li>
                    <li>Shop with Points</li>
                    <li>Reload Your Balance</li>
                    <li>Amazon Currency Converter</li>
                
                </ul>
                <ul class="link4">
                    <h3>Let Us Help You</h3>
                    <li>Amazon and COVID-19</li>
                    <li>Your Account</li>
                    <li>Your Orders</li>
                    <li>Shipping Rates & Policies</li>
                    <li>Returns & Replacements</li>
                    <li>Manage Your Content and Devices</li>
                </ul>
            </div>
        </div>
    </div>



    <script src="main2.js"></script>

</body>

</html>