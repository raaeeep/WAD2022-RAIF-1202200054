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
            <form class="mt-5" style="margin-right:250px">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" value="{{ $post->name }}" readonly>  
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" value="{{ $post->owner }}" readonly>  
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk</label>
                <input type="text" class="form-control" name="merk" value="{{ $post->brand }}" readonly>  
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" class="form-control" name="tanggal_beli" value="{{ $post->purchase_date }}" readonly>  
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" readonly> {{ $post->description }} </textarea>
            </div>
            <div>
                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
            </div>
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="status" value="{{ $post->status }}">
                <label class="form-check-label" for="lunas">{{ $post->status }}</label>
            </div>
            <a href="{{ route('edit-car', $post->id) }}" class="btn btn-primary" style="width:150px;">Edit</a>
            </form>
            <!-- akhir detail -->
            </div>
        </div>
    </div>


@endsection