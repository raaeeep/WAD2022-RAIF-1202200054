<?php
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: Login-Raif.php");
  exit;
}

include "../config/connect.php";
$carData = mysqli_query($connect,"SELECT * FROM showroom_raif_table");
$countCar = mysqli_num_rows($carData);

if($countCar <= 0){
  header("Location: Add-Raif.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL4 WAD RAIF FAWWAZDZAKY</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
        <a class="nav-link" href="../index.php">Home</a>
        <a class="nav-link active" href="ListCar-Raif.php">MyCar</a>
      </div>
      <div class="navbar-nav ms-auto mb-lg-0">
      <!-- dropdown box -->
      <a class="btn btn-light text-primary" href="Add-Raif.php" role="button" style="margin-right:15px;">Add Car</a>
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle text-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
          <?php echo $_SESSION['nama'];?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="Profile-Raif.php">Profile</a></li>
            <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
          </ul>
        </div>
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