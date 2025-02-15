<?php
session_start(); // Start the session
?>
<!--form submission-->
<?php
include 'dbconnect.php';

if (isset($_POST['buy_now'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_id = $_POST['product_id'];
    $current_user_id = $_POST['usersId'];
    
    
   header("Location: checkout.php?product_name=" . urlencode($product_name) . "&product_price=" . urlencode($product_price) . "&product_image=" . urlencode($product_image) . "&product_id=" . urlencode($product_id)."&usersId=" . urlencode($current_user_id));
    exit();
}


$select_products = mysqli_query($conn, "SELECT * FROM `product`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/Home/logo with a border.png">
    <link rel="stylesheet" href="stylecart.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Products</title>
</head>
<body>
<header>
       <nav class="navbar">
            <ul class="sidebar">
                    <li onclick="hidesidebar()"><a ><img src="images/Home/logo.png" alt="main logo" height="auto" width="100%"></a></li>
                    <li><a href="men.php">Products</a></li>
                    <li><a href="Q&A/ask.php">Questions?</a></li>
                    <li><a href="userdashboard.php">My Account</a></li>
                        
                </ul>
                <ul>
                    <li><a href="index.php"><img src="images/Home/logo.png" alt="main logo" height="50" width="100%"></a></li><!--this is use in desktop-->
                    <li class="hideonmobile"><a href="men.php">Products</a></li>
                    <li class="hideonmobile"><a href="Q&A/ask.php">Questions?</a></li>
                    <li class="hideonmobile"><a href="dashboard/userdashboard.php">My Account</a></li>
                    <li><a href="cart.php"><img src="images/Home/cartIcon .png" alt="cart icon image" height="26" width="26"></a></li>
                    <li ><a><img src="images/Home/searchIcon.png" alt="cart icon image" height="26" width="26"></a></li>
                    <li class="menu-button" onclick=showsidebar()><a><img src="images\Home\menu_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="menu" height="26" width="26"></a></li>
                </ul>
        </nav>
    </header> 
    <?php //include 'header.php';?>
    <section class="s1">
        <div class="allProductsH2">
           <center><h2> Products</h2></center> 
             
            
        </div>
        <!-- Product Grid -->
        <?php
        include 'dbconnect.php';

        if (isset($_POST['add_to_cart'])) {
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_image = $_POST['product_image'];
            $product_quantity = 1;
            $product_id = $_POST['product_id']; // Assuming you have a product_id from the form

            // Check if the user is logged in and usersId is set in the session
            if (isset($_SESSION['usersId'])) {
                $current_user_id = $_SESSION['usersId'];

                // Check if product_id exists in the product table
                $check_product_query = $conn->prepare("SELECT * FROM `product` WHERE product_id = ?");
                $check_product_query->bind_param("i", $product_id);
                $check_product_query->execute();
                $result = $check_product_query->get_result();

                if ($result->num_rows > 0) {
                    // product_id exists, proceed with the insert
                    $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE product_name = ? AND product_id = ? AND usersId = ?");
                    $select_cart->bind_param("sii", $product_name, $product_id, $current_user_id);
                    $select_cart->execute();
                    $cart_result = $select_cart->get_result();

                    if ($cart_result->num_rows > 0) {
                        $display_message[] = '<p class="message">Product already added to cart</p>';
                    } else {
                        $insert_product = $conn->prepare("INSERT INTO `cart` (product_name, price, product_image, quantity, product_id, usersId) VALUES (?, ?, ?, ?, ?, ?)");
                        $insert_product->bind_param("ssdiii", $product_name, $product_price, $product_image, $product_quantity, $product_id, $current_user_id);
                        $insert_product->execute();
                        $display_message[] = '<p class="message">Product added to cart successfully</p>';
                    }
                } else {
                    // product_id does not exist, handle the error
                    $display_message[] = '<p class="message">Invalid product_id</p>';
                }
            } else {
                // Handle the case where the user is not logged in
                $display_message[] = '<p class="message">Please log in to add products to your cart</p>';
            }
        }
        ?>

        <!-- displaying product added or not msg -->
        <div class="container">
            <?php
            if (isset($display_message)) {
                foreach ($display_message as $message) {
                    echo '<div class="display_message"><span>' . $message . '</span>
                    <i class="fas fa-times cross" onclick="this.parentElement.style.display=`none`;"></i>
                    </div>';
                }
            }
            ?>
            <section class="products">
                
                <div class="product_container">
                    <!-- php code to display products -->
                    <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM `product`");
                    if (mysqli_num_rows($select_products) > 0) {
                        while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                            if ($fetch_product) {
                                ?>
                            <form action="" method="post">
                                <div class="edit_form">
                                <img src="admin_panel/uploads/<?php echo htmlspecialchars($fetch_product['product_image']); ?>" alt="">
                                <h3><?php echo htmlspecialchars($fetch_product['product_name']); ?></h3>
                                <div class="price">Price: LKR<?php echo htmlspecialchars($fetch_product['price']); ?></div>
                                <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($fetch_product['product_name']); ?>">
                                <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($fetch_product['price']); ?>">
                                <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($fetch_product['product_image']); ?>">
                                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($fetch_product['product_id']); ?>">
                                <input type="hidden" name="usersId" value="<?php echo htmlspecialchars($_SESSION['usersId']); ?>">
                                <input type="submit" class="submit_btn cart_btn" value="Add to Cart" name="add_to_cart">
                                <input type="submit" class="submit_btn buy_btn" value="Buy Now" name="buy_now"> 
                                </div>
                            </form>
                        <?php
                            }
                        }
                    } else {
                        echo "<div class='empty_text message'>No products available</div>";
                    }
                    ?>
                            

                </div>


            </section>
        </div>
        <script src="script.js"></script>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style.css"> 
        <?php
        // Removed the unused code block
        ?>
    </section>
    <?php include 'footer.php';?>
    </section>
    <script src="script.js"></script>
    
</body>
</html>