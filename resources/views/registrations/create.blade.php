<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Form Registrasi</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="mb-3 form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" class="form-control" name="nama" required>
            </div>
            <div class="mb-3 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3 form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" required>
            </div>
            <div class="mb-3 form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" id="no_telepon" class="form-control" name="no_telepon" required>
            </div>
            <div class="mb-3 form-group">
                <label>Status Anggota</label>
                <select class="form-control" name="status_anggota" required>
                    <option value="">Pilih Status Anggota</option>
                    <option value="Aktif" {{ old('status_anggota') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Tidak Aktif" {{ old('status_anggota') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label>Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" value="{{ old('judul_buku') }}" required>
            </div>
            <div class="mb-3 form-group">
                <label>Tanggal Pinjam</label>
                <input type="text" class="form-control" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}" required>
            </div>
            <div class="mb-3 form-group">
                <label for="agama">Agama</label>
                <select id="agama" class="form-control" name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control" name="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
