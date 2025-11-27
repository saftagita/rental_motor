@extends('layout.app')

@section('title', $article['title'])

@push('styles')
<style>
.article-detail {
    max-width: 800px;
    margin: 60px auto;
    background: white;
    padding: 40px 45px;
    border-radius: 18px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.article-detail h1 {
    font-size: 36px;
    color: #0F1B33;
    margin-bottom: 25px;
}

.article-detail img {
    width: 100%;
    margin: 25px 0;
    border-radius: 12px;
}

.article-detail p {
    font-size: 18px;
    line-height: 1.7;
    color: #333;
    margin-bottom: 20px;
}

.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #0F1B33;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.back-btn:hover {
    background: #1c335a;
}
</style>
@endpush

@section('content')
<div class="article-detail">
    <h1>{{ $article['title'] }}</h1>
    <img src="{{ asset('img/' . $article['img']) }}" alt="{{ $article['title'] }}">
    <p>{{ $article['content'] }}</p>
    <a href="/artikel" class="back-btn">Kembali ke Artikel</a>
</div>
@endsection
