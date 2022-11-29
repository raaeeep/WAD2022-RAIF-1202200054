<?php
include "connect.php";

if (isset($_POST['register'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $no_hp = $_POST['no_hp'];

    $check_user = mysqli_query($connect, "SELECT * FROM users_raif WHERE email = '$email'");
    $check_login = mysqli_num_rows($check_user);

    if ($check_login > 0) {
        echo "<script>
            alert('email telah terdaftar');
            window.location = '../pages/Registration-Raif.php';
        </script>";
    }else{
        if ($password1 != $password2) {
            echo "<script>
            alert('Password tidak sesuai!');
            window.location = '../pages/Registration-Raif.php';
        </script>";
        }else{
            // encrypt password
            $password = password_hash($password1,PASSWORD_DEFAULT);

            // masukan data
            mysqli_query($connect, " users_raif VALUES ('','$nama','$email','$password','$no_hp')");
            echo "<script>
            alert('Registrasi Berhasil!');
            window.location = 'Login-Raif.php';
        </script>";
        }
    }
}

?>