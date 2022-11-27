<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: pages/Home-Raif.php");
    exit;
}

require "pages/HomeSebelumLogin-Raif.php";

?>

