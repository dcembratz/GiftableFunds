<!-- product1.php -->
<?php
// Load product details from your database based on product ID 1
$productName = "Product 1"; // Replace with actual product name
$productDescription = "Description for Product 1"; // Replace with actual product description
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include necessary CSS and JavaScript -->
</head>

<body>
    <h1><?php echo $productName; ?></h1>
    <p><?php echo $productDescription; ?></p>

    <!-- Create a form for price range and custom price input -->
    <form action="add_to_cart.php" method="post">
        <!-- Price range options -->
        <label for="priceRange">Select a price range:</label>
        <select name="priceRange" id="priceRange">
            <option value="5-10">$5 - $10</option>
            <option value="10-15">$10 - $15</option>
            <option value="15-20">$15 - $20</option>
            <option value="20-25">$20 - $25</option>
        </select>

        <!-- Custom price input -->
        <label for="customPrice">Or enter a custom price:</label>
        <input type="text" name="customPrice" id="customPrice" placeholder="Custom Price">

        <!-- Add to Cart button -->
        <button type="submit">Add to Cart</button>
    </form>
</body>

</html>
