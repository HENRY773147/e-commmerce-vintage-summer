<?php
require 'dbconnect.php';

$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product): ?>
        <li>
            <h2><?php echo $product['product_name']; ?></h2>
            <p>Price: $<?php echo $product['price']; ?></p>
            <button class="view-details" data-id="<?php echo $product['product_id']; ?>">View Details</button>
        </li>
        <?php endforeach; ?>
    </ul>

    <!-- Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.view-details').click(function() {
                var productId = $(this).data('id');
                $.ajax({
                    url: 'product_details.php',
                    type: 'GET',
                    data: { id: productId },
                    success: function(response) {
                        $('#modal-body').html(response);
                        $('#productModal').show();
                    }
                });
            });

            $('.close').click(function() {
                $('#productModal').hide();
            });
        });
    </script>
</body>
</html>
