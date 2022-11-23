<?php
$connect = mysqli_connect("localhost","root","","modul3new");
if(isset($_GET['id_mobil'])){
    mysqli_query($connect, "DELETE from showroom_raif_table where id_mobil='$_GET[id_mobil]'");

    echo "Data Telah Terhapus";
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

<h3>LIST MOBIL</h3>

<table border="1.5">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
        <th>Pemilik Mobil</th>
        <th>Merk Mobil</th>
        <th>Tanggal Beli Mobil</th>
        <th>Deskripsi Mobil</th>
        <th colspan="2">Action</th>
    </tr>

    <?php
    
    $ambildata = mysqli_query($connect, "SELECT * from showroom_raif_table");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo" 
        <tr>
            <td>$tampil[id_mobil]</td>
            <td>$tampil[nama_mobil]</td>
            <td>$tampil[pemilik_mobil]</td>
            <td>$tampil[merk_mobil]</td>
            <td>$tampil[tanggal_beli]</td>
            <td>$tampil[deskripsi]</td>
            <td><a href='ubahdata.php?id_mobil=$tampil[id_mobil]'>Edit</a></td>
            <td><a href='?id_mobil=$tampil[id_mobil]'>Delete</a></td>
        </tr>
        ";
    }

    ?>
</table>
    
</body>
</html>