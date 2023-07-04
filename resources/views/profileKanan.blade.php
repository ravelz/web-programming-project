@extends('template/headerArticle')

@section('content')

<!-- kanan atas  -->
<div class="card">
    <a href="#"  style = "background-color: #982727;border-radius: 30px; padding-vertical: 20px; font-size: 12px;border: none !important; box-shadow: none !important;" class="btn btn-primary mx-auto my-4 px-2">GET UNLIMITED ACCESS</a>
    <img class="card-img-top mx-auto" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 100px;height: 100px;border-radius: 100%;" class="img-fluid" alt="...">
    <div class="card-body text-center">
        <h5 style="font-family: Poppins, sans-serif;font-weight: 600;"class="card-title">Christiella</h5>
        <p style="font-family: Poppins, sans-serif;font-weight: 200;" class="card-text">5.7K Followers</p>
        <p style="font-family: Poppins, sans-serif;font-weight: 200;" class="card-text">Sr. Software Engineer | Writer | A.I Enthusiast</p>
        <p style="font-family: Poppins, sans-serif;font-weight: 200;" class="card-text">http://instagram//nenegsukaisih</p>
        <a href="#"  style = "background-color: #982727;border-radius: 30px; width:100px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Follow</a>
    </div>
</div>

@endsection