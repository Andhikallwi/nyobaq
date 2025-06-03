<?php

class Transaksi extends Model {
    protected $table = 'transaksi';

    public function createTransaksi($data) {
        // Logic to create a new transaction
        // Example: INSERT INTO transaksi (fields) VALUES (values)
    }

    public function getAllTransaksi() {
        // Logic to retrieve all transactions
        // Example: SELECT * FROM transaksi
    }

    public function getTransaksiById($id) {
        // Logic to retrieve a transaction by ID
        // Example: SELECT * FROM transaksi WHERE id = ?
    }

    public function updateTransaksi($id, $data) {
        // Logic to update a transaction
        // Example: UPDATE transaksi SET fields = values WHERE id = ?
    }

    public function deleteTransaksi($id) {
        // Logic to delete a transaction
        // Example: DELETE FROM transaksi WHERE id = ?
    }
}