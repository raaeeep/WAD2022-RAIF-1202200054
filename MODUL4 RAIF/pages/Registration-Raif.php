<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL4 WAD RAIF FAWWAZDZAKY</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="row" style="width:100">
        <div class="col-6">
            <img src="../assets/wallpaper.png" alt="" style="width:650px;height:640px;">
        </div>
        <div class="col-6 px-5" style="margin-top:25px;">
            <h1 class="mb-4">Registration</h1>
            <div class="pe-5">
                <form action="../config/register.php" method="POST">
                <div class="mb-2">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="telkomuniversity@gmail.com">
                </div>
                <div class="mb-2">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Raif">
                </div>
                <div class="mb-2">
                    <label class="form-label">Telephone Number</label>
                    <input type="tel" class="form-control" name="no_hp" placeholder="08123210932">
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password1" placeholder="********">
                </div>
                <div class="mb-2">
                    <label class="form-label">Confirmation Password*</label>
                    <input type="password" class="form-control" name="password2" placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary mt-3" name="register" style="width:100px;">Login</button>
                <p class="mt-2">Sudah punya akun? <a href="Login-Raif.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>