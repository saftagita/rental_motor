@extends('layout.admin')

@section('title', 'Artikel Form')

@push('styles')
    <style>
        .container {
            width: 500px;
            margin: 60px auto;
            background: white;
            padding: 40px 45px;
            border-radius: 18px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .container h2 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
        }

        .container p {
            margin-top: 5px;
            font-size: 14px;
            color: #555;
        }

        label {
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-top: 25px;
        }

        .input-box {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            border: none;
            background: #EFEFEF;
            font-size: 14px;
            margin-top: 8px;
            box-sizing: border-box;
        }

        textarea.input-box {
            min-height: 100px;
            resize: vertical;
        }

        .row {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .row .input-box {
            flex: 1;
        }

        /* ---------- BUTTON STYLE ---------- */
        .btn-submit,
        .btn-cancel {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            font-weight: 600;
            display: block;
            box-sizing: border-box;
        }

        .btn-submit {
            margin-top: 40px;
            background: #0F1B33;
            border: none;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #152544;
        }

        .btn-cancel {
            margin-top: 15px;
            background: #C6C6C6;
            border: none;
            font-size: 15px;
            color: #333;
            text-align: center;
            text-decoration: none;
        }

        .btn-cancel:hover {
            background: #B2B2B2;
        }
    </style>
@endpush

@section('content')
        <h2>FORM ARTIKEL</h2>
        <p>Isi form di bawah ini untuk menambahkan artikel</p>

        <!-- FORM ARTIKEL -->
        <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Judul -->
            <label>Judul Artikel</label>
            <input type="text" name="judul" class="input-box" placeholder="Masukkan Judul Artikel" required>

            <!-- Gambar -->
            <label>Gambar</label>
            <div class="row">
                <input type="file" name="gambar" class="input-box" required>
            </div>

            <!-- Deskripsi -->
            <label>Deskripsi</label>
            <div class="row">
                <textarea name="deskripsi" class="input-box" placeholder="Masukkan Deskripsi Artikel"></textarea>
            </div>

            <!-- BUTTON SUBMIT -->
            <button type="submit" class="btn-submit">KONFIRMASI ARTIKEL</button>
        </form>

        <!-- BUTTON CANCEL -->
        <a href="{{ route('admin.artikel.index') }}" class="btn-cancel">CANCEL</a>
@endsection