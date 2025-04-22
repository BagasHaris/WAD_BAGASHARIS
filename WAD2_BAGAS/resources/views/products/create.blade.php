<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            
        }

        h1 {
            color: #004080;
            margin-bottom: 20px;
        }

        form {
            /* background-color: #fff; */
            padding: 20px;
            border-radius: 6px;
            /* box-shadow: 0 0 5px rgba(0,0,0,0.1); */
            /* max-width: 400px; */
            /* width: 50vw; */
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #e60000;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="Nama" id="nama" required>

        <label for="Jumlah">Jumlah:</label>
        <input type="number" name="Jumlah" id="Jumlah" required>

        <label for="Harga">Harga:</label>
        <input type="number" name="Harga" id="Harga" required>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
