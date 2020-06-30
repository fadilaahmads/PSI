
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>home</title>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <!--styles-->
    <style>
    html, body {
                font-family:'IBM Plex Sans', sans-serif;
                background-color: #a6dcef;
            }
    </style>
  </head>
  <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="#">XploreJogja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Pendapatan</a>
            <a class="nav-item nav-link" href="/pengeluaran">Pengeluaran</a>
            <a class="nav-item nav-link" href="#">Pengunjung</a>
          </div>
        </div>
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
      </div>
      </nav> 



<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">XploreJogja</h1>
    <p>Menyajikan data-data </p>
  </div>
</div>


<div class="container">
  <div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PENDAPATAN</h5>
        <p class="card-text">Menampilkan data banyaknya pendapatan tempat wisata </p>
        <a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PENGELUARAN</h5>
        <p class="card-text">Menampilkan data banyaknya pengeluaran tempat wisata </p>
        <a href="/pengeluaran" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PENGUNJUNG</h5>
        <p class="card-text">Menampilkan data kategori umur pengunjung tempat wisata </p>
        <a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
