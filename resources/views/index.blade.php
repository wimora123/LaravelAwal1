<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Di folder public ya baru mau jalan -->
    <link rel="stylesheet" type="text/css" href="{{  URL::asset('assets/css/main.css')  }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbarMenu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link  {{ (request()->is('home')) ? 'activeBack' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  {{ (request()->is('about')) ? 'activeBack' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  {{ (request()->is('contact')) ? 'activeBack' : '' }}" href="/contact">Contact</a>
                </li>
              </ul>
            </div>
        </nav>
    </div>

    @yield('konten')

    <div class="container bg-danger">
      <h4>Bitnami 2021</h4>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{  URL::asset('assets/js/jquery-3.2.1.slim.min.js')  }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>