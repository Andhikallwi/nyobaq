<?php
session_start();

// Autoload classes
spl_autoload_register(function ($class_name) {
    include 'core/' . $class_name . '.php';
});

// Database connection
require 'config/database.php';

// Routing
$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri == '/toko_online/' || $request_uri == '/toko_online/index.php') {
    // Load the main page or dashboard
    require 'views/layouts/main.php';
} elseif (strpos($request_uri, '/toko_online/barang') === 0) {
    // Handle barang routes
    $controller = new BarangController();
    $controller->handleRequest();
} elseif (strpos($request_uri, '/toko_online/pelanggan') === 0) {
    // Handle pelanggan routes
    $controller = new PelangganController();
    $controller->handleRequest();
} elseif (strpos($request_uri, '/toko_online/transaksi') === 0) {
    // Handle transaksi routes
    $controller = new TransaksiController();
    $controller->handleRequest();
} elseif (strpos($request_uri, '/toko_online/auth') === 0) {
    // Handle authentication routes
    $controller = new AuthController();
    $controller->handleRequest();
} else {
    // 404 Not Found
    http_response_code(404);
    echo "404 Not Found";
}
?>