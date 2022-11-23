<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL3 WAD RAIF FAWWAZDZAKY</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<!-- nabvar     -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        <a class="nav-link" href="ListCar-Raif.php">MyCar</a>
      </div>
    </div>
  </div>
</nav>
<!-- navbar akhir -->

<!-- form -->
<div class="container mt-5 px-3" style="margin-bottom:100px">
    <h3 class="fw-bold">Tambah Mobil</h3>
    <p>Tambah Mobil Baru Anda ke List Show Room</p>
        <form action="../config/insert.php" method="POST" class="mt-5" style="margin-right:250px" enctype="multipart/form-data">
            <!-- NAMA MOBIL -->
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" placeholder="Silahkan masukan nama mobilmu!">
            </div>
            <!-- NAMA MOBIL -->
            <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Pemilik Mobil</label>
                <input type="text" class="form-control" name="pemilik_mobil" placeholder="Silahkan masukan nama mobilmu!">
            </div>
            <!-- MERK MOBIL -->
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk Mobil</label>
                <input type="text" class="form-control" name="merk" placeholder="Silahkan masukan nama mobilmu!">
            </div>
            <!-- TANGGAL BELI MOBIL -->
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli Mobil</label>
                <input type="date" class="form-control" name="tanggal_beli" placeholder="">
            </div>
            <!-- DESKRIPSI MOBIL -->
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi Mobil</label>
                <textarea class="form-control" name="deskripsi" rows="3" 
                    placeholder="Contoh: Mobil ini adalah yang terbaik dimasanya ..." required></textarea>
            </div>
            <!-- FOTO MOBIL -->
            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <!-- STATUS -->            
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="status" value="lunas">
                <label class="form-check-label" for="lunas">Lunas</label>
                <input class="form-check-input ms-5" type="radio" name="status" value="belum lunas">
                <label class="form-check-label" for="lunas">Belum Lunas</label>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Selesai</button>
        </form>
</div>
<!-- akhir form -->

</body>
</html>