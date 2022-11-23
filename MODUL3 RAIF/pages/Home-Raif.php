<?php
$connect = mysqli_connect("localhost","root","","modul3");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL3 WAD RAIF FAWWAZDZAKY</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<body>
</head>
<!-- nabvar     -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="pages/Home-Raif.php">Home</a>
        <a class="nav-link" href="pages/Add-Raif.php">MyCar</a>
      </div>
    </div>
  </div>
</nav>
<!-- navbar akhir -->

<div class="container" style="margin-top:125px;">
  <div class="row align-items-center">
    <div class="col-5">
        <h1>Selamat Datang Di Show Room Raif</h1>
        <p>best car for everybody!</p>
        <!-- <button type="button" class="btn btn-primary">MyCar</button> -->
        <a href="pages/ListCar-Raif.php" class="btn btn-primary">MyCar</a>
        <div class="row align-item-center mt-4">
            <div class="col-sm-3">
                <img src="assets/logo-ead.png" alt="" class="img-fluid" >
            </div>
            <div class="col-sm-8 mt-1" style="">
                <p style="font-size:13px;">Raif Fawwazdzaky_1202200054</p>
            </div>
        </div>
    </div>
    <div class="col-6">
        <img src="assets/pic2.png" alt="" class="img-fluid">
    </div>
  </div>
</div>


</body>
</html>