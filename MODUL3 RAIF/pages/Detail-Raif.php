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
        <a class="nav-link" aria-current="page" href="Home-Raif.php">Home</a>
        <a class="nav-link" href="#">MyCar</a>
      </div>
    </div>
  </div>
</nav>
<!-- navbar akhir -->
<div class="container mt-5">
    <form>
    <div class="row">
        <!-- gambar -->
        <div class="col">
            <div class="d-flex align-items:center mt-2">
            <img src="../assets/pic2.png" class="card-img-top" alt="Innova">
            </div>
        </div>
        <!-- akhir gambar -->
        <!-- detail -->
        <div class="col">
            <form class="mt-5" style="margin-right:250px">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" id="nama_mobil">  
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" class="form-control" id="nama_pemilik">  
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk</label>
                <input type="text" class="form-control" id="merk" placeholder="Silahkan masukan nama merkmu!">  
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" class="form-control" id="tanggal_beli">  
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" class="form-control" id="foto">  
            </div>
            <div>
                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
            </div>
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lunas">
                <label class="form-check-label" for="lunas">Lunas</label>
                <input class="form-check-input ms-5" type="radio" name="flexRadioDefault" id="lunas">
                <label class="form-check-label" for="lunas">Belum Lunas</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            </form>
            <!-- akhir detail -->
        </div>
    </div>
    </div>
    <!-- akhir form -->
<!-- akhir detail -->
<!-- akhir content -->