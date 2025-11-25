<!DOCTYPE html>
<html>
<head>
    <title>Tambah Product</title>
</head>
<body>

<h2>Tambah Product</h2>

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Product</label><br>
    <input type="text" name="nama"><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga"><br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi"></textarea><br><br>

    <label>Foto</label><br>
    <input type="file" name="foto"><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
