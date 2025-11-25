<!DOCTYPE html>
<html>
<head>
    <title>Admin – Data Booking</title>

    <style>
        body {
            background:#F5F5F5;
            font-family:Arial, sans-serif;
            margin:0;
            padding:40px;
        }

        .container {
            width:900px;
            margin:auto;
            background:#fff;
            padding:25px;
            border-radius:15px;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        }

        h2 {
            margin-top:0;
        }

        table {
            width:100%;
            margin-top:20px;
            border-collapse:collapse;
        }

        table, th, td {
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
            font-size:14px;
        }

        th {
            background:#0F1B33;
            color:white;
            font-weight:bold;
        }

        tr:nth-child(even) {
            background:#f2f2f2;
        }

        a.btn-hapus {
            padding:7px 12px;
            background:#d9534f;
            color:white;
            border-radius:6px;
            text-decoration:none;
            font-size:13px;
        }

        a.btn-hapus:hover {
            background:#c0392b;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Booking Motor</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($bookings as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->telp }}</td>
                <td>{{ $b->tanggal_mulai }}</td>
                <td>{{ $b->tanggal_selesai }}</td>
                <td>
                    <a class="btn-hapus" href="{{ route('booking.delete', $b->id) }}"
                       onclick="return confirm('Yakin hapus data ini, Gita?')">
                       Hapus
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
