<?php
    include 'connect.php';

    $id= $_GET['id_mobil'];
    $query = mysqli_query($connect,"SELECT * FROM showroom_raif_table where id_mobil ='$id'");
    $data = mysqli_fetch_assoc($query);
    $foto = $data['foto_mobil'];

        if(file_exists("../assets/upload-img/$foto")){
            unlink("../assets/upload-img/$foto");
            if(isset($_GET['id_mobil'])){
                mysqli_query($connect, "DELETE FROM showroom_raif_table WHERE id_mobil='$_GET[id_mobil]'");
            }
        }
        echo "Data Telah Terhapus";
        echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Raif.php'>";
        echo "";

?>