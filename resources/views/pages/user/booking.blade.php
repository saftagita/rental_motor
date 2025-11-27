@extends('layout.app')

@section('title', 'Booking Form')

@push('styles')
<style>
.container {
    width: 500px;
    margin: 60px auto;
    background: white;
    padding: 40px 45px;
    border-radius: 18px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    box-sizing: border-box;
}

.container h2 { 
    font-size: 24px; 
    font-weight: bold; 
    margin-bottom: 5px; 
}
.container p { 
    font-size: 14px; 
    margin-bottom: 25px; 
    color: #555; 
}

label { 
    font-weight: bold; 
    margin-top: 20px; 
    display: block; 
}
.input-box {
    width: 100%; 
    padding: 14px; 
    margin-top: 8px; 
    border: none; 
    border-radius: 8px;
    background: #EFEFEF; 
    font-size: 14px; 
    box-sizing: border-box;
}

.btn-submit, .btn-cancel {
    width: 100%; 
    padding: 14px; 
    border-radius: 10px; 
    font-size: 16px; 
    text-align: center;
    cursor: pointer;
    margin-top: 15px;
    display: block;
    text-decoration: none;
}

.btn-submit {
    background: #0F1B33; 
    color: white; 
    border: none;
}
.btn-submit:hover { 
    background: #152544; 
}

.btn-cancel {
    background: #C6C6C6; 
    color: #333; 
    border: none;
}
.btn-cancel:hover { 
    background: #B2B2B2; 
}

.alert-success { 
    background: #D1F2D1; 
    padding: 12px 15px; 
    border-radius: 8px; 
    color: #145A32; 
    margin-bottom: 20px; 
    font-size: 14px; 
    text-align: center;
}
</style>
@endpush

@section('content')
<div class="container">

    <h2>FORM BOOKING</h2>
    <p>Isi form di bawah ini untuk melakukan booking</p>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf

        <label>Pilih Produk</label>
        <select name="product_id" class="input-box" required>
            <option value="">-- Pilih Produk --</option>
            @foreach ($products as $p)
                <option value="{{ $p->id }}">{{ $p->nama }} - Rp{{ number_format($p->harga) }}</option>
            @endforeach
        </select>

        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="input-box" placeholder="Masukkan Nama Lengkap" required>

        <label>Nomor Telepon/Whatsapp</label>
        <input type="text" name="telp" class="input-box" placeholder="08xx-xxxx-xxxx" required>

        <label>Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" class="input-box" required>

        <label>Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" class="input-box" required>

        <button type="submit" class="btn-submit">KONFIRMASI BOOKING</button>
    </form>
    <a href="/product" class="btn-cancel">CANCEL</a>


</div>
@endsection
