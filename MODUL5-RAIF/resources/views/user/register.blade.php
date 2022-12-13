@extends('app')
@section('content')

<body>
    <div class="row" style="width:100">
        <div class="col-6">
            <img src="assets/wallpaper.png" style="width:650px;height:640px;">
        </div>
        <div class="col-6 px-5" style="margin-top:25px;">
            <h1 class="mb-4">Registration</h1>
            <div class="pe-5">
                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
                <form action="{{ route('register.action') }}" method="POST">
                    @csrf
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
                <button type="submit" class="btn btn-primary mt-3" name="register" style="width:100px;">Register</button>
                <p class="mt-2">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection