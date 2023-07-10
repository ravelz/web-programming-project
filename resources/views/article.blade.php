@extends('layouts.app')

@section('content')
<!-- header -->
<div class="row">
    <!-- isi artikel -->
    <div class="col-6 offset-1">
        <div class="row d-flex flex-row">
            <div class="d-flex flex-row justify-content-between">
                <div class="d-flex" style="margin-bottom:20px">
                    <img class="img-fluid rounded-circle" style="width: 50px; height: 50px;border-radius: 100%;float: right;" src="{{ asset('storage/uploads/karyabudaya.png') }}" alt="">
                    <div class="d-flex flex-column align-content-center" style="margin-left: 20px;">
                        <div class="">
                            <h5 style="font-family: Inter, sans-serif;font-weight: 700;margin-bottom:-0px;">{{ $read->name }}</h5>
                        </div>
                        <div class="">
                            <p style="font-family: Inter,">{{ $read->date_publish }} </p>
                        </div>
                    </div>
                </div>

                <div class="d-flex ">
                    <svg style="margin-right: 10px;" width="50" height="50" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32" stroke="#B5B5B5" stroke-width="3"/>
                        <path d="M47 31.375H43.75V28.125H42.125V31.375H38.875V33H42.125V36.25H43.75V33H47V31.375ZM30.75 23.25C31.5535 23.25 32.3389 23.4883 33.007 23.9347C33.6751 24.381 34.1958 25.0155 34.5033 25.7578C34.8107 26.5002 34.8912 27.317 34.7344 28.1051C34.5777 28.8931 34.1908 29.617 33.6226 30.1851C33.0545 30.7533 32.3306 31.1402 31.5426 31.2969C30.7545 31.4537 29.9377 31.3732 29.1953 31.0658C28.453 30.7583 27.8185 30.2376 27.3722 29.5695C26.9258 28.9014 26.6875 28.116 26.6875 27.3125C26.6875 26.2351 27.1155 25.2017 27.8774 24.4399C28.6392 23.678 29.6726 23.25 30.75 23.25ZM30.75 21.625C29.6251 21.625 28.5255 21.9586 27.5902 22.5835C26.6549 23.2085 25.9259 24.0967 25.4954 25.136C25.065 26.1752 24.9523 27.3188 25.1718 28.4221C25.3912 29.5253 25.9329 30.5388 26.7283 31.3342C27.5237 32.1296 28.5372 32.6713 29.6404 32.8907C30.7437 33.1102 31.8873 32.9975 32.9265 32.5671C33.9658 32.1366 34.854 31.4076 35.479 30.4723C36.1039 29.537 36.4375 28.4374 36.4375 27.3125C36.4375 25.8041 35.8383 24.3574 34.7717 23.2908C33.7051 22.2242 32.2584 21.625 30.75 21.625ZM38.875 44.375H37.25V40.3125C37.25 39.2351 36.822 38.2017 36.0601 37.4399C35.2983 36.678 34.2649 36.25 33.1875 36.25H28.3125C27.2351 36.25 26.2017 36.678 25.4399 37.4399C24.678 38.2017 24.25 39.2351 24.25 40.3125V44.375H22.625V40.3125C22.625 38.8041 23.2242 37.3574 24.2908 36.2908C25.3574 35.2242 26.8041 34.625 28.3125 34.625H33.1875C34.6959 34.625 36.1426 35.2242 37.2092 36.2908C38.2758 37.3574 38.875 38.8041 38.875 40.3125V44.375Z" fill="black"/>
                    </svg>
                        

                    <a href="{{ route('bookmark', ['id' => $read->id_article]) }}">
                        <svg style="margin-right: 10px;" width="50" height="50" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="33.5" cy="33.5" r="32" stroke="#B5B5B5" stroke-width="3"/>
                                <g clip-path="url(#clip0_298_510)">
                                    <path d="M25.2517 24.2368C25.2517 23.4627 25.5592 22.7204 26.1065 22.1731C26.6539 21.6257 27.3962 21.3182 28.1703 21.3182H39.8445C40.6186 21.3182 41.3609 21.6257 41.9082 22.1731C42.4556 22.7204 42.7631 23.4627 42.7631 24.2368V43.9371C42.763 44.0691 42.7271 44.1986 42.6593 44.3118C42.5915 44.425 42.4942 44.5177 42.3778 44.58C42.2615 44.6422 42.1304 44.6718 41.9986 44.6655C41.8667 44.6592 41.7391 44.6173 41.6292 44.5441L34.0074 40.4363L26.3856 44.5441C26.2757 44.6173 26.148 44.6592 26.0162 44.6655C25.8844 44.6718 25.7533 44.6422 25.637 44.58C25.5206 44.5177 25.4233 44.425 25.3555 44.3118C25.2876 44.1986 25.2518 44.0691 25.2517 43.9371V24.2368ZM28.1703 22.7775C27.7832 22.7775 27.4121 22.9313 27.1384 23.2049C26.8647 23.4786 26.711 23.8498 26.711 24.2368V42.5741L33.6032 38.9522C33.7229 38.8725 33.8636 38.83 34.0074 38.83C34.1512 38.83 34.2919 38.8725 34.4116 38.9522L41.3038 42.5741V24.2368C41.3038 23.8498 41.15 23.4786 40.8764 23.2049C40.6027 22.9313 40.2315 22.7775 39.8445 22.7775H28.1703Z" fill="black" stroke="black" stroke-width="0.2"/>
                                </g>
                            <defs>
                                <clipPath id="clip0_298_510">
                                    <rect width="23.3485" height="23.3485" fill="white" transform="translate(22.3333 21.3182)"/>
                                </clipPath>
                            </defs>
                        </svg>
                            
                    </a>

                    <svg width="50" height="50" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32" stroke="#B5B5B5" stroke-width="3"/>
                        <path d="M44.707 31.293L36.707 23.293C36.5671 23.1532 36.389 23.058 36.195 23.0194C36.0011 22.9809 35.8 23.0007 35.6173 23.0764C35.4346 23.152 35.2785 23.2802 35.1686 23.4446C35.0587 23.609 35 23.8023 35 24V27.545C32.2683 27.7978 29.7292 29.0609 27.8797 31.0871C26.0302 33.1132 25.0033 35.7567 25 38.5V40C25.0002 40.2076 25.0649 40.41 25.1853 40.5791C25.3056 40.7482 25.4756 40.8757 25.6717 40.9439C25.8678 41.012 26.0802 41.0174 26.2795 40.9594C26.4788 40.9014 26.6551 40.7828 26.784 40.62C27.7637 39.455 28.9658 38.4969 30.3199 37.8017C31.6741 37.1064 33.1533 36.6881 34.671 36.571C34.721 36.565 34.846 36.555 35 36.545V40C35 40.1978 35.0587 40.3911 35.1686 40.5555C35.2785 40.7199 35.4346 40.848 35.6173 40.9237C35.8 40.9994 36.0011 41.0192 36.195 40.9806C36.389 40.942 36.5671 40.8468 36.707 40.707L44.707 32.707C44.8945 32.5195 44.9998 32.2652 44.9998 32C44.9998 31.7349 44.8945 31.4806 44.707 31.293ZM37 37.586V35.5C37 35.2348 36.8946 34.9805 36.7071 34.7929C36.5196 34.6054 36.2652 34.5 36 34.5C35.745 34.5 34.704 34.55 34.438 34.585C31.7429 34.8334 29.1774 35.8573 27.052 37.533C27.2932 35.3275 28.3395 33.2884 29.9906 31.8062C31.6416 30.324 33.7813 29.5029 36 29.5C36.2652 29.5 36.5196 29.3947 36.7071 29.2071C36.8946 29.0196 37 28.7652 37 28.5V26.414L42.586 32L37 37.586Z" fill="black"/>
                    </svg>

                </div>
            </div>
            <div class="">
                <!-- bagian isi artikel -->
                <x-isi-article :dataArticle="$read" :tag="$tag"/>
                <x-input-comment :inputComment="$read"/>
            </div>  

            <!-- komen -->
            <div>
                @foreach ($comment as $c)
                <x-comment :comment="$c"/>
                @endforeach
            </div>

        </div>
    </div>
        

    <div class="offset-1 col-3">
    <!-- kanan bawah   -->
    <div style= "padding-top: 30px;" class="BuatMore">
        <h4 style= "font-family: 'Rubik', sans-serif;"> Rekomendasi Article </h4>
            <div style= "padding-top: 20px;" class="row"> 
                <div class="row">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: Rubik, sans-serif;font-weight: 800;">Selat Solo</h5>
                                    <p class="card-text">Selat solo adalah sebuah selat yang berasal dari solo</p>
                                    <span class="card-text" style = "margin-right: 60px;"><small class="text-body-secondary">Saciell</small></span>
                                    <span class="card-text"><small class="text-body-secondary">Saciell</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: Rubik, sans-serif;font-weight: 800;">Selat Solo</h5>
                                    <p class="card-text">Selat solo adalah sebuah selat yang berasal dari solo</p>
                                    <span class="card-text" style = "margin-right: 60px;"><small class="text-body-secondary">Saciell</small></span>
                                    <span class="card-text"><small class="text-body-secondary">Saciell</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection