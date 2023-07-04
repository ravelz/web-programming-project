@extends('layouts.app')
@section('content')
<div id="intro" class="bg-image shadow-2-strong d-flex flex-column justify-content-center">
    <div class="mask" style="background-color: #982727">
        <div class="container d-flex justify-content-center align-items-center text-center h-100">
            <div class="text-white">
                <h1 class="mb-3 title-sukses">Pembayaran Berhasil!</h1>
                <h5 class="mb-4">Pembayaran anda telah diproses! kami akan memberikan detailnya kepada anda secepatnya melalui email anda.</h5>
                <a class="btn btn-light btn-lg m-2" href="{{ route('payment') }}" role="button" rel="nofollow"><span class="h5">Back to Home</span></a>
            </div>
        </div>
    </div>
</div>
<script src="./js/Home/payment.js"></script>
@endsection