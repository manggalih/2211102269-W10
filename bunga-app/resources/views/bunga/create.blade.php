<!DOCTYPE html>
<html>
<head>
    <title>Pute</title>
</head>
<body>
    <h2>Tambah Data Bunga</h2>
    <form method="POST" action="{{ route('bunga.store') }}">
        @csrf
        <label>Nama Bunga:</label><br>
        <input type="text" name="nama_bunga"><br>
        <label>Jenis:</label><br>
        <input type="text" name="jenis"><br>
        <label>Harga:</label><br>
        <input type="number" name="harga"><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>