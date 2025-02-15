<?php
session_start();
$currentUserId = $_SESSION['usersId'];




@include 'dbconnect.php';
//update
if(isset($_POST['update_cart_quantity'])){
    $update_value = $_POST['update_quantity'];
    //update value
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE product_id = '$update_id'");
    if($update_quantity_query){
       header('location:cart.php');
    };
 };
 //remove items from the cart
 if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE product_id = '$remove_id' AND usersId = '$currentUserId'");
    header('location:cart.php');
 };
 //delete all items
 if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE usersId = '$currentUserId'");
    header('location:cart.php');
 }
?>
<!-- 3rd add header -->
<?php include 'header.php';?> 

    <div class="container">
        <section class="shopping_cart">
            <h1 class="heading">My Cart</h1>
<table>
     <!--($conn, "SELECT * FROM `cart` WHERE usersId = '$currentUserId'");-->

    <?php
$select_cart_products = mysqli_query($conn, "SELECT c.*, p.product_name, p.product_image, p.price 
                                                         FROM `cart` c 
                                                         JOIN `product` p ON c.product_id = p.product_id 
                                                         WHERE c.usersId = '$currentUserId'");




$grand_total=0;
$num=1;
if(mysqli_num_rows($select_cart_products) > 0){
    echo "  <thead>
    <th>Sl No</th>
    <th>Product Name</th>
    <th>Product Image</th>
    <th>Product Price</th>
    <th>Product Quantity</th>
    <th>Total Price</th>
    <th>Action</th>
</thead>
<tbody>";
   while($fetch_cart_product = mysqli_fetch_assoc($select_cart_products)){
    ?>
    
        <tr>
            <td><?php echo $num; ?></td>
            <td><?php echo $fetch_cart_product['product_name']; ?></td>
            <td> <img src="admin_panel/uploads/<?php echo $fetch_cart_product['product_image']; ?>"  alt="Product Image"style="width: 100px; height: auto;"> </td>
            <td>LKR<?php echo number_format($fetch_cart_product['price']); ?></td>
            <td>
            <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart_product['product_id']; ?>" >
                  <div class="quantity_box">
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart_product['quantity']; ?>" >
                  <input type="submit" value="update" name="update_cart_quantity" class="update_quantity">
                  </div>
                </form>   
            </td>
            <td>LKR<?php echo $sub_total = number_format($fetch_cart_product['price'] * $fetch_cart_product['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart_product['product_id']; ?>" onclick="return confirm('remove item from cart?')" 
            class="delete_btn"> 
            <i class="fas fa-trash"></i> Remove</a></td>
        </tr>
       
<?php
$grand_total += ($fetch_cart_product['price'] * $fetch_cart_product['quantity']);
$num++;
   }
}else{
    echo "<div class='empty_text message'>Cart is empty</div>";
}
?>
    </tbody>
</table>

<!--table eke yata tika-->
<?php
if($grand_total>0){
    echo "<div class='table_bottom'><a href='product.php' class='bottom_btn'>Continue Shopping</a>";
    ?>
    <h3 class='bottom_btn'>Grand Total : LKR<span><?php echo number_format($grand_total)?> </span></h3>

<a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete_all_btn">
             <i class="fas fa-trash"></i>Delete All</a>
             <?php 
  }  else{
    echo "";
}

?>

</section>
    <center>
        <div class='Checkout_btn'>
            <?php if (mysqli_num_rows($select_cart_products) > 0): ?>
                <form action="checkout2.php" method="get">
                    <?php
                    // Pass cart data through URL
                    mysqli_data_seek($select_cart_products, 0); // Reset the result pointer
                    while ($fetch_cart_product = mysqli_fetch_assoc($select_cart_products)) {
                        ?>
                        <input type="hidden" name="product_name[]" value="<?php echo $fetch_cart_product['product_name']; ?>">
                        <input type="hidden" name="product_price[]" value="<?php echo $fetch_cart_product['price']; ?>">
                        <input type="hidden" name="product_image[]" value="<?php echo $fetch_cart_product['product_image']; ?>">
                        <?php
                    }
                    ?>
                    <button type="submit" class="btn">Checkout</button>
    </form>
   <?php endif; ?>
    </div>
    </center> 
</div>
<?php include 'footer.php';?>
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">

</body>
</html>