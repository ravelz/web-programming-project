<style>
    html{
        padding-top: 0px !important;
    }
    body {
        background-image: url('https://images.pexels.com/photos/1842892/pexels-photo-1842892.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 0px !important;
    }
    .password-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        cursor: pointer;
    }
    .password-icon i {
        font-size: 18px;
        color: #999;
    }
</style>

@extends('master')

@section('title', 'Register')

@section('konten')

<div class="container d-flex justify-content-center align-items-center" style="height: 90vh; background-color: rgba(255, 255, 255, 0.7); max-width: 450px;">
    <div class="card-body d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-center mb-5">
            <img src="{{ asset('images/logo.png') }}" style="max-height: 120px;">
        </div>
        <h1 class="text-center mb-5" style="color: #450000;">Daftar</h1>
        <form method="POST" action="{{ route('register') }}" class="mb-5">
            @csrf
            <div class="mb-3">
                <div class="form-group" style="max-width: 250px; margin: 0 auto;">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" style="border-radius: 30px; max-width: 250px; margin: 0 auto; box-shadow: 0px 0.5px 4px rgba(0, 0, 0, 0.10);">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3" style="margin-top: 10px;">
                <div class="form-group" style="max-width: 250px; margin: 0 auto;">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" style="border-radius: 30px; max-width: 250px; margin: 0 auto;  box-shadow: 0px 0.5px 4px rgba(0, 0, 0, 0.10);">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3" style="margin-top: 10px;">
                <div class="form-group" style="max-width: 250px; margin: 0 auto;">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="{{ old('username') }}" style="border-radius: 30px; max-width: 250px; margin: 0 auto;  box-shadow: 0px 0.5px 4px rgba(0, 0, 0, 0.10);">
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group" style="max-width: 250px; margin: 0 auto;">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                <input type="password" name="password" class="form-control" id="password" style="border-radius: 30px; box-shadow: 0px 0.5px 4px rgba(0, 0, 0, 0.10);">
                </div>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group" style="max-width: 250px; margin: 0 auto;">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <div class="input-group">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" style="border-radius: 30px; box-shadow: 0px 0.5px 4px rgba(0, 0, 0, 0.10);">
                </div>
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{ asset('js/toggle-passwords.js') }}"></script>
            <div style="margin-top: 20px;">
            <button type="submit" class="btn btn-danger mx-auto d-block" style="border-radius: 30px; border-color: #982727; background-color: #982727; width: 120px; height: 40px;">Daftar</button>
        </form>
        <div class="text-center" style="margin-top: 20px;">
            Sudah punya akun? <a href="{{ route('login') }}" style="color: #AA1A1A;">Masuk disini</a>.
        </div>
    </div>
</div>
@endsection