<!DOCTYPE html>
<html>
<head>
    <title>Product</title>

    <style>
        body {
            background: #F5F5F5;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        /* NAVBAR — SAMA PERSIS SEPERTI HOME */
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
            left: 60px; /* LOGO DI KIRI */
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


        /* PRODUCT SECTION */
        .product-section {
            padding: 60px 80px;
            text-align: center;
        }

        .product-section h1 {
            margin: 0;
            font-size: 34px;
            font-weight: 800;
            color: #0F1B33;
        }

        .product-section p {
            margin-top: 10px;
            color: #555;
            font-size: 15px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* CARD CONTAINER */
        .card-container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 35px;
        }

        /* CARD */
        .card {
            background: white;
            padding: 20px;
            width: 300px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.08);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 12px 28px rgba(0,0,0,0.15);
        }

        .card img {
            width: 260px;
            height: auto;
        }

        .card h3 {
            margin-top: 15px;
            font-size: 20px;
        }

        .price {
            margin: 5px 0 20px;
            font-weight: bold;
            color: #222;
        }

        .btn-book {
            width: 100%;
            padding: 12px 0;
            background: #0F1B33;
            border-radius: 6px;
            text-align: center;
            color: white;
            font-weight: 600;
            text-decoration: none;
            display: block;
            font-size: 15px;
            transition: 0.2s;
        }

        .btn-book:hover {
            background: #142440;
            transform: translateY(-2px);
        }

    </style>

</head>
<body>

    <!-- NAVBAR -->
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

    <!-- PRODUCT LIST -->
    <div class="product-section">
        <h1>Cheap Motorcycle Rental</h1>
        <h1>in AS Moto Go</h1>

        <p>Sewa 4 hari atau lebih dan dapatkan tarif harian lebih murah! 
            WhatsApp kami sekarang untuk mengamankan harga spesial Anda.</p>

        <div class="card-container">

            <!-- CARD 1 -->
            <div class="card">
                <img src="{{ asset('img/motor2.png') }}">
                <h3>Vespa Matic</h3>
                <div class="price">Rp. 70.000/hari</div>
                <a href="/booking" class="btn-book">BOOKING SEKARANG</a>
            </div>

            <!-- CARD 2 -->
            <div class="card">
                <img src="{{ asset('img/motor2.png') }}">
                <h3>Vespa Matic</h3>
                <div class="price">Rp. 70.000/hari</div>
                <a href="/booking" class="btn-book">BOOKING SEKARANG</a>
            </div>

            <!-- CARD 3 -->
            <div class="card">
                <img src="{{ asset('img/motor2.png') }}">
                <h3>Vespa Matic</h3>
                <div the="price">Rp. 70.000/hari</div>
                <a href="/booking" class="btn-book">BOOKING SEKARANG</a>
            </div>

        </div>
    </div>

    {{-- FOOTER --}}
    @include('layout.footer')

</body>
</html>
