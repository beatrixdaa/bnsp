<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Tambah Buku</h1>

        <!-- Menampilkan pesan error jika ada -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form untuk menambah buku -->
        <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="author_id" class="form-label">Penulis</label>
                <select class="form-control" name="author_id" id="author_id" required>
                    <option value="">Pilih Penulis</option>
                    @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="mb-3">
                <label for="published_date" class="form-label">Tanggal Terbit</label>
                <input type="date" class="form-control" id="published_date" name="published_date" required>
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary ms-3">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-VkU8t7FSyAheZTbM1pG0NDM4FUMRXAHPL/4GO5cckCbvlZ9Go+1GcT8a0S+NPOyN" crossorigin="anonymous"></script>
</body>

</html>
