<?php
session_start();
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['delivered_to'];
    $address = $_POST['deliver_address'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $postal = $_POST['postal_code'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $payment_method = $_POST['payment_method'];
   
    $current_user_id  = $_POST['usersId']; // Ensure this value is being passed correctly

    // Fetch cart items for the current user
    
$currentUserId = $_SESSION['usersId']; // Assuming you have a session with the current user's ID
$cart_items_query = "SELECT c.*, p.product_name, p.product_image, p.price 
                     FROM cart c 
                     JOIN product p ON c.product_id = p.id 
                     WHERE c.usersId = ?";
$stmt = $conn->prepare($cart_items_query);
$stmt->bind_param("i", $currentUserId);
$stmt->execute();
$cart_items_result = $stmt->get_result();
$cart_items = $cart_items_result->fetch_all(MYSQLI_ASSOC);




    // Insert order data into order table
    $insert_order = "INSERT INTO orders (delivered_to, deliver_address, city, postal_code, phone, country, payment_method, usersId, email) VALUES ('$firstname', '$address', '$city', '$postal', '$phone', '$country', '$payment_method', '$current_user_id', '$email')";
    if (mysqli_query($conn, $insert_order)) {
        $order_id = mysqli_insert_id($conn);

      // Insert order details into order_details table
      foreach ($cart_items as $item) {
        $product_name = $item['product_name'];
        $product_price = $item['price'];
        $product_image = $item['product_image'];
        $insert_order_details = "INSERT INTO order_details (order_id, product_name, product_price, product_image) VALUES ('$order_id', '$product_name', '$product_price', '$product_image')";
        mysqli_query($conn, $insert_order_details);
    }

        echo "<script>alert('Order placed successfully!');</script>";
        header("Location: dashboard/userdashboard.php");
        exit();
    } else {
    echo "<script>alert('Error placing order.');</script>";         
}
} else {
    $product_name = isset($_GET['product_name']) ? $_GET['product_name'] : '';
    $product_price = isset($_GET['product_price']) ? $_GET['product_price'] : '';
    $product_image = isset($_GET['product_image']) ? $_GET['product_image'] : '';
}

   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="checkout2.css">
    <link rel="stylesheet" href="checkout22.css">
    <script src="script22.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="navbar">
                <ul class="sidebar">
                    <li onclick="hidesidebar()"><a><img src="i class="bi bi-shop" alt="main logo" height="auto" width="100%"></a></i></li>
                </ul>
                <ul>
                    <li><a href="index.php"><img src="images/Home/logo.png" alt="main logo" height="50" width="100%"></a></li><!--this is use in desktop-->
                    <li class="hideonmobile"><a href="dashboard/userdashboard.php">My Account</a></li>
                    <li><a><img src="images/Home/searchIcon.png" alt="cart icon image" height="26" width="26"></a></li>
                </ul>
            </div>
        </nav>
    </header><br><br>

    <div class="checkout-container"> 
        <!-- Left Section -->
        <div class="checkout-form">
            <h3>Checkout</h3>
            <form action="checkout.php" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email" required>

                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="delivered_to" placeholder="First Name" required>

                <label for="country">Country/Region</label>
                <select id="country" name="country" required>
                    <option value="Africa">Africa</option>
                    <option value="America">America</option>
                    <option value="Brazil">Brazil</option>
                    <option value="China">China</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Hungaria">Hangaria</option>
                    <option value="Indonisia">Indonisia</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Korea">Korea</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Norway">Norway</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Thailand">Thailand</option>
                    <option value="The United Arab Emirates">The United Arab Emirates</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukrain">Ukrain</option>
                    <option value="Vietnam">Vietnam</option>
                </select>

                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="City" required>

                <label for="address">Address</label>
                <input type="text" id="address" name="deliver_address" placeholder="Address" required>

                <label for="postal">Postal Code</label>
                <input type="text" id="postal" name="postal_code" placeholder="Postal" required>

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Phone" required>

                <p>Payment method</p><br>
                <select name="payment_method" id="payment_method" required>
                    <option value="debit">Pay with Debit or Credit card</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select><br><br>
                <p>If you wish to confirm order press button below.......</p><br>
                
                
   
    <button type="submit" id="payNow">Order Now</button>
</form>
    <!--button as a type-->
                <!-- Popup Box -->
                <div class="popup-overlay" id="popupOverlay"></div>
                <div class="popup" id="popupBox">
                    <h3>Order Successful🥳</h3>
                    <button id="closePopup">Close</button>
        </div>
                <!-- Hidden fields to pass product details -->
                <?php
                foreach ($product_names as $index => $product_name) {
                    $product_price = $product_prices[$index];
                    $product_image = $product_images[$index];
                    ?>
                <input type="hidden" name="product_name[]" value="<?php echo htmlspecialchars($_GET['product_name']); ?>">
                <input type="hidden" name="product_price[]" value="<?php echo htmlspecialchars($_GET['product_price']); ?>">
                <input type="hidden" name="product_image[]" value="<?php echo htmlspecialchars($_GET['product_image']); ?>">
                <?php
                }
                ?>
                <input type="hidden" name="usersId" value="<?php echo htmlspecialchars($_GET['usersId']); ?>">
            </form>
        </div>

        <!-- Right Section -->
        <section class="checkout-form">
            <h3>Order Summary</h3>
            <table class="order-summary-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            if (isset($_GET['product_name']) && isset($_GET['product_price']) && isset($_GET['product_image'])) {
                $product_names = $_GET['product_name'];
               $product_prices = $_GET['product_price'];
                $product_images = $_GET['product_image'];
            }
                if (!empty($product_names)) {
                    foreach ($product_names as $index => $product_name) {
                        $product_price = $product_prices[$index];
                        $product_image = $product_images[$index];
                
                    ?>
                   
                        <tr>
                        <td><img src="admin_panel/uploads/<?php echo htmlspecialchars($product_image); ?>" alt="<?php echo htmlspecialchars($product_name); ?>" width="50%" height="50%"></td>
                        <td><?php echo htmlspecialchars($product_name); ?></td>
                        <td>Rs. <?php echo number_format($product_price); ?> LKR</td>
                        </tr>
                        <?php
                }
            } else {
                echo "<tr><td colspan='3'>No products in the cart.</td></tr>";
            }
            ?>
                    
                </tbody>
            </table>
        </section>
    </div>
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
    
</body>
</html>