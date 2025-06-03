<?php
// Include the header template
include_once '../templates/header.php';

// Include the Barang model
include_once '../../models/Barang.php';

// Create an instance of the Barang model
$barangModel = new Barang();

// Fetch all products
$products = $barangModel->getAll();

// Display the list of products
?>

<h1>List of Products</h1>
<a href="create.php">Add New Product</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $product['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $product['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
// Include the footer template
include_once '../templates/footer.php';
?>