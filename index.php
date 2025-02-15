<?php
SESSION_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", maximum-scale="1.0", minimum-scale="1.0">
    <link rel="icon" type="images/x.icon" href="images/Home/logo with a border.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Vintage summer
    </title>
</head>


<body>


<?php
// if(isset($_SESSION["userName"])){
//    echo  $_SESSION["userName"].'!';
// }else 
//   echo ' user '
 ?>
    
    <div class="background1">
        <header>
            <nav>
                <div class="navbar">
                <ul class="sidebar">
                    <li onclick="hidesidebar()"><a><img src="images/Home/logo.png" alt="main logo" height="auto" width="100%"></a></li>
                    <li><a href="men.php">Products</a></li>
                    <li><a href="Q&A/ask.php">Questions?</a></li>
                    <li><a href="dashboard/profile.php">My Account</a></li>
                </ul>
                <ul>
                    <li><img src="images/Home/logo.png" alt="main logo" height="50" width="100%"></li><!--this is use in desktop-->
                    <li class="hideonmobile"><a href="men.php">Products</a></li>
                    <li class="hideonmobile"><a href="Q&A/ask.php">Questions?</a></li>
                    <li class="hideonmobile"><a href="dashboard/profile.php">My Account</a></li>
                    <li><a href="cart.php"><img src="images/Home/cartIcon .png" alt="cart icon image" height="26" width="26"></a></li> 
                    
                    <li ><a><img src="images/Home/searchIcon.png" alt="cart icon image" height="26" width="26"></a></li>
                    <li class="menu-button" onclick=showsidebar()><a><img src="images\Home\menu_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="menu" height="26" width="26"></a></li>
                </ul>
                
                <?php
              //  $select_product = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
           // $row_count = mysqli_num_rows($select_product);
            ?> 
               <div id="menu-btn" class="fas fa-bars"></div>
        </header>
        <section id="herosection">    
            <main>
                    <div>
                        <div class="heroBG"></div>
                        <img src="images/Home/Hero.png" id="hero" alt="Asian girl image" width= "508px" height="770px">
                    </div>
                    <div id="heroquote">
                        <h1 >“Elevate Your Style:<br> Where Fashion<br> Meets Function”</h1>
                        <h6>Hello! <?php
                        if(!$_SESSION){
                            echo" ";
                        }else{
                        echo $_SESSION["userUid"];}
                       
                         ?></h6>
                    </div>

            </main>
        </section>    

    </div>
   <button> <p><a href="admin_panel/index.php">!!!</a></p></button>
        
    <section >
        <div id="newArrivelsBG">
            <div id="newArrivelsBG2"></div>
            <div id="newArrivelsBanner">
                <img src="images/Home/Pink Elegant New Arrivals Fashion Brand Website Homepage Banner.jpg" alt="new Arrivals banner" width="100%" height="80%">
            </div>
        </div> 
    </section>
    <section id="downquotes">
        <div class="downquote1">
            <p>We're here to make you happy and<br>comfortable.</p><br>
            
        </div>
        <div class="downquote2">
            <p>Life is too precious to settle for anything less than pure comfort!</p>
        </div>
        
        <div id="shopNowBtn" class="btn1" >
            <p> <a href="men.php">Shop now</a></p>
         </div>  
    </section>
                        

    
    <footer>
        <div>
            <img src="images/Home/footer icons.jpg" alt="footer icon images" width="100%" height="100%">
        </div>
        <div id="extrPages">
            &copy; </a><div class="extrPages"><a href="index.html">. Vintage Summer</a></div>
            <div class="extrPages"><a href="refund policy.html">. Refund policy</a></div>
            <div class="extrPages"><a href="privacy policy.html"> . Privacy policy</a></div>
            <div class="extrPages"><a href="Terms of service.html">. Terms of service</a></div>
        </div>
        <div>
            <div class="sm">
                <img src="images/Home/instagram.png" alt="instagram icon"  width="40px" height="40px"  >
            </div>
            <div class="sm">
                <img src="images/Home/facebook.png" alt="instagram icon" width="40px" height="40px"  >
            </div>
            </div>
            <div class="sm">
                <img src="images/Home/whatsapp.png" alt="instagram icon" width="40px" height="40px"  >
            </div>
            </div>
        </div>
        
    </footer>

    <script src="script.js"></script>
</body>
</html>


