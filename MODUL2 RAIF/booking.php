<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE EAD</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>

<?php
    if (isset($_POST["booking"])) {
        $mobil = $_POST["booking"];
        if ($mobil == "innova") { 
            $image = "assets/pic1.jpg";
        }elseif ($mobil == "fortuner") {
            $image = "assets/pic2.png";
        }elseif ($mobil == "koenigsegg") {
            $image = "assets/pic3.png";
        }
    }else{
        $mobil = "jenisMobil";
        $image = "assets/pic1.jpg";
    }
?>

    <!-- navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center d-flex" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking.php">Booking</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- akhir navbar -->

    <!-- JUDUL -->
    <br>
    <h2 style="text-align:center">Rent your car now!</h2>
    <!-- akhir judul -->

    <!-- form -->
    <div class="container">
    <form action ="mybooking.php" method ="POST">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items:center">
            <img src="assets/pic1.jpg" class="card-img-top" alt="Innova">
            </div>
        </div>
        <div class="col">
        <form action="mybooking.php" method="POST" class="row g-3">
            <div class="col-12">
              <label for="inputName" class="form-label">Nama</label>
              <input type="text" class="form-control" name="name" placeholder="NAMA_NIM">
            </div>
            <div class="col-12">
              <label for="inputDate" class="form-label">Book Date</label>
              <input type="date" class="form-control" name="bookDate" placeholder="dd/mm/yyyy">
            </div>
            <div class="col-12">
              <label for="inputTime" class="form-label">Start Time</label>
              <input type="time" class="form-control" name="startTime" placeholder="">
            </div>
            <div class="col-12">
              <label for="inputDuration" class="form-label">Duration (Days After)</label>
              <input type="number" class="form-control" name="duration">
            </div>
            
            <label for="exampleFormControlInput1" class="form-label">Car Type </label>
                <?php
                    if (empty($_GET["image"])) {
                    ?>
                        <div class="form-group col-12">
                            <select class="form-select" name="TipeMobil" value="TipeMobil" id="TipeMobil">
                                <option selected>Choose...</option>
                                <option value="innova">Toyota Kijang Innova</option>
                                <option value="fortuner">Toyota Fortuner Model Y</option>
                                <option value="koenigsegg">Koenigsegg Agera RS</option>
                            </select>
                        </div>
                    <?php } else { ?>
                        <div>
                            <select class="form-select" name="TipeMobil" id="TipeMobil">
                            <option >Choose...</option>
                            <option <?php if ($mobil == "innova") {echo "selected";} ?> value="kijangInnova">Toyota Kijang Innova</option>
                            <option <?php if ($mobil  == "fortuner") {echo "selected";} ?> value="fortunerModelY">Toyota Fortuner</option>
                            <option <?php if ($mobil == "koenigsegg") {echo "selected";} ?> value="koenigseggAgera">Koenigsegg Agera RS</option>
                            </select>
                        </div>
                    <?php } ?>

            <div class="col-12">
                <label for="inputName" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phoneNumber" placeholder="">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Health Protocol" name="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Health Protocol /Rp25.000
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Driver" name="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Driver /Rp100.000
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Full Filled" name="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Full Filled /Rp250.000
                </label>
              </div>
            </div>
            <div class="col-12 d-grid gap-2">
              <button type="submit" class="btn btn-success">Book</button>
            </div>
          </form>
        </div>
    </div>
    </div>
    <br>
    <!-- akhir form -->

    <!-- footer -->
    <footer class ="bg-light">
        <p class ="text-center"> Created by Raif _1202200054 </p>
    </footer>
    <!-- akhir footer -->

</body>
</html>