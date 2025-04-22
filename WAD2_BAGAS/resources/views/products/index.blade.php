<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }

        h1 {
            color: #004080;
            margin-bottom: 10px;
        }

        .btn-create {
            display: inline-block;
            background-color: #e60000;
            color: #fff;
            padding: 8px 16px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.2s;
        }

        .btn-create:hover {
            background-color: #cc0000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #004080;
            color: #fff;
        }

        tr:hover {
            background-color: #f0f0f0;
        }

        .cta-button {
            padding: 6px 12px;
            font-size: 13px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-edit {
            background-color: #007bff;
            color: white;
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            margin-left: 6px;
        }

        .btn-delete:hover {
            background-color: #b02a37;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>

    <form action="{{ route('logout') }}" method="POST" style="position: absolute; top: 16px; right: 16px;">
    @csrf
    <button type="submit" style="
        background-color: #e60000;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    ">
        Logout
    </button>
</form>

    <h1>Daftar Produk</h1>

    <a href="{{ route('products.create') }}" class="btn-create">Tambahkan Produk</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->Jumlah }}</td>
                    <td>{{ $product->Harga }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="cta-button btn-edit">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cta-button btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
