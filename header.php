<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylecart.css">
</head>
<body>
    <header class="header">
        <div class="header_body">
            <a href="index.php" class="logo"><img src="images/Home/logo.png" alt="site logo"  height="auto" width="20%"></a>
            <nav class="navbar">
                <a href="men.php">Products</a>
                <a href="Q&A/ask.php"> Q&A</a>
                <a href="login.php">My Account</a>
            </nav>

            <!-- Adding cart icon      ($conn, "SELECT * FROM `cart`")                           -->
            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `cart` WHERE usersId = '$currentUserId'")or die('query failed');
            $grand_total=0; 
            $row_count = mysqli_num_rows($select_product);
            ?> 
            <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i> <span><sup><?php echo $row_count; ?></sup></span> </a>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>
