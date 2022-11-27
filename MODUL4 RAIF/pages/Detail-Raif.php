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
        <a class="nav-link active" href="ListCar-Raif.php">MyCar</a>
      </div>
    </div>
  </div>
</nav>
<!-- navbar akhir -->
<?php
        include '../config/connect.php';
        $id_mobil = $_GET['id_mobil'];
        $query = "SELECT * FROM showroom_raif_table where id_mobil ='$id_mobil'";
        $show = mysqli_query($connect,$query);
        while ($data = mysqli_fetch_array($show)) {
      ?>

<div class="container mt-5 mb-5">
    <form>
    <div class="row">
        <!-- gambar -->
        <div class="col">
            <div class="d-flex align-items:center mt-2">
            <img src="../assets/upload-img/<?php echo $data['foto_mobil'];?>" class="card-img-top">
            </div>
        </div>
        <!-- akhir gambar -->
        <!-- detail -->
        <div class="col">
            <form class="mt-5" style="margin-right:250px">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" value="<?php echo $data['nama_mobil']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" value="<?php echo $data['pemilik_mobil']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk</label>
                <input type="text" class="form-control" name="merk" value="<?php echo $data['merk_mobil']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" class="form-control" name="tanggal_beli" value="<?php echo $data['tanggal_beli']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" readonly><?php echo $data['deskripsi']; ?></textarea>
            </div>
            <!-- <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" class="form-control" name="foto" value="<?php echo $data['foto_mobil']; ?>" readonly>  
            </div> -->
            <div>
                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
            </div>
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="status" value="<?php echo $data['tanggal_beli']; ?>">
                <label class="form-check-label" for="lunas"><?php echo $data['status']; ?></label>
            </div>
            <a href="../pages/Edit-Raif.php?id_mobil=<?php  echo $data['id_mobil'];?>" class="btn btn-primary" style="width:150px;">Edit</a>
            </form>
            <!-- akhir detail -->
            </div>
        </div>
    </div>

    <?php } ?>

    <!-- akhir form -->
<!-- akhir detail -->
<!-- akhir content -->