<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kategori Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; min-height: 100vh; margin:0; }
        .sidebar { width: 220px; background:#f8f9fa; padding:20px; border-right:1px solid #ccc; }
        .content { flex:1; padding:20px; }
        .btn-sm { margin-right: 5px; }
        .search-box { display:flex; align-items:center; gap:10px; margin-bottom:15px; }
        .search-box input { flex:1; }
        .icon { font-size: 1.2rem; margin-right: 5px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h5>Menu</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('surat.index') }}" class="nav-link text-dark">
                    <span class="icon">⭐</span>Arsip
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kategori.index') }}" class="nav-link active fw-bold text-dark">
                    <span class="icon">📄</span>Kategori Surat
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about.index') }}" class="nav-link text-dark">
                    <span class="icon">ℹ️</span>About
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        <h2>Kategori Surat</h2>
        <p>Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.<br>
            Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.</p>

        <div class="search-box">
            <label for="search" class="form-label mb-0">Cari kategori:</label>
            <input type="text" id="search" class="form-control" placeholder="search">
            <button class="btn btn-primary">Cari!</button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->deskripsi }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                        </form>
                        <a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('kategori.create') }}" class="btn btn-success">
            [+] Tambah Kategori Baru...
        </a>
    </div>
</body>
</html>
