<?php
// connect database
$connect = mysqli_connect("localhost","root","","modul3");

if($connect == false){
    die('gagal mengkoneksikan ke database:'.mysqli_connect_error());
}


if (isset($_POST["submit"])) {
    // add data
    $nama_mobil = $_POST["nama_mobil"];
    $pemilik_mobil = $_POST["pemilik_mobil"];
    $merk = $_POST["merk"];
    $tanggal_beli = $_POST["tanggal_beli"];
    $deskripsi = $_POST["deskripsi"];
    $status = $_POST["status"];
    $foto = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    $folder = '../assets/upload-img/';

    move_uploaded_file($source, $folder.$foto);

    $query = "insert into showroom_raif_table values ('', '$nama_mobil', '$pemilik_mobil', $merk, '$tanggal_beli', '$deskripsi', '$foto', '$status')";
    mysqli_query($connect, $query);

    //cek berhasil atau tidak?
    if (mysqli_affected_rows($connect) >= 1) {
        echo "
        <script>
            alert('Mobil Berhasil Ditambahkan! :)');
            document.location.href = '../index.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Gagal Ditambahkan!')
        </script>";
    }
}
?>

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
        <a class="nav-link" aria-current="page" href="Home-Raif.php">Home</a>
        <a class="nav-link active" href="Add-Raif.php">MyCar</a>
      </div>
    </div>
  </div>
</nav>
<!-- navbar akhir -->

<!-- form -->
<div class="container mt-5 px-3" style="margin-bottom:100px">
    <h3 class="fw-bold">Tambah Mobil</h3>
    <p>Tambah Mobil Baru Anda ke List Show Room</p>
    <form action="POST" class="mt-5" style="margin-right:250px">
    <div class="mb-3">
        <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
        <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" placeholder="Silahkan masukan nama mobilmu!">  
    </div>
    <div class="mb-3">
        <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik</label>
        <input type="text" class="form-control" name="pemilik_mobil" id="pemilik_mobil" placeholder="Silahkan masukan namamu!">  
    </div>
    <div class="mb-3">
        <label for="merk" class="form-label fw-bold">Merk</label>
        <input type="text" class="form-control" name="merk" id="merk" placeholder="Silahkan masukan nama merkmu!">  
    </div>
    <div class="mb-3">
        <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
        <input type="date" class="form-control" name="tanggal_beli" id="tanggal_beli">  
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" 
        placeholder="Contoh: Mobil ini adalah yang terbaik dimasanya ..." required></textarea>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label fw-bold">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto">  
    </div>
    <div>
        <label for="status" class="form-label fw-bold">Status Pembayaran</label>
    </div>
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