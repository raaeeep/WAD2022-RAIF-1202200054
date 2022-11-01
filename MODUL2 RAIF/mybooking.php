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
  $BookingNumber = $_POST[""];
  $name = $_POST["name"];
  $bookDate = $_POST["bookDate"];
  $startTime = $_POST["startTime"];
  $duration = $_POST["duration"];
  $TipeMobil = $_POST["TipeMobil"];
  $phoneNumber = $_POST["phoneNumber"];
  $gridCheck = $_POST["gridCheck"];
  $price = $_POST["price"];
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

    <!-- table -->
    <div class="container">
        <h1 class="text-center">THANKS <?php echo $name ?></h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope=col>Booking Number</th>
                    <th scope=col>Name</th>
                    <th scope=col>Check In</th>
                    <th scope=col>Check Out (Days After)</th>
                    <th scope=col>Car Type</th>
                    <th scope=col>Phone Number</th>
                    <th scope=col>Service(s)</th>
                    <th scope=col>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <td><?php echo $BookingNumber ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $bookDate ?></td>
                <td><?php echo $duration ?></td>
                <td><?php echo $TipeMobil ?></td>
                <td><?php echo $phoneNumber ?></td>
                <td><?php echo $gridCheck ?></td>
                <td><?php echo $price ?></td>
            </tbody>
        </table>
    </div>
    <!-- akhir table -->

    <!-- footer -->
    <footer class ="bg-light fixed-bottom">
        <p class ="text-center"> Created by Raif _1202200054 </p>
    </footer>
    <!-- akhir footer -->