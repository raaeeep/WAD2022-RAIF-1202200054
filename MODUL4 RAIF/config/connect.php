<?php

$connect = mysqli_connect("localhost","root","","modul3");

if($connect == false){
    die('gagal mengkoneksikan ke database:'.mysqli_connect_error());
}

?>