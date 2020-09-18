<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WarKaSe | Pendaftaran</title>

    <!-- FontAwesome CDN -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}" type="text/css">
</head>

<body>
    <div class="left-column">
        <img src="../assets/image/register/personalinfo.svg" alt="Gambar Vectornya seharusnya">
    </div>
    <div class="right-column">
        <form class="user" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            <h1>Buat Akun Yuk !</h1>
            <span>
                <input type="text" name="nama" id="nama" required autocomplete="off">
                <p>Nama Lengkap</p>
                <label for="name"><i class="fas fa-user"></i></label>
            </span>
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
            <span>
                <input type="file" class="form-control-file" name="gambar" id="gambar">
            </span>
            <input type="hidden" name="id_level">
            
            <button type="submit" class="btn-daf">Daftar Sekarang</button>
            <a href="{{ url('/login') }}" class="link">Sudah memiliki akun ? Masuk!</a>
        </form>
    </div>

    <!-- Dark Mode JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src="{{ asset('assets/js/dark.js') }}"></script>
</body>

</html>
