<?php

// require "pages/Home-Raif.php";

$connect = mysqli_connect("localhost","root","","modul3new");
// echo var_dump($connect);

$sql=mysqli_query($connect, "SELECT * FROM showroom_raif_table WHERE id_mobil='$_GET[id_mobil]'");
$data = mysqli_fetch_array($sql);

if(isset($_POST['submit'])){
    mysqli_query($connect, "UPDATE showroom_raif_table set
    nama_mobil = '$_POST[nama_mobil]',
    pemilik_mobil = '$_POST[pemilik_mobil]',
    merk_mobil = '$_POST[merk_mobil]',
    tanggal_beli = '$_POST[tanggal_beli]',
    deskripsi = '$_POST[deskripsi]'
    WHERE id_mobil = '$_GET[id_mobil]'");

    echo "Data Berhasil Diubah!";
    echo "<meta http-equiv=refresh content=2;URL='lihatdata.php'>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAD AUDIT M3</title>
</head>
<body>

<h3>TAMBAH DATA MOBIL</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="200">nama_mobil</td>
            <td><input type="text" name="nama_mobil" id="nama_mobil" value="<?php echo $data['nama_mobil']; ?>"></td>
        </tr>
        <tr>
            <td width="200">pemilik_mobil</td>
            <td><input type="text" name="pemilik_mobil" id="pemilik_mobil" value="<?php echo $data['pemilik_mobil']; ?>"></td>
        </tr>
        <tr>
            <td width="200">merk_mobil</td>
            <td><input type="text" name="merk_mobil" id="merk_mobil" value="<?php echo $data['merk_mobil']; ?>"></td>
        </tr>
        <tr>
            <td width="200">tanggal_beli</td>
            <td><input type="date" name="tanggal_beli" id="tanggal_beli" value="<?php echo $data['tanggal_beli']; ?>"></td>
        </tr>
        <tr>
            <td width="200">deskripsi</td>
            <td><input type="text" name="deskripsi" id="deskripsi" value="<?php echo $data['deskripsi']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save" name="submit"></td>
        </tr>
    </table>


</form>
    
</body>
</html>