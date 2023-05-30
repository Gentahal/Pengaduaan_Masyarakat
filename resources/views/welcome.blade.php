<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style>
            body {
                background-image: url(.../imag);
                background-color: #1d7a4a;
            }
            .navbar-brand {
                font-weight: bold;
            }
            .jumbotron {
                background-color: #fff;
                padding: 4rem 2rem;
                border-radius: 0.5rem;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
            }
            .jumbotron h1 {
                font-size: 3rem;
                font-weight: bold;
            }
            .jumbotron p {
                font-size: 1.2rem;
            }
        </style>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-blue">
            <div class="container">
              <a class="navbar-brand text-white" href="/">Pengaduan Masyarakat</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                @guest
                  <li class="nav-item">
                    <a class="nav-link text-white btn btn-outline-warning " href="{{ route('login') }}">Masuk</a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">Daftar</a>
                  </li>
                  @endif
                </ul>
                @endguest
              </div>
            </div>
          </nav>
        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang di Pengaduan Masyarakat</h1>
                <p class="lead">Laporkan masalah dan keluhan Anda kepada kami.</p>
                <hr class="my-4">
                <p>Anda dapat mengajukan pengaduan tentang berbagai masalah yang Anda hadapi dalam masyarakat.</p>
                <a class="btn btn-warning text-white btn-lg" href="/login" role="button">Buat Pengaduan</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>


</html>
