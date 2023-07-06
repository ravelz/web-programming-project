@extends('layouts.app')
@section('content')
@php
if($profile[0]->id_article == null){
    $count = 0;
}else{
    $count = count($profile);
}
@endphp
<div class="isi">
    <div class="row">
        {{-- ==============      KIRI    ============== --}}
        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2 offset-1" style="max-width: 500px">        
            <img src="img/Home/profile.jpg" class="img rounded-circle profile border border-5 header-profile-img prof-stat" alt="...">
            <h1 class="prof-nama-pengguna text-black display-6 fw-bold ms-2 mt-3 text-wrap">{{ $profile[0]->name }}</h1>
            <p class="text-justify prof-sub-pengguna fw-light ms-2 fs-5 color-5E5D2D  text-wrap">{{ '@'.$profile[0]->username }}</p>
            <p class="text-wrap text-justify text-black-50 ms-2 desc-profile">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero ex dolores voluptates magni assumenda adipisci officia illum deserunt quibusdam vitae deleniti, 
                voluptate maiores hic labore rem ut illo aliquam blanditiis.</p>
            @if (Auth::user()->username == $username)
                <button  type="button" id = "follow-other" class="btn btn-primary ms-2 mt-1 text-nowrap col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3" onclick="toggleButton()"><span id = "btn-ikuti-text" class="text-nowrap">Ikuti</span></button>
            @endif
            <div class="ms-2 border border-dark border-opacity-10 rounded row p-3">
                <div class="d-flex flex-column justify-content-between col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                    <x-profile-stats-att :angka="$follower" att="Pengikut"/>
                </div>
                <div class="d-flex flex-column justify-content-between col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <x-profile-stats-att :angka="$following" att="Mengikuti"/>
                </div>
            </div>


            <div class="ms-2 border border-dark border-opacity-10 rounded row p-3">
                @if (Auth::user()->username == $username)
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                        <h1 class="prof-dat text-black display-6 fw-bold text-nowrap text-center">17</h1>
                        <p class="prof-dats text-black-50 text-center fs-5 text-center">Markah</p>
                    </div>
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <x-profile-stats-att :angka="$count" att="Posting"/>
                        {{-- <x-profile-stats-att :angka="$profile[0]"/> --}}
                    </div>
                @else
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <x-profile-stats-att :angka = "$count", att = "Posting"/>
                    </div>
                @endif
            </div>


            @if ($profile[0]->status_member != 2)
            <button type="button" id = "status-berlangganan" class="btn btn-danger text-nowrap ms-2 mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  data-bs-toggle="modal" data-bs-target="#exampleModal4"><span class="tulisan-status-berlangganan text-wrap">
                Status Berlangganan: Tidak aktif</span></button>
            @elseif ($profile[0]->role == 2)
            <button type="button" id = "status-berlangganan" class="btn btn-success text-nowrap ms-2 mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  data-bs-toggle="modal" data-bs-target="#exampleModal4"><span class="tulisan-status-berlangganan text-wrap">
                Status Berlangganan: Aktif</span></button>
            @endif
            <x-show-benefit></x-show-benefit>
            <button type="button" id = "edit-profile" class="btn btn-primary ms-2 mt-3 text-nowrap col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                <span class="text-wrap tulisan-edit-profile">Edit Profile</span></button>
            <x-edit-profile-form/>
        </div>

            {{-- ==============     KANAN     ============== --}}

        <div class="offset-1 col-7">
            <div class="row">
                <div class="col-10 mt-4 profile-search d-flex">
                    <div class="input-group mb-3">
                        <span class="input-group-text profile-search-icon" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input style="max-width: 1050px" id = "profile-cari-postingan" type="text" class="form-control text-center profile-search-input" placeholder="Cari Postingan. . . ." aria-label="Username" aria-describedby="basic-addon1">
                    </div>  
                </div>
                <div class="col-1 col-sm-2 col-md-1 col-lg-1 col-xl-1 mt-4 d-flex" style="cursor: pointer; max-width: 10px">
                    <i id="profile-sort-postingan" class="bi bi-arrow-down-up me-2 profile-sort-icon"></i>
                    <p id="profile-sort-postingan" class="profile-sort">urutkan</p> 
                </div>
            </div>
            <div class="row d-flex flex-column justify-content-between">
                <div class="col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12 border-bottom border-1 mt-1 profile-garis" style="max-width: 1100px">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item me-2" role="presentation">
                          <button style = "color:black" class="nav-link active fw-semibold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Article 1</button>
                        </li>
                        <li class="nav-item me-2" role="presentation">
                          <button style = "color:black" class="nav-link fw-normal fw-semibold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Article 2</button>
                        </li>
                        <li class="nav-item me-2" role="presentation">
                          <button style = "color:black" class="nav-link fw-normal fw-semibold" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Article 3</button>
                        </li>
                    </ul>
                </div>

                <div id = "pills-tabContent" class=" tab-content profile-card-box mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px;">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        @for ($i = 0; $i <$count; $i++)
                            <x-profile-big-card :article="$profile[$i]"/>
                        @endfor
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        @for ($i = 0; $i <$count; $i++)
                            <x-profile-big-card :article="$profile[$i]"/>
                        @endfor
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        @for ($i = 0; $i <$count; $i++)
                            <x-profile-big-card :article="$profile[$i]"/>
                        @endfor
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/Home/profile.js"></script>

</body>

@endsection