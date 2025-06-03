<form action="/barang/store" method="POST">
    <div>
        <label for="name">Nama Barang:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="price">Harga:</label>
        <input type="number" id="price" name="price" required>
    </div>
    <div>
        <label for="stock">Stok:</label>
        <input type="number" id="stock" name="stock" required>
    </div>
    <div>
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <div>
        <button type="submit">Simpan</button>
    </div>
</form>