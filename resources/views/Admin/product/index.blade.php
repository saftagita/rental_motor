<!DOCTYPE html>
<html>
<head>
    <title>Admin – Data Product</title>
</head>
<body>

<h2>Data Product</h2>

<a href="{{ route('product.create') }}">+ Tambah Product</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    @foreach ($products as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>
            @if ($item->foto)
                <img src="{{ asset('storage/'.$item->foto) }}" width="80">
            @else
                -
            @endif
        </td>
        <td>
            <a href="{{ route('product.edit', $item->id) }}">Edit</a>

            <form action="{{ route('product.delete', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
