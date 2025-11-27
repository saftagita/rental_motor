@extends('layout.app')

@section('title', 'Artikel')

@push('styles')
<style>
.article-section {
    max-width: 1000px;
    margin: 60px auto;
    padding: 0 20px;
}

.article-header {
    text-align: center;
    margin-bottom: 50px;
}

.article-header h1 {
    font-size: 42px;
    color: #0F1B33;
    margin-bottom: 10px;
}

.article-header p {
    font-size: 18px;
    color: #555;
}

.article-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.article-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.article-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

.article-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.article-card .content {
    padding: 20px;
}

.article-card h3 {
    color: #0F1B33;
    margin-bottom: 10px;
    font-size: 22px;
}

.article-card p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

.read-more {
    display: inline-block;
    margin-top: 15px;
    padding: 8px 18px;
    background: #0F1B33;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.read-more:hover {
    background: #1c335a;
}
</style>
@endpush

@section('content')
<div class="article-section">
    <div class="article-header">
        <h1>Artikel Rental Motor</h1>
        <p>Tips, informasi, dan promo sewa motor untuk perjalananmu</p>
    </div>

    <div class="article-list">
        <!-- Artikel 1 -->
        <div class="article-card">
            <img src="{{ asset('img/rental1.png') }}" alt="Motor Matic">
            <div class="content">
                <h3>Tips Memilih Motor Matic untuk Sewa</h3>
                <p>Pilih motor matic yang nyaman, irit bahan bakar, dan cocok untuk kota. Pastikan juga kondisi mesin prima.</p>
               
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="article-card">
            <img src="{{ asset('img/rental2.png') }}" alt="Motor Bebek">
            <div class="content">
                <h3>Motor Bebek: Pilihan Hemat dan Andal</h3>
                <p>Motor bebek cocok untuk perjalanan jauh dengan harga sewa yang ramah di kantong. Tips merawat motor sebelum sewa.</p>
                {{-- <a href="#" class="read-more">Baca Selengkapnya</a> --}}
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="article-card">
            <img src="{{ asset('img/rental.png') }}" alt="Promo Rental">
            <div class="content">
                <h3>Promo Spesial Rental Motor</h3>
                <p>Dapatkan promo hemat setiap bulan! Cocok untuk mahasiswa dan wisatawan yang ingin sewa motor murah dan cepat.</p>
              
            </div>
        </div>

        <!-- Artikel 4 -->
        <div class="article-card">
            <img src="{{ asset('img/motor4.png') }}" alt="Motor Bersih">
            <div class="content">
                <h3>Keuntungan Sewa Motor Bersih dan Terawat</h3>
                <p>Unit selalu bersih dan terawat memberikan pengalaman berkendara nyaman. Tips cek motor sebelum ambil sewa.</p>
                
            </div>
        </div>
    </div>
</div>


@endsection
