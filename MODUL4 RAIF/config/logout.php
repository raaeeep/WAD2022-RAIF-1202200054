<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../pages/Login-Raif.php");
exit;

?>