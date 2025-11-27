@extends('layout.app')

@section('title', 'Artikel')

@push('styles')
<style>
.article-section {
    max-width: 1200px;
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
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

@media (max-width: 992px) {
    .article-list {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .article-list {
        grid-template-columns: 1fr;
    }
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
    font-size: 20px;
    line-height: 1.3;
}

.article-card p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 15px;
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

.empty-state {
    text-align: center;
    padding: 60px 20px;
}

.empty-state h3 {
    color: #0F1B33;
    font-size: 24px;
    margin-bottom: 10px;
}

.empty-state p {
    color: #999;
    font-size: 16px;
}
</style>
@endpush

@section('content')
<div class="article-section">
    <div class="article-header">
        <h1>Artikel Rental Motor</h1>
        <p>Tips, informasi, dan promo sewa motor untuk perjalananmu</p>
    </div>

    @if($artikels->count() > 0)
        <div class="article-list">
            @foreach($artikels as $artikel)
                <div class="article-card">
                    @if($artikel->gambar)
                        <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}">
                    @else
                        <img src="{{ asset('img/default-article.png') }}" alt="{{ $artikel->judul }}">
                    @endif
                    
                    <div class="content">
                        <h3>{{ $artikel->judul }}</h3>
                        <p>{{ Str::limit($artikel->deskripsi, 100) }}</p>
                        <a href="{{ route('user.artikel.show', $artikel->id) }}" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <h3>Belum Ada Artikel</h3>
            <p>Artikel akan ditampilkan di sini ketika sudah tersedia</p>
        </div>
    @endif
</div>
@endsection