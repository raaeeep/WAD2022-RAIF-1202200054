<?php
    include 'connect.php';
    
    if(isset($_GET['id_mobil'])){
        mysqli_query($connect, "DELETE FROM showroom_raif_table WHERE id_mobil='$_GET[id_mobil]'");
    
        echo "Data Telah Terhapus";
        echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Raif.php'>";
    }
?>