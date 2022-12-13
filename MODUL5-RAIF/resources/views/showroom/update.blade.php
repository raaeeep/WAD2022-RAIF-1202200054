@extends('navbar/navbar1')
@section('content')

<div class="container mt-5 mb-5">
    <form>
    <div class="row">
        <!-- gambar -->
        <div class="col">
            <div class="d-flex align-items:center mt-2">
            <img src="../../assets/upload-img/{{ $post->image }}" class="card-img-top">
            </div>
        </div>
        <!-- akhir gambar -->
        <!-- detail -->
        
        <div class="col">
            <form method="post" action="/showroom/update/{{$post->id}}" enctype="multipart/form-data" class="mt-5" style="margin-right:250px">
            @csrf
            @method('put')
            <div class="mb-3">
                
                <input type="hidden" class="form-control" name="id" value="{{ $post->id }}" readonly>  
            </div>
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="name" value="{{ $post->name }}">  
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" class="form-control" name="owner" value="{{ $post->owner }}">  
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk</label>
                <input type="text" class="form-control" name="brand" value="{{ $post->brand }}">  
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" class="form-control" name="purchase_date" value="{{ $post->purchase_date }}">  
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" name="description" rows="3"> {{ $post->description }} </textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div>
                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
                <input class="form-check-input" type="radio" name="status" value="lunas">
                <label class="form-check-label" for="lunas">Lunas</label>
                <input class="form-check-input ms-5" type="radio" name="status" value="belum lunas">
                <label class="form-check-label" for="lunas">Belum Lunas</label>
            </div>
            <button type="submit" class="btn btn-primary" style="width:150px;">Update</button>
            </form>
            <!-- akhir detail -->
            </div>
        </div>
    </div>

@endsection