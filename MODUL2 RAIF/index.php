<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE EAD</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>

<?php 
  $img_src = ["assets/pic1.jpg", "assets/pic2.png", "assets/pic3.png"];
?>

    <!-- navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center d-flex" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking.php">Booking</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- akhir navbar -->

    <!-- JUDUL -->
    <br>
    <h2 style="text-align:center">WELCOME TO EAD RENT</h2>
    <p style="text-align:center">Find your best deal here!</p>
    <!-- akhir judul -->

    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-bg-light">
                    <div class="row">
                        <div class="col">
                        <img src=<?=$img_src[0]?> class="card-img-top" alt="Innova">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Kijang Innova</h5>
                            <p class="card-text">Rp 200.000 / Day</p>
                          </div>
                          <div class="text-primary">
                            <ul class="list-group list-group-flush text-center">
                              <li class="list-group-item text-primary">7 Kursi</li>
                              <li class="list-group-item text-primary">1500 cc</li>
                              <li class="list-group-item text-primary">Manual</li>
                              <li class="list-group-item text-bg-light mb-3"></li>
                            </ul>
                            </div>
                            <div class="card-body text-bg-light mb-3 text-center">
                                <a href="booking.php" class="btn btn-primary">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-light">
                    <div class="row">
                        <div class="col">
                        <img src=<?=$img_src[1]?> class="card-img-top" alt="Fortuner">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Fortuner Model Y</h5>
                            <p class="card-text">Rp 500.000 / Day</p>
                          </div>
                          <div class="text-primary">
                            <ul class="list-group list-group-flush text-center">
                              <li class="list-group-item text-primary">7 Kursi</li>
                              <li class="list-group-item text-primary">2755 cc</li>
                              <li class="list-group-item text-primary">Manual</li>
                              <li class="list-group-item text-bg-light mb-3"></li>
                            </ul>
                            </div>
                            <div class="card-body text-bg-light mb-3 text-center">
                                <a href="booking.php" class="btn btn-primary">Book now</a>
                            </div>
                        </div>           
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-light">
                    <div class="row">
                        <div class="col">
                        <img src=<?=$img_src[2]?> class="card-img-top" alt="Koenigsegg">
                          <div class="card-body">
                            <h5 class="card-title">Koenigsegg Agera RS</h5>
                            <p class="card-text">Rp 900.000 / Day</p>
                          </div>
                          <div class="text-primary">
                            <ul class="list-group list-group-flush text-center">
                              <li class="list-group-item text-primary">2 Kursi</li>
                              <li class="list-group-item text-primary">5000 cc</li>
                              <li class="list-group-item text-primary">Manual</li>
                              <li class="list-group-item text-bg-light mb-3"></li>
                            </ul>
                            </div>
                            <div class="card-body text-bg-light mb-3 text-center">
                                <a href="booking.php" class="btn btn-primary">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <br>
    <!-- akhir content -->

    <!-- footer -->
    <footer class ="bg-light">
        <p class ="text-center"> Created by Raif _1202200054 </p>
    </footer>
    <!-- akhir footer -->

</body>
</html>