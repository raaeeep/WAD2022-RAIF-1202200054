@extends('navbar/navbar1')
@section('content')

<div class="container mt-5 px-5">
    <h1>My Showroom</h1>
    <p>List Showroom RAIF - 1202200054</p>
    @if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="row">
        @foreach($showrooms as $showroom)
        <div class="col">
            <div class="card mt-2" style="width: 18rem;margin-bottom:25px;">
                <img src="assets/upload-img/{{ $showroom->image }}" class="card-img-top"  style="min-height:200px;">
                <div class="card-body"  style="max-height:200px;">
                    <h5 class="card-title">{{ $showroom->name }}</h5>
                    <p class="card-text">{{ $showroom->description }}</p>
                    <div class="container px-5">
                        <a href="/showroom/detail/{{ $showroom->id }}" class="btn btn-primary">Detail</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>


@auth
@endauth

@endsection