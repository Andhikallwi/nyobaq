<?php
// Fetch the list of customers from the database
require_once '../../models/Pelanggan.php';

$pelangganModel = new Pelanggan();
$customers = $pelangganModel->getAllCustomers();

include '../templates/header.php';
?>

<div class="container">
    <h1>List of Customers</h1>
    <a href="create.php" class="btn btn-primary">Add New Customer</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?php echo $customer['id']; ?></td>
                    <td><?php echo $customer['name']; ?></td>
                    <td><?php echo $customer['email']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $customer['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../templates/footer.php'; ?>