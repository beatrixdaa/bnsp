<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
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
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
            </div>
            <div class="mb-3 form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3 form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
            </div>
            <div class="mb-3 form-group">
                <label>No Telepon</label>
                <input type="text" class="form-control" name="no_telepon" value="{{ old('no_telepon') }}" required>
            </div>
            <div class="mb-3 form-group">
                <label>Status Anggota</label>
                <select class="form-control" name="status_anggota" required>
                    <option value="" disabled selected>Pilih Status Anggota</option>
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
                <label>Agama</label>
                <select class="form-control" name="agama" required>
                    <option value="" disabled selected>Pilih Agama</option>
                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
