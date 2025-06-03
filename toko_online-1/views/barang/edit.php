<?php
// edit.php - Form for editing an existing product

// Assuming you have a way to fetch the product details by ID
$product = // fetch product details from the database using the product ID

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="/barang/update/<?php echo $product['id']; ?>" method="POST">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required><?php echo $product['description']; ?></textarea>
            </div>
            <button type="submit">Update Product</button>
        </form>
        <a href="/barang/index">Back to Product List</a>
    </div>
</body>
</html>