<?php
// Fetch transactions from the database
require_once '../../models/Transaksi.php';

$transaksiModel = new Transaksi();
$transaksiList = $transaksiModel->getAllTransactions();

include '../templates/header.php';
?>

<div class="container">
    <h1>Daftar Transaksi</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksiList as $transaksi): ?>
                <tr>
                    <td><?php echo $transaksi['id']; ?></td>
                    <td><?php echo $transaksi['id_pelanggan']; ?></td>
                    <td><?php echo $transaksi['tanggal']; ?></td>
                    <td><?php echo number_format($transaksi['total'], 2); ?></td>
                    <td>
                        <a href="detail.php?id=<?php echo $transaksi['id']; ?>" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../templates/footer.php'; ?>