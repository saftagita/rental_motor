@extends('layout.admin')

@section('title', 'Product Management')

@push('styles')
    <style>
        .container {
            width: 900px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        h2 {
            margin-top: 0;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #0F1B33;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .btn-action {
            padding: 7px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            color: white;
            margin-right: 5px;
        }

        .btn-action.edit {
            background: #f0ad4e;
        }

        .btn-action.hapus {
            background: #d9534f;
            border: none;
            cursor: pointer;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-primary {
            padding: 10px 15px;
            background: #3498db;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="header">
            <h2>Data Product</h2>
            <a class="btn-primary" href="{{ route('admin.product.create') }}">Tambah Produk</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>judul</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($artikels as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->judul }}</td>
                        <td>{{ $a->deskripsi }}</td>
                        <td><img src="{{ asset('storage/' . $a->gambar) }}" alt="{{ $a->judul }}" width="100"></td>
                        
                        <td>
                            <form action="{{ route('admin.product.destroy', $a->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action hapus" onclick="return confirm('Yakin hapus data ini, Gita?')">
                                    Hapus
                                </button>
                            </form>
                            <a class="btn-action edit" href="{{ route('admin.product.edit', $a->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
