<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
                <img src="img/Home/profile.jpg" class="img rounded-circle profile border border-5 header-profile-img prof-stat" alt="...">
                <h1 class="prof-nama-pengguna text-black display-6 fw-bold text-nowrap ms-2 mt-3"> Nama Pengguna</h1>
                <p class="text-justify prof-sub-pengguna fw-light ms-2 fs-5 color-5E5D2D">@namapengguna</p>
                <p class="text-wrap text-justify text-black-50 ms-2 desc-profile">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero ex dolores voluptates magni assumenda adipisci officia illum deserunt quibusdam vitae deleniti, 
                    voluptate maiores hic labore rem ut illo aliquam blanditiis.</p>
                <div class="ms-2 border border-dark border-opacity-10 rounded row p-3">
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                        <h1 class="prof-dat text-black display-6 fw-bold text-nowrap text-center">2.5k</h1>
                        <p class="prof-dats text-black-50 text-center fs-5 text-center">Pengikut</p>
                    </div>
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <h1 class="prof-dat text-black display-6 fw-bold text-nowrap text-center">1.0k</h1>
                        <p class="prof-dats text-black-50 text-center fs-5  text-center">Mengikuti</p>
                    </div>
                </div>
                <div class="ms-2 border border-dark border-opacity-10 rounded row p-3">
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                        <h1 class="prof-dat text-black display-6 fw-bold text-nowrap text-center">17</h1>
                        <p class="prof-dats text-black-50 text-center fs-5 text-center">Markah</p>
                    </div>
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <h1 class="prof-dat text-black display-6 fw-bold text-nowrap text-center">70</h1>
                        <p class="prof-dats text-black-50 text-center fs-5  text-center">Posting</p>
                    </div>
                </div>
                <button type="button" id = "status-berlangganan" class="btn btn-danger text-nowrap ms-2 mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><span class="tulisan-status-berlangganan text-wrap">
                    Status Berlangganan : Aktif</span></button>
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
                        <div id = "profile-follow-card" class="gx-0 card rounded-0 mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px">
                            <div class="row g-0">
                                <div class="col-md-4 sm-w-200 profile-follow-img">
                                    <img id = "profile-follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body follow-card-body" >
                                        <div class="d-flex ">
                                            <div class="me-auto">
                                                <h5 id = "profile-follow-cat" class="card-title p-2" >Budaya</h5>
                                            </div>
                                            <div>
                                                <h5 id = "profile-follow-time"class="card-title" >3 hari yang lalu</h5>
                                            </div>
                                        </div>
                                        <div id = "profile-follow-tit" style=""><p class="card-text profile-follow-tit follow-text">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                        <div id = "profile-follow-desc"style=""><p class="card-text profile-follow-desc follow-text-desc">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="p-2">
                                                <img id = "follow-img-big" src="img/Home/profile.jpg" class="rounded-circle" alt="..." width="40px" height="40px" >
                                            </div>
                                            <div class="p-2 prof-big-card">
                                                <a class = "profile-fol-name"id = "follow-name">Baymax</a>
                                            </div>
                                            <div class="ms-auto p-2 baca-lebih-container">
                                                <a class = "profile-tulisan-baca-lebih">Baca Lebih 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id = "profile-follow-card" class="gx-0 card rounded-0 mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px">
                            <div class="row g-0">
                                <div class="col-md-4 sm-w-200 profile-follow-img">
                                    <img id = "profile-follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body follow-card-body" >
                                        <div class="d-flex ">
                                            <div class="me-auto">
                                                <h5 id = "profile-follow-cat" class="card-title p-2" >Budaya</h5>
                                            </div>
                                            <div>
                                                <h5 id = "profile-follow-time"class="card-title" >3 hari yang lalu</h5>
                                            </div>
                                        </div>
                                        <div id = "profile-follow-tit" style=""><p class="card-text profile-follow-tit follow-text">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                        <div id = "profile-follow-desc"style=""><p class="card-text profile-follow-desc follow-text-desc">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="p-2">
                                                <img id = "follow-img-big" src="img/Home/profile.jpg" class="rounded-circle" alt="..." width="40px" height="40px" >
                                            </div>
                                            <div class="p-2 prof-big-card">
                                                <a class = "profile-fol-name"id = "follow-name">Baymax</a>
                                            </div>
                                            <div class="ms-auto p-2 baca-lebih-container">
                                                <a class = "profile-tulisan-baca-lebih">Baca Lebih 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id = "profile-follow-card" class="gx-0 card rounded-0 mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px">
                            <div class="row g-0">
                                <div class="col-md-4 sm-w-200 profile-follow-img">
                                    <img id = "profile-follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body follow-card-body" >
                                        <div class="d-flex ">
                                            <div class="me-auto">
                                                <h5 id = "profile-follow-cat" class="card-title p-2" >Budaya</h5>
                                            </div>
                                            <div>
                                                <h5 id = "profile-follow-time"class="card-title" >3 hari yang lalu</h5>
                                            </div>
                                        </div>
                                        <div id = "profile-follow-tit" style=""><p class="card-text profile-follow-tit follow-text">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                        <div id = "profile-follow-desc"style=""><p class="card-text profile-follow-desc follow-text-desc">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="p-2">
                                                <img id = "follow-img-big" src="img/Home/profile.jpg" class="rounded-circle" alt="..." width="40px" height="40px" >
                                            </div>
                                            <div class="p-2 prof-big-card">
                                                <a class = "profile-fol-name"id = "follow-name">Baymax</a>
                                            </div>
                                            <div class="ms-auto p-2 baca-lebih-container">
                                                <a class = "profile-tulisan-baca-lebih">Baca Lebih 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id = "profile-follow-card" class="gx-0 card rounded-0 mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px">
                            <div class="row g-0">
                                <div class="col-md-4 sm-w-200 profile-follow-img">
                                    <img id = "profile-follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body follow-card-body" >
                                        <div class="d-flex ">
                                            <div class="me-auto">
                                                <h5 id = "profile-follow-cat" class="card-title p-2" >Budaya</h5>
                                            </div>
                                            <div>
                                                <h5 id = "profile-follow-time"class="card-title" >3 hari yang lalu</h5>
                                            </div>
                                        </div>
                                        <div id = "profile-follow-tit" style=""><p class="card-text profile-follow-tit follow-text">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                        <div id = "profile-follow-desc"style=""><p class="card-text profile-follow-desc follow-text-desc">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="p-2">
                                                <img id = "follow-img-big" src="img/Home/profile.jpg" class="rounded-circle" alt="..." width="40px" height="40px" >
                                            </div>
                                            <div class="p-2 prof-big-card">
                                                <a class = "profile-fol-name"id = "follow-name">Baymax</a>
                                            </div>
                                            <div class="ms-auto p-2 baca-lebih-container">
                                                <a class = "profile-tulisan-baca-lebih">Baca Lebih 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id = "profile-follow-card" class="gx-0 card rounded-0 mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px">
                            <div class="row g-0">
                                <div class="col-md-4 sm-w-200 profile-follow-img">
                                    <img id = "profile-follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body follow-card-body" >
                                        <div class="d-flex ">
                                            <div class="me-auto">
                                                <h5 id = "profile-follow-cat" class="card-title p-2" >Budaya</h5>
                                            </div>
                                            <div>
                                                <h5 id = "profile-follow-time"class="card-title" >3 hari yang lalu</h5>
                                            </div>
                                        </div>
                                        <div id = "profile-follow-tit" style=""><p class="card-text profile-follow-tit follow-text">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                        <div id = "profile-follow-desc"style=""><p class="card-text profile-follow-desc follow-text-desc">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="p-2">
                                                <img id = "follow-img-big" src="img/Home/profile.jpg" class="rounded-circle" alt="..." width="40px" height="40px" >
                                            </div>
                                            <div class="p-2 prof-big-card">
                                                <a class = "profile-fol-name"id = "follow-name">Baymax</a>
                                            </div>
                                            <div class="ms-auto p-2 baca-lebih-container">
                                                <a class = "profile-tulisan-baca-lebih">Baca Lebih 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/Home/profile.js"></script>
</body>
</html>