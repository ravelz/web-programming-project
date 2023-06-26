<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karya Budaya | Home</title>

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!--Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" href="./css/Home/style.css">
    <link rel="stylesheet" href="./css/Home/homeRes.css">
    <link rel="stylesheet" href="./css/Home/homeAnimation.css">

</head>

<body >
    <div class="page" style="position: relative">

        @include('Partial/sidebarLeft')
       
        <!-- ====================================================HEADER & SEARCH============================================================== -->
        <section class="Header">
            <div class="row" style="">
                <div class="container-fluid back-nav" >
                    <div class="ham ham1">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                 </div>
                
                <div class="d-flex justify-content-end align-items-center me-4 log">
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
                        <img src="img/Home/LOGO WEB.png" alt="" class="web-logo">
                    </div> 
                    <div class="row justify-content-center mb-5">
                        <form class="search-form col-md-6 col-lg-4 col-12 col-sm-8 mx-auto">
                            <div class="form-group has-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4E4E4E" class="bi bi-search fw-bold" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                  </svg>
                                <input type="text" id = "klik-hilang" class="form-control placeMid" placeholder="Cari apapun tentang Indonesia... ">
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

            <div class="container-fluid artikel-diikuti-container">
                <div class="row">
                    <div class="row mt-2">
                        <div class="col-11 offset-1 ikuti">
                            <h3 class="judul-ikuti">Artikel dari yang kamu ikuti</h3>
                        </div>
                    </div>

                    <!-- ========CARD DIIKUTI======= -->
                    
                    <div class="offset-1 mt-1 d-flex flex-row flex-nowrap card-diikuti-container">

                        <div id="card-kecil" class="ikuti-card">
                            <div class="card" >
                                <img id = "pic-small" src="../img/Home/smallCard.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <div class="first-layer">
                                    <div class="kategori-waktu">
                                        <p id="kategori-small" class="kategori">TEMPAT WISATA</p>
                                        <p id ="waktu-small"class = "waktu">17 Jam yang lalu</p>
                                    </div>
                                </div>
                    
                                <h1 style="color: black" id = "judul-small" class="judul">Judul Artikel</h1>
                                <p style = "color: black" id = "deskripsi-small" class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quidem..</p>
                    
                                <div class="last-layer">
                                    <div class="foto-penulis">
                                        <a href=""><img id = "prof-small" src="img/Home/profile.jpg" class="img rounded-circle " alt="..." width="32px" height="32px"></a>
                                    </div>
                    
                                    <a href="" style="text-decoration: none" id = "name-small" class="nama-penulis">Steven Matthew</a>
                    
                                    <div class="baca-lebih">
                                        <a href = ""style = "text-decoration : none" id = "read-small" class="sub">Baca Lebih</a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="background: #5E5D2D;" class="bi bi-arrow-right panah" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>                      
    
                        <div id = "stengah-card" class="ikuti-card-half">
                            <div class="card" >
                                <img src="../img/Home/smallCard.jpg" class="card-img-top" alt="...">
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

                        <div id = "panah-next" class="next">
                            <img src="img\Home\right-arrow.png" alt="">
                        </div>
                        
                    </div>
                    
                </div>
            </div>

                <!-- ========SIDEBAR KANAN====== -->

                <div id = sidebar-right class="d-flex justify-content-end flex-row col-3 offset-9">
                    <div class="bungkus-sidebar d-flex flex-row">
                        <div class="sidebar-kanan">
                            <!-- ========TOP AUTHOR======= -->
                            <div class="top-author">
                                <h2 class="ikuti-title">Ikuti juga</h2>
                                <div id = side-top class="ikuti-author d-flex">
                                    <div class="ikuti-img">
                                        <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
                                    </div>
                                    <div class="nama-author d-flex">
                                        <div>
                                            <div><h1 id = "top-name" class = "nama-ikuti" >Cecep Arifin</h1></div>
                                            <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
                                        </div>
                                        <div class="kotak-tombol">
                                            <button type="button" class="btn btn-outline-secondary button-follow">Follow</button>
                                        </div>
                                    </div>
                                </div>
                                <div id = side-top class="ikuti-author d-flex">
                                    <div class="ikuti-img">
                                        <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
                                    </div>
                                    <div class="nama-author d-flex">
                                        <div>
                                            <div><h1 id = "top-name" class = "nama-ikuti" >Cecep Arifin</h1></div>
                                            <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
                                        </div>
                                        <div class="kotak-tombol">
                                            <button type="button" class="btn btn-outline-secondary button-follow">Follow</button>
                                        </div>
                                    </div>
                                </div>
                                <div id = side-top class="ikuti-author d-flex">
                                    <div class="ikuti-img">
                                        <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
                                    </div>
                                    <div class="nama-author d-flex">
                                        <div>
                                            <div><h1 id = "top-name" class = "nama-ikuti" >Cecep Arifin</h1></div>
                                            <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
                                        </div>
                                        <div class="kotak-tombol">
                                            <button type="button" class="btn btn-outline-secondary button-follow">Follow</button>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="saran" style="">
                                    <p class = "tulisan-saran" style="">Lihat lebih banyak saran...</p>
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
            <div class="row populer-container">

                <div class="row mt-2">
                    <div class="col-11 offset-1 ikuti">
                        <h3 class="judul-ikuti">Artikel dari yang kamu ikuti</h3>
                    </div>
                </div>

                                                             <!-- ========BIG CARD======= -->
                <div class="col-7 offset-1" >
                    <div id = follow-card class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 follow-img-container">
                                <img id = "follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body follow-card-body" >
                                    <div class="d-flex ">
                                        <div class="me-auto">
                                            <h5 id = "follow-cat" class="card-title p-2" >Budaya</h5>
                                        </div>
                                        <div>
                                            <h5 id = "follow-time"class="card-title " >3 hari yang lalu</h5>
                                        </div>
                                    </div>
                                
                                    <div id = "follow-tit" style=""><p class="card-text follow-text">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                                    <div id = "follow-desc"style=""><p class="card-text follow-text-desc">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="p-2">
                                            <img id = "follow-img-big"src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="44px" height="44px" >
                                        </div>
                                        <div class="p-2 prof-big-card">
                                            <a class = "fol-name"id = "follow-name">Baymax</a>
                                        </div>
                                        <div class="ms-auto p-2 baca-lebih-container">
                                            <a class = "tulisan-baca-lebih">Baca Lebih 
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
                        <a class = "tulisan-tampilkan-lebih">Tampilkan Lebih. . .</a>
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
