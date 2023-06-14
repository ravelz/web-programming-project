<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karya Budaya | Home</title>

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
    <!--Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" href="./css/Home/style.css">
    <link rel="stylesheet" href="./css/Home/homeRes.css">
    <link rel="stylesheet" href="./css/Home/homeAnimation.css">

</head>

<body>
    <div class="page">
       
        <!-- ====================================================HEADER & SEARCH============================================================== -->
        <section class="Header">
            <div class="row" style="">
               
                <div class="container-fluid back-nav" style="">
                    <div class="ham">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center me-4 log" style="padding-top:16px">
                    <button type="button" id = "button-atas"class="btn daftar me-3 ">Daftar</button>
                    <button type="button" id = "button-atas" class="btn masuk me-3">Masuk</button>
                    <div class="prof ">
                      <img src="img/Home/profile.jpg" class="img rounded-circle profile" alt="...">
                    </div>
                </div>
            </div>

            <!-- < 576, >=576, >=768, >=992, >=1200, >=1400 / ... /sm/md/lg/xl/xxl--> 
            <div class="row" >
                <div class="logo-search mb5">
                    <div class=" d-flex justify-content-center ">
                        <img src="img/Home/LOGO WEB.png" alt="" class="web-logo " style="width : 470px;">
                    </div> 
                    <div class="row justify-content-center mb-5">
                        <form class="search-form col-md-6 col-lg-4 col-12 col-sm-8 mx-auto" style="width: 48.3%">
                            <div class="form-group has-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4E4E4E" class="bi bi-search fw-bold" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                  </svg>
                                <input type="text" id = "klik-hilang" class="form-control" placeholder="Cari apapun tentang Indonesia... ">
                            </div>
                        </form>
                    </div>   
                </div>
            </div>
               
                
        </section>

                                                        <!-- ========PEMBATAS======== -->
        <div class="pembatas-bawah"></div>

        <!-- ====================================================ISI============================================================== -->
        <section id = "isi" class="Content">
                                                         <!-- ========BANNER======= -->
            <div class="row">
                <div class="col-1 offset-1 banner ">
                    <p class="sign ">Diikuti</p>
                </div>

                <div id = "view-all" class="col-3 view-all">VIEW ALL
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                </div>
            </div>

                                                    <!-- ========ARTIKEL DIIKUTI======= -->

            <div class="container-fluid" style="position: relative">
                <div class="row">
                    <div class="row mt-2">
                        <div class="col-11 offset-1 ikuti">
                            <h3 class="judul-ikuti">Artikel dari yang kamu ikuti</h3>
                        </div>
                    </div>

                    <!-- ========CARD DIIKUTI======= -->
                    
                    <div class="offset-1 mt-1 d-flex flex-row flex-nowrap" style="gap:24px; position:relative; " >

                        {{-- @include('../Component/homeComponent/miniCard') --}}
                        
                        <div id = "stengah-card" class="ikuti-card">
                            <div class="card" style="max-width: 291.61px; height:auto; border-radius: 0px; clip-path: polygon(0 0, 0 100%, 50% 100%, 50% 0);">
                                <img src="../img/Home/smallCard.jpg" class="card-img-top" alt="..." style="border-radius: 0px;">
                                <div class="card-body">
                                  <div class="first-layer">
                                    <div class="kategori-waktu">
                                        <p class="kategori">TEMPAT WISATA</p>
                                        <p class = "waktu">17 Jam yang lalu</p>
                                    </div>
                                  </div>
        
                                  <h1 class="judul">Judul Artikel</h1>
                                  <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quidem..</p>
        
                                  <div class="last-layer">
                                    <div class="foto-penulis">
                                        <img src="img/Home/profile.jpg" class="img rounded-circle " alt="..." width="32px" height="32px">
                                    </div>
        
                                    <p class="nama-penulis">Steven Matthew</p>
        
                                    <div class="baca-lebih">
                                        <p class="sub">Baca Lebih</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="background: #5E5D2D;" class="bi bi-arrow-right panah" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id = "panah-next" class="next" style="position: absolute; bottom:200px; left:1000px; z-index:999;">
                            <img src="img\Home\right-arrow.png" alt="">
                        </div>
                        
                    </div>
                    
                </div>
            </div>

                <!-- ========SIDEBAR KANAN====== -->

                <div id = sidebar-right class="d-flex justify-content-end flex-row col-3 offset-9" style="position: relative;">
                    <div class="bungkus-sidebar d-flex flex-row" style=" height: 0px;">
                        <div class="sidebar-kanan" style="height: 729px">
                            <!-- ========TOP AUTHOR======= -->
                            <div class="top-author" style="border: 1px solid rgba(0,0,0,0.22); border-top:none;border-bottom:none;" >
                                <h2 style="padding-top: 32px; padding-left:24px ;">Ikuti juga</h2>
                                <div id = side-top class="ikuti-author d-flex">
                                    <div class="ikuti-img">
                                        <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
                                    </div>
                                    <div class="nama-author d-flex" style="margin-left: 16px">
                                        <div>
                                            <div><h1 id = "top-name" class = "nama-ikuti" >Cecep Arifin</h1></div>
                                            <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
                                        </div>
                                        <div class="kotak-tombol">
                                            <button type="button" class="btn btn-outline-secondary" style="color: black; border-radius: 20px; width:99px; height:39px; ">Follow</button>
                                        </div>
                                    </div>
                                </div>
                                <div  id = side-top class="ikuti-author d-flex">
                                    <div class="ikuti-img">
                                        <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
                                    </div>
                                    <div class="nama-author d-flex" style="margin-left: 16px">
                                        <div>
                                            <div><h1 id = "top-name" class = "nama-ikuti" >Cecep Arifin</h1></div>
                                            <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
                                        </div>
                                        <div class="kotak-tombol">
                                            <button type="button" class="btn btn-outline-secondary" style="color: black; border-radius: 20px; width:99px; height:39px; ">Follow</button>
                                        </div>
                                    </div>
                                </div>
                                <div  id = side-top class="ikuti-author d-flex">
                                    <div class="ikuti-img">
                                        <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
                                    </div>
                                    <div class="nama-author d-flex" style="margin-left: 16px">
                                        <div>
                                            <div><h1 id = "top-name" class = "nama-ikuti" >Cecep Arifin</h1></div>
                                            <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
                                        </div>
                                        <div class="kotak-tombol">
                                            <button type="button" class="btn btn-outline-secondary" style="color: black; border-radius: 20px; width:99px; height:39px; ">Follow</button>
                                        </div>
                                    </div>
                                </div>
        
                                <div style="margin-top : 12px; padding-left:24px; padding-bottom:32px;">
                                    <p style="color: #5E5D2D; font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;">Lihat lebih banyak saran...</p>
                                </div>
                            </div>
                           
                            <!-- ========TOP TOPIC======= -->
                            <div class="top-topic" style="background-color: #F5F0F0; border: 1px solid rgba(0,0,0,0.22); border-bottom:none;">
                                <h2 style="padding-top: 32px;padding-left:24px;padding-right:32px; box-sizing:border-box">Topik yang direkomendasikan</h2>
                                <div class="ikuti-author ">
                                    <div class="tags" style="margin-top:16px; margin left: 8px;font-family:'Rubik',sans-serif; font-size:16px">
                                        <div style="margin-top:16px; margin left: 8px;">
                                            <button type="button" id ="button-tag" class="btn btn-primary btn-sm top-tag" style=" background-color:#982727; border-radius:20px; border:none; ">Small button</button>
                                            <button type="button" id ="button-tag" class="btn btn-primary btn-sm top-tag" style=" background-color:#982727; border-radius:20px; border:none; ">Small </button>
                                        </div>
                                        <div style="margin-top:16px; margin left: 8px;color:#982727; border-radius:20px;">
                                            <button type="button" id ="button-tag" class="btn btn-primary btn-sm top-tag" style=" background-color:#982727; border-radius:20px; border:none; ">big</button>
                                            <button type="button" id ="button-tag" class="btn btn-primary btn-sm top-tag" style=" background-color:#982727; border-radius:20px; border:none; ">Machine Learning</button>
                                        </div>
                                        <div style="margin-top:16px; margin left: 8px;color:#982727; border-radius:20px;">
                                            <button type="button" id ="button-tag" class="btn btn-primary btn-sm top-tag" style=" background-color:#982727; border-radius:20px; border:none; ">Small button</button>
                                            <button type="button" id ="button-tag" class="btn btn-primary btn-sm top-tag" style=" background-color:#982727; border-radius:20px; border:none; ">Small button</button>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top : 24px; padding-left:24px;">
                                    <p style="background-color: #F5F0F0;color: #5E5D2D; font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;">Lihat lebih banyak topik...</p>
                                </div>
                            </div>
    
                            <!-- ========LIST YANG AKAN DIBACA======= -->
    
                            <div class="disimpan" style="background-color: #F5F0F0;border: 1px solid rgba(0,0,0,0.22);border-top:none; border-bottom:none; position:relative; bottom:16px;">
                                <h2 style="padding-left: 24px; padding-top:32px;">List yang akan dibaca</h2>
                                <div style="margin-top : 24px; padding-left:24px">
                                    <p style="color: rgba(0,0,0,0.51); font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;">Klik pada tanda 
                                        <img src="img/Home/Vector.png" alt=""> pada artikel manapun, untuk menambahkannya pada list ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

                                                    <!-- ========ARTIKEL POPULER KATEGORI TERTENTU======= -->
            <div class="row" style="position: relative">

                <div class="row mt-2">
                    <div class="col-11 offset-1 ikuti">
                        <h3 class="judul-ikuti" style="padding-bottom: 32px">Artikel dari yang kamu ikuti</h3>
                    </div>
                </div>

                                                             <!-- ========BIG CARD======= -->
                <div class="col-7 offset-1" >
                    <div id = follow-card class="card mb-3" style="max-width: 1005px; height: auto">
                        <div class="row g-0">
                            <div class="col-md-4" style="height: auto">
                                <img id = "follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="height: auto">
                                    <div class="d-flex ">
                                        <div class="me-auto">
                                            <h5 id = "follow-cat" class="card-title p-2" style="color:#982727;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;
                                            padding-left:32px; padding-top:16px; box-sizing:border-box">Budaya</h5>
                                        </div>
                                        <div>
                                            <h5 id = "follow-time"class="card-title " style="color:#982727;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif;
                                            padding-top:8px; padding-right:32px;box-sizing:border-box">3 hari yang lalu</h5>
                                        </div>
                                    </div>
                                
                                    <div id = "follow-tit" style="max-width: 527px; max-height:400px;"><p class="card-text" style="padding-left: 8px;color:black;font-size:34px; font-weight:400; font-family:'Rubik', sans-serif;">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                    <div id = "follow-desc"style="max-width: 527px; max-height:400px"><p class="card-text" style="padding-left: 8px;color:background: #374A59;
                                        ;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif; padding-top:24px">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="p-2" style="">
                                            <img style = "margin-bottom: 8px;"id = "follow-img"src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="44px" height="44px" >
                                        </div>
                                        <div class="p-2" style="margin-top:8px">
                                            <a href = ""id = "follow-name"style="text-decoration:none;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baymax</a>
                                        </div>
                                        <div class="ms-auto p-2" style="margin-top:8px">
                                            <a href = ""style="text-decoration : none; padding-top: 8px; padding-right:32px;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baca Lebih 
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
                    <div id = follow-card class="card mb-3" style="max-width: 1005px; height: auto">
                        <div class="row g-0">
                            <div class="col-md-4" style="height: auto">
                                <img id = "follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="height: auto">
                                    <div class="d-flex ">
                                        <div class="me-auto">
                                            <h5 id = "follow-cat" class="card-title p-2" style="color:#982727;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;
                                            padding-left:32px; padding-top:16px; box-sizing:border-box">Budaya</h5>
                                        </div>
                                        <div>
                                            <h5 id = "follow-time"class="card-title " style="color:#982727;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif;
                                            padding-top:8px; padding-right:32px;box-sizing:border-box">3 hari yang lalu</h5>
                                        </div>
                                    </div>
                                
                                    <div id = "follow-tit" style="max-width: 527px; max-height:400px;"><p class="card-text" style="padding-left: 8px;color:black;font-size:34px; font-weight:400; font-family:'Rubik', sans-serif;">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                    <div id = "follow-desc"style="max-width: 527px; max-height:400px"><p class="card-text" style="padding-left: 8px;color:background: #374A59;
                                        ;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif; padding-top:24px">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="p-2" style="">
                                            <img style = "margin-bottom: 8px;"id = "follow-img"src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="44px" height="44px" >
                                        </div>
                                        <div class="p-2" style="margin-top:8px">
                                            <a href = ""id = "follow-name"style="text-decoration:none;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baymax</a>
                                        </div>
                                        <div class="ms-auto p-2" style="margin-top:8px">
                                            <a href = ""style="text-decoration : none; padding-top: 8px; padding-right:32px;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baca Lebih 
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
                    <div id = follow-card class="card mb-3" style="max-width: 1005px; height: auto">
                        <div class="row g-0">
                            <div class="col-md-4" style="height: auto">
                                <img id = "follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="height: auto">
                                    <div class="d-flex ">
                                        <div class="me-auto">
                                            <h5 id = "follow-cat" class="card-title p-2" style="color:#982727;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;
                                            padding-left:32px; padding-top:16px; box-sizing:border-box">Budaya</h5>
                                        </div>
                                        <div>
                                            <h5 id = "follow-time"class="card-title " style="color:#982727;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif;
                                            padding-top:8px; padding-right:32px;box-sizing:border-box">3 hari yang lalu</h5>
                                        </div>
                                    </div>
                                
                                    <div id = "follow-tit" style="max-width: 527px; max-height:400px;"><p class="card-text" style="padding-left: 8px;color:black;font-size:34px; font-weight:400; font-family:'Rubik', sans-serif;">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                    <div id = "follow-desc"style="max-width: 527px; max-height:400px"><p class="card-text" style="padding-left: 8px;color:background: #374A59;
                                        ;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif; padding-top:24px">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="p-2" style="">
                                            <img style = "margin-bottom: 8px;"id = "follow-img"src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="44px" height="44px" >
                                        </div>
                                        <div class="p-2" style="margin-top:8px">
                                            <a href = ""id = "follow-name"style="text-decoration:none;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baymax</a>
                                        </div>
                                        <div class="ms-auto p-2" style="margin-top:8px">
                                            <a href = ""style="text-decoration : none; padding-top: 8px; padding-right:32px;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baca Lebih 
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
                <div>
                    <div class="col-7 offset-1">
                        <a href = ""style="background-color: #F5F0F0;color: #5E5D2D; font-size:20px; font-weight:600; font-family:'Rubik', sans-serif; padding-left:12px; text-decoration:underline;">Tampilkan Lebih. . .</a>
                    </div>
                </div>
        </section>
        
         <!-- ====================================================FOOTER============================================================== -->
            @include('Partial/footer')
    </div>

    <!--Javascript -->
    <script src="./js/Home/homescript.js"></script>
</body>
</html>