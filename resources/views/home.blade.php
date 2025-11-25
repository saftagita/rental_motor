<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #F5F5F5;
        }

        /* NAVBAR */
        .navbar {
            background: #0F1B33;
            color: white;
            display: flex;
            justify-content: center; /* MENU DI TENGAH */
            align-items: center;
            padding: 15px 60px;
            height: 70px;
            box-sizing: border-box;
            position: relative;
        }

        .logo {
            position: absolute;
            left: 60px; /* Logo tetap kiri */
        }

        .logo img {
            width: 90px;
            object-fit: contain;
        }

        .menu {
            display: flex;
            gap: 35px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #FFD95A;
        }

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
            filter: drop-shadow(0px 10px 25px rgba(0,0,0,0.2));
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
</head>
<body>

{{-- NAVBAR --}}
<div class="navbar">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
    </div>

    <div class="menu">
        <a href="/home">HOME</a>
        <a href="/product">PRODUCT</a>
        <a href="/about">ABOUT</a>
        <a href="/contact">CONTACT</a>
    </div>
</div>

{{-- HERO --}}
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

{{-- FOOTER --}}
@include('layout.footer')

</body>
</html>
