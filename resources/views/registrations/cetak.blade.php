<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Registrasi Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .card {
            max-width: 800px;
            margin: 20px auto;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .table {
            margin-bottom: 0;
        }
        .table th, .table td {
            padding: 12px 15px;
            vertical-align: middle;
        }
        .img-center {
            display: block;
            margin: 20px auto;
            max-width: 128px; /* Sesuaikan ukuran gambar */
        }
        @media print {
            body {
                background: white;
                -webkit-print-color-adjust: exact;
            }
            .btn, .navbar, .footer {
                display: none !important;
            }
            .card {
                border: none;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Heading Section -->
        <div class="mb-4 text-center">
            <!-- Gambar buku di tengah -->
            <img src="{{ public_path('buku.png') }}" alt="Gambar Buku" class="img-center" />
            <h1 class="mt-3 fw-bold">Kartu Registrasi Peminjaman Buku</h1>
        </div>
                   <!-- Registration Details -->
                <h3 class="mb-4 text-center text-success">Detail Informasi</h3>
                <table class="table text-center table-bordered">
                    <tbody>
                        <tr>
                            <th>ID Pendaftaran</th>
                            <td>{{ $member->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>{{ $member->nama }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $member->email }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td>{{ $member->no_telepon }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $member->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>{{ $member->agama->nama }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $member->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Status Anggota</th>
                            <td>{{ $member->status_anggota }}</td>
                        </tr>
                        <tr>
                            <th>Judul Buku</th>
                            <td>{{ $member->judul_buku }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Pinjam</th>
                            <td>{{ $member->tanggal_pinjam }}</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Action Buttons -->
                <div class="mt-4 text-center">
                    <button class="btn btn-outline-success" onclick="window.print()">
                        <i class="bi bi-printer-fill"></i> Cetak
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-VkU8t7FSyAheZTbM1pG0NDM4FUMRXAHPL/4GO5cckCbvlZ9Go+1GcT8a0S+NPOyN"
            crossorigin="anonymous"></script>
</body>
</html>
