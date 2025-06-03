<?php
// Fetch the customer data from the database using the customer ID
// Assuming $pelanggan is the customer object retrieved from the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Pelanggan</h2>
        <form action="/pelanggan/update/<?php echo $pelanggan->id; ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $pelanggan->nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $pelanggan->email; ?>" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" id="telepon" name="telepon" value="<?php echo $pelanggan->telepon; ?>" required>
            </div>
            <button type="submit">Update</button>
        </form>
        <a href="/pelanggan/index">Kembali ke Daftar Pelanggan</a>
    </div>
</body>
</html>