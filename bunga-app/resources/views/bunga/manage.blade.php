<!DOCTYPE html>
<html>
<head>
    <title>Pute</title>
    <style>
        body { font-family: Arial; margin: 30px; background-color: #eef2f3; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
        .btn { padding: 8px 14px; color: white; border: none; border-radius: 5px; margin: 0 5px; }
        .btn-create { background-color: #007bff; }
        .btn-edit { background-color: #17a2b8; }
        .btn-delete { background-color: #dc3545; }
    </style>
</head>
<body>
    <h2>Halaman CRUD Bunga</h2>
    <a href="{{ route('bunga.create') }}" class="btn btn-create">Tambah Bunga</a>
    <table>
        <tr><th>Nama</th><th>Jenis</th><th>Harga</th><th>Aksi</th></tr>
        @foreach($bungas as $bunga)
        <tr>
            <td>{{ $bunga->nama_bunga }}</td>
            <td>{{ $bunga->jenis }}</td>
            <td>Rp {{ number_format($bunga->harga,0,',','.') }}</td>
            <td>
                <a href="{{ route('bunga.edit', $bunga->id) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('bunga.destroy', $bunga->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
