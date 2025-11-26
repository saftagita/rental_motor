@extends('layout.app')

@section('title', 'Home')

@push('styles')
    <style>
        /* HERO SECTION */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 90px 100px;
        }

        .text h1 {
            font-size: 42px;
            font-weight: 800;
            color: #0F1B33;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .text p {
            font-size: 18px;
            line-height: 1.7;
            color: #333;
            margin-bottom: 25px;
        }

        .hero img {
            width: 480px;
            filter: drop-shadow(0px 10px 25px rgba(0, 0, 0, 0.2));
        }

        .hero-btn {
            display: inline-block;
            padding: 12px 28px;
            background: #0F1B33;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .hero-btn:hover {
            background: #1c335a;
        }
    </style>
@endpush

@section('content')
    <div class="hero">
        <div class="text">
            <h1>Sewa Motor Praktis & Harga Terjangkau</h1>

            <p>
                Temukan motor terbaik yang siap menemani perjalanan kamu.<br>
                Unit bersih, kondisi prima, harga hemat, dan proses cepat.
            </p>

            <a href="https://wa.me/628xxxxxxx" class="hero-btn">Chat Via WhatsApp</a>
        </div>

        <img src="{{ asset('img/motor4.png') }}" alt="Motor">
    </div>
@endsection
