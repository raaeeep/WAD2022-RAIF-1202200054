<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL3 WAD RAIF FAWWAZDZAKY</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
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
        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        <a class="nav-link active" href="Add-Raif.php">MyCar</a>
        <a href="Add-Raif.php" style="width: 100px;position:relative;left:1000px;" class="btn btn-light fw-bold">Add Car</a>
      </div>
    </div>
  </div>
</nav>
<!-- navbar akhir -->

<div class="container mt-5 px-5">
    <h1>My Showroom</h1>
    <p>List Showroom RAIF - 1202200054</p>
    <div class="row">
      <?php
        include '../config/connect.php';
        $query = "SELECT * FROM showroom_raif_table ORDER BY id_mobil ASC";
        $show = mysqli_query($connect,$query);
        while ($data = mysqli_fetch_array($show)) {
      ?>
          <div class="col">
            <div class="card mt-2" style="width: 18rem;margin-bottom:25px;">
              <img src="../assets/upload-img/<?php echo $data['foto_mobil'];?>" class="card-img-top"  style="min-height:200px;">
              <div class="card-body"  style="max-height:200px;">
                <h5 class="card-title"><?php echo $data['nama_mobil'];?></h5>
                <p class="card-text"><?php echo $data['deskripsi'];?></p>
                <div class="container px-5">
                  <a href="../pages/Detail-Raif.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-primary">Detail</a>
                  <a href="../config/delete.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-danger">Delete</a>
                </div>
              </div>
            </div>
          </div>
        <?php  } ?>
    </div>
    <?php
  
    $carData = mysqli_query($connect,"SELECT * FROM showroom_raif_table");
    $countCar = mysqli_num_rows($carData);

    ?>
    <div class="container mt-5">
        <p class="fw-bold opacity-50 fixed-bottom px-3">Jumlah Mobil : <?php echo "$countCar" ?></p>
    </div>
</div>


</body>
</html>