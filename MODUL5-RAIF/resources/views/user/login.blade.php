@extends('app')
@section('content')

<body>
    <div class="row" style="width:100">
        <div class="col-6">
            <img src="assets/wallpaper.png" alt="" style="width:650px;height:640px;">
        </div>
        <div class="col-6 px-5" style="margin-top:150px;">
            <h1 class="mb-4">Login</h1>
            <div class="pe-5">
                @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
                <form action="{{ route('login.action') }}" method="POST">
                    @csrf
                <div class="mb-2">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="telkomuniversity@gmail.com">
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary mt-3" name="login" style="width:100px;">Login</button>
                <p class="mt-2">Sudah punya akun? <a href="{{ route('register') }}">Register</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection