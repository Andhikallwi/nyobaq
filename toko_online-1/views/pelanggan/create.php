<form action="/pelanggan/store" method="POST">
    <div>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" name="telepon" required>
    </div>
    <div>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>
    </div>
    <div>
        <button type="submit">Simpan</button>
    </div>
</form>