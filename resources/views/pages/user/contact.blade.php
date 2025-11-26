@extends('layout.app')

@section('title', 'Contact Us')

@push('styles')
    <style>
        /* CONTACT CARD */
        .contact-container {
            width: 75%;
            margin: 60px auto;
            background: white;
            padding: 50px 70px;
            border-radius: 18px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.12);
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
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.08);
            transition: 0.2s;
        }

        .contact-box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.12);
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
@endpush

@section('content')
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
@endsection
