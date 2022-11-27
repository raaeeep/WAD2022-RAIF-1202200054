<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $direktori= "../assets/upload-img/";
    $file=$_FILES['foto']['name'];
    
    mysqli_query($connect, "INSERT INTO showroom_raif_table set
    nama_mobil = '$_POST[nama_mobil]',
    pemilik_mobil = '$_POST[pemilik_mobil]',
    merk_mobil = '$_POST[merk]',
    tanggal_beli = '$_POST[tanggal_beli]',
    deskripsi = '$_POST[deskripsi]',
    status = '$_POST[status]',
    foto_mobil = '$file'");

    move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file);

    // mysqli_query($connect, "INSERT INTO showroom_raif_table SET foto_mobil='$file'");

    // echo "Mobil Telah Tersimpan";
    // echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Raif.php'>";
    echo "<script>
        alert('Data Mobil Berhasil Ditambahkan!');
        window.location = '../pages/ListCar-Raif.php';
    </script>";
}

// echo var_dump($connect);

?>