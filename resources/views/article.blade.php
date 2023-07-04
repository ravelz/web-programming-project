@extends('layouts.app')

@section('content')
<!-- header -->
<div class="row">
    <!-- isi artikel -->
    <div class="col-7 offset-1">
        <div class="row d-flex flex-row">
            <div class="d-flex flex-row justify-content-between">
                <div class="d-flex">
                    <img class="img-fluid" src="{{ asset('storage/facebook.png') }}" alt="">
                    <div class="d-flex flex-column">
                        <div class="">
                            <p> Christiella </p>
                        </div>
                        <div class="">
                            <p> Christiella </p>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex">
                    <svg width="50px" height="50px" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_280_1024)">
                            <circle cx="25" cy="22" r="21" fill="#5E5D2D"/>
                            <path d="M23.8688 11.1688L36.3521 17.4104C41.9521 20.2104 41.9521 24.7896 36.3521 27.5896L23.8688 33.8313C15.4688 38.0313 12.0417 34.5896 16.2417 26.2042L17.5104 23.6813C17.8313 23.0396 17.8313 21.975 17.5104 21.3333L16.2417 18.7958C12.0417 10.4104 15.4834 6.96876 23.8688 11.1688Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.9336 22.5H25.8086" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_280_1024" x="0" y="0" width="50" height="50" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="3"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_280_1024"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_280_1024" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_280_1033)">
                            <circle cx="25" cy="22" r="21" fill="#5E5D2D"/>
                            <path d="M17.8149 33.7292C19.0107 32.4459 20.8337 32.5479 21.8837 33.9479L23.3566 35.9167C24.5378 37.4771 26.4482 37.4771 27.6295 35.9167L29.1024 33.9479C30.1524 32.5479 31.9753 32.4459 33.1712 33.7292C35.767 36.5 37.8816 35.5813 37.8816 31.7021V15.2667C37.8962 9.3896 36.5253 7.91669 31.0128 7.91669H19.9878C14.4753 7.91669 13.1045 9.3896 13.1045 15.2667V31.6875C13.1045 35.5813 15.2337 36.4854 17.8149 33.7292Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.667 15.2083H31.3337" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.125 21.0417H29.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_280_1033" x="0" y="0" width="50" height="50" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="3"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_280_1033"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_280_1033" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="">
                <!-- bagian isi artikel -->
                @foreach ($read as $r)
                    <x-isi-article :dataArticle="$r"/>
                    <x-input-comment :inputComment="$r"/>
                @endforeach
            </div>
            

            <!-- komen -->
            @foreach ($comment as $c)
                <x-comment :comment="$c"/>
            @endforeach

        </div>
    </div>
        
    <!-- kanan atas  -->
    <div class="offset-1 col-2">
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
        <!-- kanan bawah   -->
        <div style= "padding-top: 30px;" class="BuatMore">
            <h3> More For KaryaBudaya </h3>
                <div style= "padding-top: 20px;" class="row"> 
                    <div class="row">
                        <div style= "background-color: #FFFFFF;" class="card mb-3" style="max-width: 540px;">
                            <div class="row">
                                <div class="col-4" style= "padding-top: 10px;">
                                    <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                </div>
                                <div class="col-8" style= "padding-top: 10px;">
                                    <h6 style="font-family: Poppins, sans-serif;font-weight: 600;"> Renatha </h6>
                                    <p style="font-family: Poppins, sans-serif;ont-weight: 200;"> Festival Ogoh - Ogoh di Bali menjadi pusat perhatian ... </p>
                                </div>
                            </div>
                        </div>
                        <div style= "background-color: #FFFFFF;" class="card mb-3" style="max-width: 540px;">
                            <div class="row">
                                <div class="col-4" style= "padding-top: 10px;">
                                    <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                </div>
                                <div class="col-8" style= "padding-top: 10px;">
                                    <h6 style="font-family: Poppins, sans-serif;font-weight: 600;"> Renatha </h6>
                                    <p style="font-family: Poppins, sans-serif;ont-weight: 200;"> Festival Ogoh - Ogoh di Bali menjadi pusat perhatian ... </p>
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