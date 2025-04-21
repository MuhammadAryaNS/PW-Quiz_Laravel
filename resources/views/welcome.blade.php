<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #8360c3, #2ebf91);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
<div class="card">
    <h2 class="text-center mb-4">Registrasi</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="/register" method="POST" onsubmit="return validateForm()">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Daftar</button>
    </form>
</div>

<script>
    function validateForm() {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if (!name || !email || !password) {
            alert("Semua field harus diisi!");
            return false;
        }
        return true;
    }
</script>
</body>
</html>