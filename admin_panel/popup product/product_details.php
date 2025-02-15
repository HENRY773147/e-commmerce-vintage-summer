<?php
require 'dbconnect.php';

$product_id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM products WHERE product_id = ?');
$stmt->execute([$product_id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2><?php echo $product['product_name']; ?></h2>
<img src="<?php echo $product['product_image']; ?>" alt="<?php echo $product['product_name']; ?>" style="width:100%;">
<p><?php echo $product['product_desc']; ?></p>
<p>Price: $<?php echo $product['price']; ?></p>
<p>Category ID: <?php echo $product['category_id']; ?></p>
<p>Uploaded Date: <?php echo $product['uploaded_date']; ?></p>
