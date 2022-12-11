@extends('navbar/navbar1')
@section('content')

<div class="container" style="margin-top:125px;">
  <div class="row align-items-center">
    <div class="col-5">
        <h1>Selamat Datang Di Show Room Raif</h1>
        <p>best car for everybody!</p>
        <!-- <button type="button" class="btn btn-primary">MyCar</button> -->
        <a href="ListCar-Raif.php" class="btn btn-primary">MyCar</a>
        <div class="row align-item-center mt-4">
            <div class="col-sm-3">
                <img src="../assets/logo-ead.png" alt="" class="img-fluid" >
            </div>
            <div class="col-sm-8 mt-1">
                <p style="font-size:13px;">Raif Fawwazdzaky_1202200054</p>
            </div>
        </div>
    </div>
    <div class="col-6">
        <img src="../assets/pic2.png" alt="" class="img-fluid">
    </div>
  </div>
</div>

@auth
@endauth

@endsection