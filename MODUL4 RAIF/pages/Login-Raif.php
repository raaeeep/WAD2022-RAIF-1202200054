<?php
session_start();

// cek cookie
if(isset($_COOKIE['login'])) {
    if($_COOKIE['login'] == 'true' ) {
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header("Location: Home-Raif.php");
    exit;
}

include "../config/connect.php";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, " users_raif WHERE
        email = '$email'");


// cek email
if(mysqli_num_rows($result) === 1) {
    
    // cek password
    $row = mysqli_fetch_assoc($result);

    $_SESSION["id"] = $row["id"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["nama"] = $row["nama"];
    $_SESSION["no_hp"] = $row["no_hp"];
    
    if ( password_verify($password, $row["password"])){

        // // set session
        $_SESSION["login"] = true;

        // cek remember me
        if(isset($_POST['remember'])) {
            // buat cookie
            setcookie('login', 'true', time()+60);
        }
        
        header("Location: Home-Raif.php");
        exit;
    }
}

$error = true;

}

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="xaviewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL4 WAD RAIF FAWWAZDZAKY</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="row">
        <div class="col-6">
            <img src="../assets/wallpaper.png" alt="" style="width:650px;height:640px;">
        </div>
        <div class="col-6 px-5" style="margin-top:150px;">
            <h1>Login</h1>
            <div class="pe-5">
                <form action="" >
                    <!-- cek error -->
                    <?php if(isset($error)): ?>
                        <p style="color:red;font-style:italic;">Email / Password Salah</p>
                    <?php endif; ?>
                    <!-- form login -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="remember">Remember me</label>
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                </div>
                <button type="submit" name="login" class="btn btn-primary mt-3" style="width:100px;">Login</button>
                <p class="mt-2">Anda belum punya akun? <a href="Registration-Raif.php">Daftar</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>