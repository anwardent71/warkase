<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WarKaSe - Masuk</title>

    <!-- FontAwesome CDN -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}" type="text/css">
</head>

<body>
    <div class="left-column">
        <img src="../assets/image/login/shopping.svg" alt="Gambar Vectornya seharusnya">
    </div>
    <div class="right-column">
        <form class="user" action="{{ route('login') }}" method="POST">
            <h1>Masuk</h1>

            {{ csrf_field() }}
            @if(session()->has('pesanBerhasil'))
                <div class="alert alert-success">{{ session()->get('pesanBerhasil') }}</div>
            @endif
            @if(session()->has('pesanGagal'))
                <div class="alert alert-danger">{{ session()->get('pesanGagal') }}</div>
            @endif

            <span>
                <input type="email" name="email" id="email" required autocomplete="off">
                <p>Email</p>
                <label for="email"><i class="fas fa-envelope"></i></label>
            </span>
            <span>
                <input type="password" name="password" id="password" required>
                <p>Kata Sandi</p>
                <label for="kata sandi"><i class="fas fa-lock"></i></label>
            </span>

            <button type="submit" class="btn">Masuk</button>
            <a href="#" class="link">Lupa Kata Sandi ?</a>
            <a href="{{ route('regis') }}" class="link">Belum memiliki akun ? Daftar Sekarang!</a>
        </form>
    </div>

    <!-- Dark Mode JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src="{{ asset('assets/js/dark.js') }}"></script>
</body>

</html>