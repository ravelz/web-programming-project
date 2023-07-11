@extends('layouts.app')

@section('content')

    <div class="d-flex row mt-5 pb-5 background-anjay justify-content-around slide-from-left ">
        <div class="offset-1 col-4 mt-5 d-flex flex-column ">
            <p class="display-1">ABOUT US</p>
            <p class="fs-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione expedita at rem voluptates iusto unde incidunt quae repudiandae earum ex, aut est impedit odit, architecto et! Quod, id fuga?</p>
            <p class="mt-3 fw-semibold">"Orang Indo kalo ketemu hal mistis, logicnya buyar"</p>
            <a  type="button" class="btn btn-tol text-light fw-semibold offset-3 mt-3 col-3">
            Troll!</a>
        </div>
        <div class="offset-1 col-5 mt-5 left-about-container ">
            <img width="500px" height="500px" src="{{ asset('storage') }}/upload/LOGO WEB.png" class="img-fluid bg-light border border-opacity-10 p-3 mt-5 mb-5 " alt="...">
        </div>
        
    </div>

    <script src="{{ url('js/Home/payment.js') }}"></script>

@endsection