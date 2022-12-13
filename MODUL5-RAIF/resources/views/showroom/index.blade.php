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
        <div class="col-lg-4">
            <div class="card mt-2">
                <img src="assets/upload-img/{{ $showroom->image }}" class="card-img-top"  style="min-height:250px;">
                <div class="card-body"  style="max-height:200px;">
                    <h5 class="card-title">{{ $showroom->name }}</h5>
                    <p class="card-text">{{ $showroom->description }}</p>
                    <div class="container px-5">
                        <!-- detail -->
                        <a href="{{ route('detail-car', $showroom->id) }}" class="btn btn-primary card-text w-100">Detail</a>
                        <!-- delete -->
                        <form action="{{ route('delete-car', $showroom->id) }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $showroom->id }}">
                            <button class="btn btn-danger card-text mt-2 w-100" type="submit">Delete</button>
                        </form>

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