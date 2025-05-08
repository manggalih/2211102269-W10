<!DOCTYPE html>
<html>
<head>
    <title>Pute</title>
</head>
<body>
    <h2>Edit Data Bunga</h2>
    <form method="POST" action="{{ route('bunga.update', $bunga->id) }}">
        @csrf
        @method('PUT')
        <label>Nama Bunga:</label><br>
        <input type="text" name="nama_bunga" value="{{ $bunga->nama_bunga }}"><br>
        <label>Jenis:</label><br>
        <input type="text" name="jenis" value="{{ $bunga->jenis }}"><br>
        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $bunga->harga }}"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>