<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karya Budaya | Other-Profile</title>
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!--Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--CSS -->
    <link rel="stylesheet" href="./css/Home/style.css">
</head>
<body>
    @include('Partial/sidebarLeft')
    <header class="bg-profile-header">
        <svg style = "cursor: pointer;"xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="white" class="bi bi-list mt-3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </header>

    <div class="isi">
        <div class="row">
            {{-- ==============      KIRI    ============== --}}
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2 offset-1" style="max-width: 500px">        
                <x-profile-bio></x-profile-bio>
                <x-profile-stats></x-profile-stats>
                <div class="ms-2 border border-dark border-opacity-10 rounded row p-3 ">
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <x-profile-stats-att></x-profile-stats-att>
                    </div>
                </div>
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
                    <div class="col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12 border-bottom border-1 mt-1 profile-garis" style="max-width: 1100px"></div>
                    <div class="profile-card-box mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px;">
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/Home/profile.js"></script>
</body>
</html>