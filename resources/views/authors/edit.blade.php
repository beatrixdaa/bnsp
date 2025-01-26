<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Aggota</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action={{ route('authors.update', $author -> id) }} enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $author -> nama }}">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{ $author -> alamat }}">
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="text" class="form-control" name="alamat" value="{{ $author -> no_telepon }}">
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ '/authors' }}">Kembali</a>
        </form>
    </div>
</body>
</html>
