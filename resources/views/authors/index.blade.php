<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Menambahkan CSS untuk DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

    <!-- Menambahkan jQuery dan DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <div class="container">
        <h2>Data Anggota </h2>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (Session::has('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <!-- Tombol Tambah Author -->
                <a href="{{ route('authors.create') }}" class="mb-3 btn btn-primary float-end">Tambah Anggota</a>

                <!-- Tombol Mengarah ke halaman buku -->
                <a href="{{ route('books.index') }}" class="mb-3 btn btn-secondary float-start">Lihat Data Buku</a>

                <!-- Tombol Mengarah ke halaman registrasi -->
                <a href="{{ route('registrations.index') }}" class="mx-2 mb-3 btn btn-success float-start">Lihat Data Registrasi</a>

                <!-- Tabel dengan class datatable -->
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="1">ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th width="1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td>{{ $author->nama }}</td>
                            <td>{{ $author->alamat }}</td>
                            <td>{{ $author->no_telepon }}</td>
                            <td>
                                <div class="gap-2 d-flex">
                                    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <div>
                                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Yakin mau dihapus?')" type="submit"
                                                class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Inisialisasi DataTables -->
    <script>
        $(document).ready(function () {
            $('.datatable').DataTable(); // Menggunakan class .datatable untuk DataTables
        });
    </script>
</body>

</html>
