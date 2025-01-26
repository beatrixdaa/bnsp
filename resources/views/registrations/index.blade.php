<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Registrasi Peminjaman Buku</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('registrations.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3 form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3 form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>
            <div class="mb-3 form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telepon" required>
            </div>
            <div class="mb-3 form-group">
                <label>Status Anggota</label>
                <input type="text" class="form-control" name="status_anggota" value="{{ old('status_anggota') }}" required>
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
                <select name="agama_id" class="form-control" required>
                    @foreach($agama as $d)
                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" required></textarea>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</body>
</html>
