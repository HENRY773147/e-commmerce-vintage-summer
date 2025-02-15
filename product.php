<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x.icon" href="images/Home/logo with a border.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Product</title>
    <style>
        .navbar {
            background-color:  #FFCC63;
        }
        .product{
            display: flex;
            justify-content: center;
            flex-direction: row;
            margin: 50px 0;


        }
        
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="navbar">
            <ul class="sidebar">
                <li onclick="hidesidebar()"><a href="index.php"><img src="images/Home/logo.png" alt="main logo" height="auto" width="100%"></a></li>
                <li><a href="men.php">Men</a></li>
                <li><a href="#">Questions?</a></li>
                <li><a href="login.php">My Account</a></li>
                    
            </ul>
            <ul>
                <li><a href="index.php"><img src="images/Home/logo.png" alt="main logo" height="50" width="100%"></a></li><!--this is use in desktop-->
                <li class="hideonmobile"><a href="men.php">Men</a></li>
                <li class="hideonmobile"><a href="#">Questions?</a></li>
                <li class="hideonmobile"><a href="login.php">My Account</a></li>
                <li><a><img src="images/Home/cartIcon .png" alt="cart icon image" height="26" width="26"></a></li>
                <li ><a><img src="images/Home/searchIcon.png" alt="cart icon image" height="26" width="26"></a></li>
                <li class="menu-button" onclick=showsidebar()><a><img src="images\Home\menu_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="menu" height="26" width="26"></a></li>
            </ul>
            </div>

    </header>

    
    <section class="product">
        
        <div class="p_img&review">
            <div class="Product-card">
                <div class="ProductImage"> 
                    <img src="images/mens product/p005.jpg" alt="Tropical Palm shirt image" width="250px" height="300px">
                </div>
            </div>
            <div class="productreviews">
                <div>
                    <div class="cusReview" id="cusReview"><img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> 4.4  </div>
                </div>
            </div>
        </div>
        
    
    </div>
        <div class="product-details">
            <h1>Topical Palm Shirt</h1>
            <p>Availability: In Stock</p>
            <p class="price">Rs. 2800.00 LKR</p>
            <div class="color-options">
                Color:
                <label class="color-option"><input type="radio" name="color" value="white"> White</label>
                <label class="color-option"><input type="radio" name="color" value="black"> Black</label>
                <label class="color-option"><input type="radio" name="color" value="brown"> Brown</label>
                <label class="color-option"><input type="radio" name="color" value="blue"> Blue</label>
            </div>
            <div class="size-options">
                Size:
                <button class="size-option">S</button>
                <button class="size-option">M</button>
                <button class="size-option">L</button>
                <button class="size-option">XL</button>
                <button class="size-option">XXL</button>
            </div>
            <button class="add-to-cart">Add to Cart</button>
            <p><a href="#">Size Chart</a></p>
        </div>
    </section>



    <section class="TopSP"> 
        <section class="h2">
            <h2>Top Selling Product</h2>
        </section> 
        <div class="item-wrap">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/mens product/p005.jpg" alt="Tropical Palm Shirt">
                </div>
                <div class="product-name">Tropical Palm shirt</div>
                <div class="product-price">2800.00 LKR</div>
                <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="images/women product/p003.jpg" alt="a T-shirt with cute panda design.">
                </div>
                <div class="product-name">Cute Panda T-shirt</div>
                <div class="product-price">2800.00 LKR</div>
                <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="images/mens product/p004.jpg" alt="">
                </div>
                <div class="product-name">Black MonaLisa T-shirt</div>
                <div class="product-price">2800.00 LKR</div>
                <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="images/women product/p013.jpg" alt=" a blue blouse">
                </div>
                <div class="wording">
                <div class="product-name">Blue Blouse</div>
                <div class="product-price">2600.00 LKR</div>
                <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div></div>
            </div>
        </div>

        <div id="viewAllBtn" class="btn1" >
            <p>View all</p>
         </div>     
    
    </section> 
</body>
</html>