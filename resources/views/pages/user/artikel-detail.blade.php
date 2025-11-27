@extends('layout.app')

@section('title', $artikel->judul)

@push('styles')
<style>
.article-detail {
    max-width: 800px;
    margin: 60px auto;
    padding: 0 20px;
}

.back-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #0F1B33;
    text-decoration: none;
    font-weight: 600;
    margin-bottom: 30px;
    transition: 0.3s;
}

.back-link:hover {
    color: #1c335a;
}

.article-content {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.article-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.article-body {
    padding: 40px;
}

.article-title {
    font-size: 36px;
    color: #0F1B33;
    margin-bottom: 20px;
    line-height: 1.3;
}

.article-meta {
    display: flex;
    gap: 20px;
    color: #999;
    font-size: 14px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.article-text {
    font-size: 18px;
    line-height: 1.8;
    color: #333;
    white-space: pre-wrap;
}

/* Related Articles */
.related-section {
    margin-top: 80px;
}

.related-section h2 {
    font-size: 28px;
    color: #0F1B33;
    margin-bottom: 30px;
    text-align: center;
}

.related-articles {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

.related-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    text-decoration: none;
}

.related-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

.related-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.related-card .content {
    padding: 15px;
}

.related-card h3 {
    font-size: 16px;
    color: #0F1B33;
    margin-bottom: 8px;
}

.related-card p {
    font-size: 14px;
    color: #666;
    line-height: 1.5;
}

@media (max-width: 768px) {
    .article-title {
        font-size: 28px;
    }
    
    .article-body {
        padding: 25px;
    }
    
    .article-text {
        font-size: 16px;
    }
    
    .article-image {
        height: 250px;
    }
}
</style>
@endpush

@section('content')
<div class="article-detail">
    <!-- Back Button -->
    <a href="{{ route('user.artikel.index') }}" class="back-link">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"/>
        </svg>
        Kembali ke Artikel
    </a>

    <!-- Article Content -->
    <article class="article-content">
        @if($artikel->gambar)
            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="article-image">
        @endif
        
        <div class="article-body">
            <h1 class="article-title">{{ $artikel->judul }}</h1>
            
            <div class="article-meta">
                <span>📅 {{ $artikel->created_at->format('d F Y') }}</span>
                <span>⏱️ {{ $artikel->created_at->diffForHumans() }}</span>
            </div>
            
            <div class="article-text">
                {{ $artikel->deskripsi }}
            </div>
        </div>
    </article>

    <!-- Related Articles -->
    @if($relatedArtikels->count() > 0)
        <div class="related-section">
            <h2>Artikel Lainnya</h2>
            <div class="related-articles">
                @foreach($relatedArtikels as $related)
                    <a href="{{ route('user.artikel.show', $related->id) }}" class="related-card">
                        @if($related->gambar)
                            <img src="{{ asset('storage/' . $related->gambar) }}" alt="{{ $related->judul }}">
                        @else
                            <img src="{{ asset('img/default-article.png') }}" alt="{{ $related->judul }}">
                        @endif
                        
                        <div class="content">
                            <h3>{{ $related->judul }}</h3>
                            <p>{{ Str::limit($related->deskripsi, 80) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</div>
@endsection