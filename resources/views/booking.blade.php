<!DOCTYPE html>
<html>
<head>
    <title>Booking Motor</title>

    <style>
        body {
            background: #F5F5F5;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            width: 500px;
            margin: 60px auto;
            background: white;
            padding: 40px 45px;
            border-radius: 18px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .container h2 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
        }

        .container p {
            margin-top: 5px;
            font-size: 14px;
            color: #555;
        }

        label {
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-top: 25px;
        }

        .input-box {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            border: none;
            background: #EFEFEF;
            font-size: 14px;
            margin-top: 8px;
            box-sizing: border-box;
        }

        .row {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .row .input-box {
            flex: 1;
        }

        /* ---------- BUTTON STYLE ---------- */
        .btn-submit,
        .btn-cancel {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            font-weight: 600;
            display: block;
            box-sizing: border-box;
        }

        .btn-submit {
            margin-top: 40px;
            background: #0F1B33;
            border: none;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #152544;
        }

        .btn-cancel {
            margin-top: 15px;
            background: #C6C6C6;
            border: none;
            font-size: 15px;
            color: #333;
            text-align: center;
            text-decoration: none;
        }

        .btn-cancel:hover {
            background: #B2B2B2;
        }
    </style>
</head>
<body>

    <div class="container">

        <h2>FORM BOOKING</h2>
        <p>Isi form di bawah ini untuk melakukan booking</p>

        <!-- FORM BOOKING -->
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf

            <!-- NAMA -->
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="input-box" placeholder="Masukkan Nama Lengkap" required>

            <!-- TELEPON -->
            <label>Nomor Telepon/Whatsapp</label>
            <input type="text" name="telp" class="input-box" placeholder="08xx-xxxx-xxxx" required>

            <!-- TANGGAL MULAI -->
            <label>Tanggal Mulai</label>
            <div class="row">
                <input type="date" name="tanggal_mulai" class="input-box" required>
            </div>

            <!-- TANGGAL SELESAI -->
            <label>Tanggal Selesai</label>
            <div class="row">
                <input type="date" name="tanggal_selesai" class="input-box" required>
            </div>

            <!-- BUTTON SUBMIT -->
            <button type="submit" class="btn-submit">KONFIRMASI BOOKING</button>

        </form>

        <!-- BUTTON CANCEL -->
        <a href="/product" class="btn-cancel">CANCEL</a>

    </div>

{{-- FOOTER --}}
@include('layout.footer')

</body>
</html>
