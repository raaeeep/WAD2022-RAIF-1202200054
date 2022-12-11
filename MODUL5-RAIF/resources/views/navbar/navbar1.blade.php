<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $title)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- nabvar     -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto mb-lg-0">
            <a class="nav-link active" href="">Home</a>
            <a class="nav-link" href="{{ route('showroom.create') }}">MyCar</a>
        </div>
        <div class="navbar-nav ms-auto mb-lg-0">
        <!-- dropdown box -->
        <a class="btn btn-light text-primary" href="Add-Raif.php" role="button" style="margin-right:15px;">Add Car</a>
            <div class="dropdown">
            <button class="btn btn-light dropdown-toggle text-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="">Profile</a></li>
                <li><a class="dropdown-item" href="">Logout</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </nav>
    <!-- navbar akhir -->
        @yield('content')
  </body>
</html>