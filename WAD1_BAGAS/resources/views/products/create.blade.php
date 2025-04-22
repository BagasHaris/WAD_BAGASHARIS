<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>

<h1>Tambah Produk Baru</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="Nama" id="nama" required><br>

    <label for="Jumlah">Jumlah:</label>
    <input type="number" name="Jumlah" id="Jumlah" required><br>

    <label for="Harga">Harga:</label>
    <input type="number" name="Harga" id="Harga" required><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>