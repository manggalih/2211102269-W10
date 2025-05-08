<!DOCTYPE html>
<html>
<head>
    <title>Pute</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; margin: 30px; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: center; }
        .btn { padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
<div class="container">
    <h3>Nama: Putri Novia Manggalih</h3>
    <h4>NIM: 2211102269</h4>
    <h2>Data Bunga</h2>
    <table>
        <tr><th>Nama</th><th>Jenis</th><th>Harga</th></tr>
        @foreach($bungas as $bunga)
            <tr>
                <td>{{ $bunga->nama_bunga }}</td>
                <td>{{ $bunga->jenis }}</td>
                <td>Rp {{ number_format($bunga->harga,0,',','.') }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <button onclick="window.location='{{ route('bunga.manage') }}'">Modal</button>
</div>
</body>
</html>