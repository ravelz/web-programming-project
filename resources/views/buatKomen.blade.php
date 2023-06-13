@extends('template/headerArticle')

@section('content')

 <!-- komen  -->
 <div style= "padding-top: 40px;" class=" buatKomen">
    <div style="background-color: #ffffff; padding-top: 20px;" class="d-flex row">    
        <div class="col-auto">
            <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
        </div>
        <div class="col-auto">
            <h3 style="font-family: Poppins, sans-serif;font-weight: 600;"> Steven Matthew </h3>
            <h6><small style="font-family: Poppins, sans-serif;font-weight: 200;" class="text-muted">Apa Tanggapan Anda?</small></h6>
        </div>
        <div class="row">
            <div style="padding-top: 50px; height: 100px; align: bottom;" class="row flex-nowrap">
                <div class="col-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-type-bold" viewBox="0 0 16 16">
                        <path d="M8.21 13c2.106 0 3.412-1.087 3.412-2.823 0-1.306-.984-2.283-2.324-2.386v-.055a2.176 2.176 0 0 0 1.852-2.14c0-1.51-1.162-2.46-3.014-2.46H3.843V13H8.21zM5.908 4.674h1.696c.963 0 1.517.451 1.517 1.244 0 .834-.629 1.32-1.73 1.32H5.908V4.673zm0 6.788V8.598h1.73c1.217 0 1.88.492 1.88 1.415 0 .943-.643 1.449-1.832 1.449H5.907z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-type-italic" viewBox="0 0 16 16">
                        <path d="M7.991 11.674 9.53 4.455c.123-.595.246-.71 1.347-.807l.11-.52H7.211l-.11.52c1.06.096 1.128.212 1.005.807L6.57 11.674c-.123.595-.246.71-1.346.806l-.11.52h3.774l.11-.52c-1.06-.095-1.129-.211-1.006-.806z"/>
                    </svg>
                </div>
                <div class="col-7">
                    <a href="#" style="font-family: Poppins, sans-serif;font-weight: 200;background-color: #ffffff; color: #982727;border: none !important; box-shadow: none !important;" class="btn btn-primary">Batal</a>
                    <a href="#" style="font-family: Poppins, sans-serif;background-color: #982727; border: none !important; box-shadow: none !important;"class="btn btn-primary">Kirim</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection