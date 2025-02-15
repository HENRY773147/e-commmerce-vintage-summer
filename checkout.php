<?php
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
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $current_user_id  = $_POST['usersId']; // Ensure this value is being passed correctly

    // Insert order data into order table
    $insert_order = "INSERT INTO orders (delivered_to, deliver_address, city, postal_code, phone, country, payment_method, usersId, email) VALUES ('$firstname', '$address', '$city', '$postal', '$phone', '$country', '$payment_method', '$current_user_id', '$email')";
    if (mysqli_query($conn, $insert_order)) {
        $order_id = mysqli_insert_id($conn);

        // Insert order details into order_details table
        $insert_order_details = "INSERT INTO order_details (order_id, product_name, product_price, product_image) VALUES ('$order_id', '$product_name', '$product_price', '$product_image')";
        mysqli_query($conn, $insert_order_details);

        echo "<script>alert('Order placed successfully!');</script>";
        header("Location: dashboard/userdashboard.php");
        exit();
    } else {
        echo "<script>alert('Error placing order.');</script>";         
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            box-sizing: border-box;
        }

        .checkout-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 20px auto;
        }

        .checkout-form, .order-summary {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 48%;
        }

        h3 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #333;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color:#F58340;
            color: #fff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #ffd700;
        }

        .order-summary .product {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .order-summary .product img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .order-summary .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        /* Popup Styles */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background-color:  #fff;
            border: 1px solid #FFCC63;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            z-index: 1000;
            display: none;
        }

        .popup h3 {
            margin-bottom: 20px;
        }
    
        .popup button {
            background-color: #F58340;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button:hover {
            background-color:  #FFCC63;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #F58340;
            z-index: 999;
            display: none;
        }

    /* Overlay fade-in animation */
    @keyframes overlayFadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
        animation: overlayFadeIn 0.5s ease-out forwards;
    }
    /* order summary */
    .order-summary .product {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .order-summary .product img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .order-summary .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
    </style>
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
                
                <button type="submit" id="payNow">Order Now</button>    <!--button as a type-->
                <!-- Popup Box -->
                <div class="popup-overlay" id="popupOverlay"></div>
                <div class="popup" id="popupBox">
                    <h3>Order Successful🥳</h3>
                    <button id="closePopup">Close</button>
        </div>
                <!-- Hidden fields to pass product details -->
                <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($_GET['product_name']); ?>">
                <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($_GET['product_price']); ?>">
                <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($_GET['product_image']); ?>">
                <input type="hidden" name="usersId" value="<?php echo htmlspecialchars($_GET['usersId']); ?>">
            </form>
        </div>

        <!-- Right Section -->
    <div class="checkout-form">
        <h3>Order Summary</h3>
        <?php
        if (isset($_GET['product_name']) && isset($_GET['product_price']) && isset($_GET['product_image'])) {
            $product_name = htmlspecialchars($_GET['product_name']);
            $product_price = htmlspecialchars($_GET['product_price']);
            $product_image = htmlspecialchars($_GET['product_image']);
        ?>
        <div class="product">
            <img src="admin_panel/uploads/<?php echo htmlspecialchars($product_image); ?>" alt="<?php echo htmlspecialchars($product_name);?>" width="50%" height="50%">
            <div>
                <div class="product-name"><?php echo htmlspecialchars($product_name); ?></div><br>
                <div class="product-price">Rs. <?php echo htmlspecialchars($product_price); ?> LKR</div><br>
                <div class="product-size">Size : 
                    <select name="product_size" id="product_size" required>
                        <option value="Extra Small">XS</option>
                        <option value="Small">S</option>
                        <option value="Medium">M</option>
                        <option value="Large">L</option>
                        <option value="Extra Large">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                </div>
            </div>
        </div><br>
        <div class="summary-item"><strong>Sub total </strong>   :   Rs. <?php echo htmlspecialchars($product_price); ?> LKR</div><br>
        <div class="summary-item"><strong>Shipping</strong>  :   Free Shipping</div><br>
        <hr><br>
        <div class="summary-item"><strong>Total</strong>      Rs. <?php echo htmlspecialchars($product_price); ?> LKR</div>
        <hr><hr>
        <?php
        } else {
            echo "<p>No product details available.</p>";
        }
        ?>
    </div>
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
    <script>
        const decrementBtn = document.querySelector('.smallbtns:first-of-type');
        const incrementBtn = document.querySelector('.smallbtns:last-of-type');
        const textbox = document.querySelector('.textbox');

        // Event listener for decrement button
        decrementBtn.addEventListener('click', () => {
            let currentValue = parseInt(textbox.textContent.trim(), 10);
            textbox.textContent = currentValue - 1;
        });

        // Event listener for increment button
        incrementBtn.addEventListener('click', () => {
            let currentValue = parseInt(textbox.textContent.trim(), 10);
            textbox.textContent = currentValue + 1;
        });
        // Function to show the popup
        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'block';
            document.getElementById('popupBox').style.display = 'block';
        }

        // Function to hide the popup
        function hidePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.getElementById('popupBox').style.display = 'none';
        }

        // Event listener for the close button
        document.getElementById('closePopup').addEventListener('click', hidePopup);

        // Example: Show the popup when the form is submitted
        document.getElementById('payNow').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission for demonstration
            showPopup();
        });
        function showsidebar(){//onclick on the three lines sidebar open
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
        }
        function hidesidebar(){//onclick on the cross reture back
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
        }
    </script>
</body>
</html>