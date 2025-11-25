<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #F5F5F5;
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
            left: 60px;
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

        /* CONTACT CARD */
        .contact-container {
            width: 75%;
            margin: 60px auto;
            background: white;
            padding: 50px 70px;
            border-radius: 18px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.12);
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 34px;
            font-weight: 800;
            color: #0F1B33;
        }

        p {
            color: #555;
            margin-top: 12px;
            font-size: 16px;
        }

        .contact-grid {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .contact-box {
            background: #F8FAFF;
            padding: 25px;
            border-radius: 12px;
            width: 250px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.08);
            transition: 0.2s;
        }

        .contact-box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 14px rgba(0,0,0,0.12);
        }

        .contact-box b {
            color: #0F1B33;
            font-size: 17px;
        }

        .contact-box a {
            color: #0F1B33;
            font-weight: bold;
            text-decoration: none;
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


<!-- CONTACT CONTENT -->
<div class="contact-container">
    <h1>CONTACT US</h1>
    <p>Silakan hubungi kami untuk informasi rental motor, pemesanan, atau pertanyaan lainnya.</p>

    <div class="contact-grid">

        <div class="contact-box">
            📍<br><br>
            <b>Lokasi</b><br>
            Dekat, RT.05/RW.04, Cibadak, Tanah Sereal, Kota Bogor, Jawa Barat 16166
        </div>

        <div class="contact-box">
            📞<br><br>
            <b>Telepon</b><br>
            0895-1774-6543
        </div>

        <div class="contact-box">
            ✉️<br><br>
            <b>Email</b><br>
            asmotorental@email.com
        </div>

    </div>
</div>

@include('layout.footer')

</body>
</html>
