<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Product</label><br>
    <input type="text" name="nama" value="{{ $product->nama }}"><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" value="{{ $product->harga }}"><br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi">{{ $product->deskripsi }}</textarea><br><br>

    <label>Foto Baru</label><br>
    <input type="file" name="foto"><br><br>

    @if ($product->foto)
        <img src="{{ asset('storage/'.$product->foto) }}" width="80"><br><br>
    @endif

    <button type="submit">Update</button>
</form>

</body>
</html>
