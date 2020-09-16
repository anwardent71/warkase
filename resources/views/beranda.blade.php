<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda WarKaSe</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ ('assets/css/welcome.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

</head>
<style>
    
</style>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand">WarKaSe</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Murah, Sehat, Cepat, Halal.</h1>
            <h6 class="kecil">Warung Kantin Sekolah</h6>
            <a href="{{ url('/login') }}" class="btn btn-primary tombol">Belanja Sekarang</a>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container">

        <!-- Panel -->
        <div class="row justify-content-center">
            <div class="col-12 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="{{ ('assets/image/beranda/murah.png') }}" alt="ada gambarnya nanti tapi" class="float-left">
                        <h4>Harga Murah</h4>
                        <p>Semua Jajanan yang ada di warkase ini dijamin gabikin kantong kamu bolong lebih besar.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ ('assets/image/beranda/sehat.png') }}" alt="" class="float-left">
                        <h4>Terjamin Kesehatannya</h4>
                        <p>Semua Jajanan di warkase ini dijamin kesehatannya.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ ('assets/image/beranda/cepat.png') }}" alt="" class="float-left">
                        <h4>Cepat</h4>
                        <p>Cepat dalam pengiriman dan Cepat dalam pembuatan, jadi kamu gaperlu risau menunggu lama.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ ('assets/image/beranda/halal.jpg') }}" alt="" class="float-left">
                        <h4>Halal</h4>
                        <p>Semua Jajanan di warkase ini Dijamin Halal.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Panel -->
    </div>
    <!-- Akhir Container -->
</body>

    <!-- Bootstrtap JS CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>