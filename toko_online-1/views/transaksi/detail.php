<?php
// detail.php - This file shows the details of a specific transaction.

// Assuming you have a way to get the transaction ID from the URL or request
$transactionId = $_GET['id'] ?? null;

// Include the necessary model
require_once '../../models/Transaksi.php';

// Create an instance of the Transaksi model
$transaksiModel = new Transaksi();

// Fetch the transaction details
$transaction = $transaksiModel->getTransactionById($transactionId);

if ($transaction) {
    // Display transaction details
    echo "<h1>Transaction Details</h1>";
    echo "<p><strong>Transaction ID:</strong> " . htmlspecialchars($transaction['id']) . "</p>";
    echo "<p><strong>Customer:</strong> " . htmlspecialchars($transaction['customer_name']) . "</p>";
    echo "<p><strong>Product:</strong> " . htmlspecialchars($transaction['product_name']) . "</p>";
    echo "<p><strong>Quantity:</strong> " . htmlspecialchars($transaction['quantity']) . "</p>";
    echo "<p><strong>Total Price:</strong> " . htmlspecialchars($transaction['total_price']) . "</p>";
    echo "<p><strong>Date:</strong> " . htmlspecialchars($transaction['date']) . "</p>";
} else {
    echo "<p>Transaction not found.</p>";
}
?>