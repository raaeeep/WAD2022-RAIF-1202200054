<?php
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: Login-Raif.php");
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
<body>
</head>
<!-- nabvar     -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto mb-lg-0">
        <a class="nav-link active" href="../index.php">Home</a>
        <a class="nav-link" href="ListCar-Raif.php">MyCar</a>
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

<div class="container mt-5 mb-5">
    <form>
        <h1>Profile</h1>
        <!-- detail -->
        <div class="col">
            <form class="mt-5" style="margin-right:250px">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email'];?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label fw-bold">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['nama'];?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Handphone Number</label>
                <input type="text" class="form-control" name="no_hp" value="<?php echo $_SESSION['no_hp'];?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" name="password" value="" readonly>  
            </div>
            <a href="" class="btn btn-primary" style="width:150px;">Edit</a>
            </form>
            <!-- akhir detail -->
            </div>
        </div>
    </div>


</body>
</html>