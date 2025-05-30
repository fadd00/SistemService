<!DOCTYPE html>
<html lang="id">
<head>
<!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the description -->
    <meta name="description" content="Coupmy-Coupons, Affiliates, Offers, Deals, Discounts &amp; Marketplace HTML Template">
    <!-- set the Keyword -->
    <meta name="keywords" content="">
    <meta name="author" content="Coupmy-Coupons, Affiliates, Offers, Deals, Discounts &amp; Marketplace HTML Template">
    <title>Coupmy-Coupons, Affiliates, Offers, Deals, Discounts &amp; Marketplace HTML Template</title>
    <!-- include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CPoppins:300,400,500,600,900%7CLily+Script+One" rel="stylesheet">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f4f4f4; margin: 0; }
        .login-container { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        .login-container h2 { text-align: center; margin-bottom: 20px; color: #333; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; color: #555; }
        .form-group input[type="text"],
        .form-group input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        .form-group input[type="checkbox"] { margin-right: 5px; }
        .form-group .error-message { color: red; font-size: 0.9em; margin-top: 5px; }
        .btn-submit { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        .btn-submit:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Akun</h2>

        {{-- Menampilkan error validasi umum atau error login --}}
        @if ($errors->has('username') || $errors->has('email'))
            <div class="form-group">
                <p class="error-message">{{ $errors->first('username') ?: $errors->first('email') }}</p>
            </div>
        @endif
         @if ($errors->has('password') && !$errors->has('username') && !$errors->has('email') )
             <div class="form-group">
                <p class="error-message">{{ $errors->first('password') }}</p>
            </div>
        @endif


        <form method="POST" action="{{ route('login.submit') }}">
            @csrf {{-- Token CSRF untuk keamanan --}}

            <div class="form-group">
                <label for="username">Username</label> {{-- Ganti jadi 'Email' jika menggunakan email --}}
                <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
                {{-- Jika menggunakan email, ganti name dan id menjadi 'email' dan type menjadi 'email' --}}
                {{-- <label for="email">Email</label> --}}
                {{-- <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus> --}}
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Ingat Saya</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-submit">Login</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>