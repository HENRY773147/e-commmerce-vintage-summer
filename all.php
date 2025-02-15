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
    <title>All items</title>
</head>
<body>
    <header>
       <nav class="navbar">
            <ul class="sidebar">
                    <li onclick="hidesidebar()"><a ><img src="images/Home/logo.png" alt="main logo" height="auto" width="100%"></a></li>
                    <li><a href="men.php">Men</a></li>
                    <li><a href="woman.php">Woman</a></li>
                    <li><a href="#">Questions?</a></li>
                    <li><a href="login.php">My Account</a></li>
                        
                </ul>
                <ul>
                    <li><a href="index.php"><img src="images/Home/logo.png" alt="main logo" height="50" width="100%"></a></li><!--this is use in desktop-->
                    <li class="hideonmobile"><a href="men.php">Men</a></li>
                    <li class="hideonmobile"><a href="woman.php">Woman</a></li>
                    <li class="hideonmobile"><a href="#">Questions?</a></li>
                    <li class="hideonmobile"><a href="login.php">My Account</a></li>
                    <li><a href="cart.php"><img src="images/Home/cartIcon .png" alt="cart icon image" height="26" width="26"></a></li>
                    <li ><a><img src="images/Home/searchIcon.png" alt="cart icon image" height="26" width="26"></a></li>
                    <li class="menu-button" onclick=showsidebar()><a><img src="images\Home\menu_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="menu" height="26" width="26"></a></li>
                </ul>
        </nav>
    </header>
    <section class="s1">
            <div class="allPeoductsH2">
                <h2>All Products</h2>
            </div>
            <!-- Product Grid -->
            <div class="product-grid">
                <div class="product-item">
                    <img src="images/mens product/p001.jpg" alt="Long sleeve T-shirt image" width="200" height="300">
                    <div class="product-name">Long sleeve</div>
                    <div class="product-price">3000.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                
                <div class="product-item">
                    <img src="images/mens product/p002.jpg" alt="Over sized T-shirt image" width="200" height="300">
                    <div class="product-name">Over sized</div>
                    <div class="product-price">2900.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p003.jpg" alt="Short sleeve T-shirt image" width="200" height="300">
                    <div class="product-name">Short sleeve</div>
                    <div class="product-price">2500.00 LKR</div>
                    <div class="cusReview"> | 4.5 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                
                </div>

                <div class="product-item">
                    <img src="images/mens product/p004.jpg" alt="Monalisa T-shirt image" width="200" height="300">
                    <div class="product-name">Monalisa</div>
                    <div class="product-price">2000.00 LKR</div>
                    <div class="cusReview"> | 4.6 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p005.jpg" alt="Hawaiian Beach T-shirt image" width="200" height="300">
                    <div class="product-name">Hawaiian Beach</div>
                    <div class="product-price">3500.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p006.jpg" alt="Hawaiian Beach Shirt image" width="200" height="300">
                    <div class="product-name">Hawaiian Beach</div>
                    <div class="product-price">3500.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p007.jpg" alt="Summer casual Shirt Image" width="200" height="300">
                    <div class="product-name">Summer casual</div>
                    <div class="product-price">4000.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p008.jpg" alt="Striped casual Shirt Image" width="200" height="300">
                    <div class="product-name">Striped casual</div>
                    <div class="product-price">3500.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/mens product/p009.jpg" alt="Solid casual/white Shirt Image" width="200" height="300">
                    <div class="product-name">Solid casual/white</div>
                    <div class="product-price">4750.00 LKR</div>
                    <div class="cusReview"> | 3.9 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                
                <div class="product-item">
                    <img src="images/mens product/p010.jpg" alt="Solid casual/black shirt Image" width="200" height="300">
                    <div class="product-name">Solid casual/black</div>
                    <div class="product-price">4750.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p011.jpg" alt="GOlf Polo collaerd shirt Image" width="200" height="300">
                    <div class="product-name">Golf Polo</div>
                    <div class="product-price">1850.00 LKR</div>
                    <div class="cusReview"> | 4.2 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p012.jpg" alt="Mens Cargo Trousers Image" width="200" height="300">
                    <div class="product-name">Mens Cargo</div>
                    <div class="product-price">4500.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p013.jpg" alt="Mens Cargo/Black Trousers Image" width="200" height="300">
                    <div class="product-name">Mens Cargo/Black</div>
                    <div class="product-price">3500.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p014.jpg" alt="Printed Shirt Image" width="200" height="300">
                    <div class="product-name">Printed</div>
                    <div class="product-price">1500.00 LKR</div>
                    <div class="cusReview"> | 4.6<img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/mens product/p015.jpg" alt="Slim City/Blue Trousers Image" width="200" height="300">
                    <div class="product-name">Slim City/Blue</div>
                    <div class="product-price">1990.00 LKR</div>
                    <div class="cusReview"> | 4.5 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/mens product/p016.jpg" alt="Mens Jogger Trousers Image" width="200" height="300">
                    <div class="product-name">Mens Jogger</div>
                    <div class="product-price">2100.00 LKR</div>
                    <div class="cusReview"> | 4.2 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                
                <div class="product-item">
                    <img src="images/mens product/p017.jpg" alt="Slim city/ash Trousers Image" width="200" height="300">
                    <div class="product-name">Slim city/ash</div>
                    <div class="product-price">1990.00 LKR</div>
                    <div class="cusReview"> | 4.5 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p001.jpg" alt="Daisy Print T Overr sized T-shirt Image" width="200" height="300">
                    <div class="product-name">Daisy Print T</div>
                    <div class="product-price">2100.00 LKR</div>
                    <div class="cusReview"> | 4.5 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p002.jpg" alt="PANDAGO T-shirt Image" width="200" height="300">
                    <div class="product-name">PANDAGO</div>
                    <div class="product-price">1990.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p003.jpg" alt="Kawaii Fairyland T-shirt Image" width="200" height="300">
                    <div class="product-name">Kawaii Fairyland</div>
                    <div class="product-price">1900.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p004.jpg" alt="Retro Knitted Crop top Image" width="200" height="300">
                    <div class="product-name">Retro Knitted</div>
                    <div class="product-price">2750.00 LKR</div>
                    <div class="cusReview"> | 4.2 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p005.jpg" alt="Summer Fairy off Shoulder frock Image" width="200" height="300">
                    <div class="product-name">Summer Fairy</div>
                    <div class="product-price">4000.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p006.jpg" alt="Summer Fairy frock Image" width="200" height="300">
                    <div class="product-name">Summer Fairy</div>
                    <div class="product-price">3500.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                
                <div class="product-item">
                    <img src="images/women product/p007.jpg" alt="Summer Fairy Frock Image" width="200" height="300">
                    <div class="product-name">Summer Fairy</div>
                    <div class="product-price">3500.00 LKR</div>
                    <div class="cusReview"> | 4.2 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p008.jpg" alt="Toddler's cute Baby dress Image" width="200" height="300">
                    <div class="product-name">Toddler's cute</div>
                    <div class="product-price">1750.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p009.jpg" alt="Painted Jean Denim Image" width="200" height="300">
                    <div class="product-name">Painted Jean</div>
                    <div class="product-price">5500.00 LKR</div>
                    <div class="cusReview"> | 4.5 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p010.jpg" alt="Painted Jean Denim Image" width="200" height="300">
                    <div class="product-name">Painted Jean</div>
                    <div class="product-price">6000.00 LKR</div>
                    <div class="cusReview"> | 4.6 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p011.jpg" alt="Wide leg jean Denim Image" width="200" height="300">
                    <div class="product-name">Wide leg jean</div>
                    <div class="product-price">4900.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p012.jpg" alt="Vintage high waist Denim Image" width="200" height="300">
                    <div class="product-name">Vintage high waist</div>
                    <div class="product-price">3800.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>

                <div class="product-item">
                    <img src="images/women product/p013.jpg" alt="Puff sleeve Crop top Image" width="200" height="300">
                    <div class="product-name">Puff sleeve</div>
                    <div class="product-price">1800.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p014.jpg" alt="Ditsy floral Blouse Image" width="200" height="300">
                    <div class="product-name">Ditsy floral</div>
                    <div class="product-price">2500.00 LKR</div>
                    <div class="cusReview"> | 4.5 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p015.jpg" alt="Peplum Top Blouse Image" width="200" height="300">
                    <div class="product-name">Peplum Top</div>
                    <div class="product-price">1900.00 LKR</div>
                    <div class="cusReview"> | 4.2 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p016.jpg" alt="Puff sleeve Blouse Image" width="200" height="300">
                    <div class="product-name">Puff sleeve</div>
                    <div class="product-price">2000.00 LKR</div>
                    <div class="cusReview"> | 4.3 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p017.jpg" alt="Pleated mini skirt Image" width="200" height="300">
                    <div class="product-name">Pleated mini </div>
                    <div class="product-price">1450.00 LKR</div>
                    <div class="cusReview"> | 4.6 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p018.jpg" alt="Florette denim skirt/Short Image" width="200" height="300">
                    <div class="product-name">Florette</div>
                    <div class="product-price">2100.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p019.jpg" alt="Ludlow denim skirt/Short Image" width="200" height="300">
                    <div class="product-name">Ludlow</div>
                    <div class="product-price">2900.00 LKR</div>
                    <div class="cusReview"> | 4.6 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
                <div class="product-item">
                    <img src="images/women product/p020.png" alt="Full dress Crop Top and Denim skirt Image" width="200" height="300">
                    <div class="product-name">Full dress </div>
                    <div class="product-price">4200.00 LKR</div>
                    <div class="cusReview"> | 4.4 <img src="images/Home/star_icon.png" alt="star icon" height="14" width="14"> </div>
                </div>
            </div>
    </section>
    <footer>
        <div>
            <img src="images/Home/footer icons.jpg" alt="footer icon images" width="100%" height="100%" >
        </div>
        <div id="extrPages">
            &copy; <a><div class="extrPages"><a href="index.html">. Vintage Summer</a></div>
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