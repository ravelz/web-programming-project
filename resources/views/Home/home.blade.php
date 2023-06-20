@extends('layouts.app')

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

    {{-- Glide --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.4.1/dist/css/glide.core.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.4.1/dist/glide.min.js"></script>
    

</head>

<body>
    @section('content')
    <div class="page">
        <!-- ====================================================HEADER & SEARCH============================================================== -->
        <section class="Header">
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
        <section id = "isis" class="Content d-flex flex-row" >
            <!-- ========BANNER======= -->
            <div class="d-flex flex-column">
                <div class="row">
                    <div class="col offset-2 banner ">
                        <p class="sign ">Diikuti</p>
                    </div>
                    <div id = "view-all" class="col view-all">VIEW ALL
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                          </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-2">
                        <div class="col offset-2 ikuti">
                            <h3 class="judul-ikuti">Artikel dari yang kamu ikuti</h3>
                        </div>
                    </div>
                    <!-- ========CARD DIIKUTI======= -->

                    
                    
                    <div class="offset-1 mt-1 d-flex flex-row flex-nowrap" style="gap:24px; position:relative; " >
                        @foreach ($followedArticles as $article)
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
                                  <h1 class="judul">{{ $article->judul }}</h1>
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
                        @endforeach
                        <div id = "panah-next" class="next" style="position: absolute; bottom:200px; left:1000px; z-index:999;">
                            <img src="img\Home\right-arrow.png" alt="">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id = "isi" class="Content d-flex flex-row justify-content-around">
            <div class="d-flex flex-column">
                <div class="d-flex flex-column">
                    <div class="row mt-2">
                        <div class="col-11 offset-1 ikuti">
                            <h3 class="judul-ikuti" style="padding-bottom: 32px">Artikel dari yang kamu ikuti</h3>
                        </div>
                    </div>
    
                     <!-- ========BIG CARD======= -->
                    <div class="offset-1 pe-5" >
                        @foreach ($popularArticles as $article)
                            <x-article-item :article="$article"/>
                        @endforeach
                    </div>
                    <div>
                        <div class="col-7 offset-1">
                            <a href = ""style="background-color: #F5F0F0;color: #5E5D2D; font-size:20px; font-weight:600; font-family:'Rubik', sans-serif; padding-left:12px; text-decoration:underline;">Tampilkan Lebih. . .</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <!-- ========SIDEBAR KANAN====== -->
                <div class="d-flex flex-row col-3" >
                    <div class="bungkus-sidebar d-flex flex-row" style=" height: 0px;">
                        <div style="height: 729px">
                            <!-- ========TOP AUTHOR======= -->
                            <div style="border: 1px solid rgba(0,0,0,0.22); border-top:none;border-bottom:none;" >
                                <h2 style="padding-top: 32px; padding-left:24px ;">Ikuti juga</h2>
                                @guest

                                @endguest
                                @auth
                                    @foreach ($authors as $author)
                                        <div id = side-top class="ikuti-author d-flex">
                                            <div class="ikuti-img">
                                                <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
                                            </div>
                                            <div class="nama-author d-flex" style="margin-left: 16px">
                                                <div>
                                                    <div><h1 id = "top-name" class = "nama-ikuti" >{{ $author->name }}</h1></div>
                                                    <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
                                                </div>
                                                <div class="kotak-tombol">
                                                    <button type="button" class="btn btn-outline-secondary" style="color: black; border-radius: 20px; width:99px; height:39px; ">Follow</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endauth
                                <!-- Button trigger modal -->
                                <div style="margin-top : 12px; padding-left:24px; padding-bottom:32px;">
                                    <a style="color: #5E5D2D; font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat lebih banyak saran...</a>
                                </div>
                            </div>
                           
                            <!-- ========TOP TOPIC======= -->
                            <div class="top-topic" style="background-color: #F5F0F0; border: 1px solid rgba(0,0,0,0.22); border-bottom:none;">
                                <h2 style="padding-top: 32px;padding-left:24px;padding-right:32px; box-sizing:border-box">Topik yang direkomendasikan</h2>
                                <div class="ikuti-author">
                                    <div class="tags d-flex flex-row flex-wrap" style="font-family:'Rubik',sans-serif; font-size:16px">
                                        @foreach ($tags as $tag)
                                            <x-tag-item :tagItem="$tag"/>
                                        @endforeach                                        
                                    </div>
                                </div>                                                            
                                <a>Lihat lebih banyak topik...</a>
                                <div style="margin-top : 24px; padding-left:24px;">
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
            
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Follow more author</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column">
                @foreach ($authors as $author)
                <x-author-item :author="$author"/>
                @endforeach
                <div class="d-flex justify-content-center w-100 text-red">
                    {{ $authors->links()  }}
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>       
            </div>
        </div>
        </div>
    </div>
    @endsection

    <!--Javascript -->
    <script src="./js/Home/homescript.js"></script>
</body>
</html>

<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>



<style>
.glide__arrows {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
}
.glide__arrow {
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    width: 40px;
    height: 40px;
    background-color: rgba(0, 0, 0, 0.4);
    border-radius: 50%;
    color: white;
    font-size: 24px;
    line-height: 40px;
    text-align: center;
    transition: background-color 0.2s ease-in-out;
}
.glide__arrow:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
.glide__arrow--left {
    left: 20px;
}
.glide__arrow--right {
    right: 20px;
}
</style>