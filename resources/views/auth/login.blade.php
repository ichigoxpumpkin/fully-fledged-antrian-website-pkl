<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USDI Service - Universitas Udayana</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f1f1f1;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            text-align: center;
            color: #0044cc;
            margin-bottom: 20px;
        }

        .login-title img {
            width: 80px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #0044cc;
            border-color: #0044cc;
        }

        .btn-primary:hover {
            background-color: #003bb3;
            border-color: #003bb3;
        }

        .text-primary {
            color: #0044cc !important;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box shadow-sm border rounded-5 border-primary">
            <div class="login-title">
                <img src="logo_Universitas-Udayana-thumb.png" alt="Universitas Udayana">
                <h2>USDI Service</h2>
            </div>
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form method="post" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control bg-info bg-opacity-10 border border-primary @error('email') is-invalid @enderror" name="email" id="email" autofocus value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control bg-info bg-opacity-10 border border-primary @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
