<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>

<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="Nama" id="nama" value="{{ $product->nama }}" required><br>

    <label for="jumlah">Jumlah:</label>
    <input type="number" name="Jumlah" id="jumlah" value="{{ $product->Jumlah }}" required><br>

    <label for="harga">Harga:</label>
    <input type="number" name="Harga" id="harga" value="{{ $product->Harga }}" required><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>