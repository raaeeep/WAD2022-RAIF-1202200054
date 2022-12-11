@extends('navbar/navbar1')
@section('content')

<!-- form -->
<div class="container mt-5 px-3" style="margin-bottom:100px">
    <h3 class="fw-bold">Tambah Mobil</h3>
    <p>Tambah Mobil Baru Anda ke List Show Room</p>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('showroom.store') }}" method="POST" class="mt-5" style="margin-right:250px" enctype="multipart/form-data">
        @csrf
            <!-- NAMA MOBIL -->
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="name" placeholder="Silahkan masukan nama mobilmu!">
            </div>
            <!-- NAMA MOBIL -->
            <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Pemilik Mobil</label>
                <input type="text" class="form-control" name="owner" placeholder="Silahkan masukan nama mobilmu!">
            </div>
            <!-- MERK MOBIL -->
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk Mobil</label>
                <input type="text" class="form-control" name="brand" placeholder="Silahkan masukan nama mobilmu!">
            </div>
            <!-- TANGGAL BELI MOBIL -->
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli Mobil</label>
                <input type="date" class="form-control" name="purchase_date" placeholder="">
            </div>
            <!-- DESKRIPSI MOBIL -->
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi Mobil</label>
                <textarea class="form-control" name="description" rows="3" 
                    placeholder="Contoh: Mobil ini adalah yang terbaik dimasanya ..." required></textarea>
            </div>
            <!-- FOTO MOBIL -->
            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" name="image" class="form-control">
            </div>
            <!-- STATUS -->            
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="status" value="lunas">
                <label class="form-check-label" for="lunas">Lunas</label>
                <input class="form-check-input ms-5" type="radio" name="status" value="belum lunas">
                <label class="form-check-label" for="lunas">Belum Lunas</label>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Selesai</button>
        </form>
</div>
<!-- akhir form -->


@auth
@endauth

@endsection