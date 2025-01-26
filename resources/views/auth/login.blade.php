<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="p-4 shadow-lg card" style="max-width: 400px; width: 100%;">
            <h2 class="mb-4 text-center">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mt-3">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Register Link -->
            <div class="mt-4 text-center">
                <p class="mb-0">Belum punya akun?
                    <a href="{{ route('register') }}" class="text-primary text-decoration-none">Register di sini</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-dyB5qkHkGmhK9m5tYjtgXeVj1kkR/4jzwulHoSOdA1KPHaK9WlP7fN4azV7I+WFK" crossorigin="anonymous"></script>
</body>
</html>
