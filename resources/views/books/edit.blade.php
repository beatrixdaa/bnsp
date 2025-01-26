<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Buku</h1>

        <!-- Tampilkan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Edit -->
        <form method="POST" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 form-group">
                <label for="author_id">Author</label>
                <input type="text" id="author_id" class="form-control" name="author_id" value="{{ old('author_id', $book->author_id) }}" required>
            </div>
            <div class="mb-3 form-group">
                <label for="judul">Judul</label>
                <input type="text" id="judul" class="form-control" name="judul" value="{{ old('judul', $book->judul) }}" required>
            </div>
            <div class="mb-3 form-group">
                <label for="published_date">Tanggal Terbit</label>
                <input type="date" id="published_date" class="form-control" name="published_date" value="{{ old('published_date', $book->published_date) }}" required>
            </div>
            <div class="mb-3 form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" class="form-control" name="penerbit" value="{{ old('penerbit', $book->penerbit) }}" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
