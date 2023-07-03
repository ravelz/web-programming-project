<link rel="stylesheet" href="./css/Home/style.css">
<link rel="stylesheet" href="./css/Home/homeRes.css">
<link rel="stylesheet" href="./css/Home/homeAnimation.css">

<style>
    a:hover{
        background-color: #D9D9D9;
    }
</style>

<div class="tempat-side">
    <div class="xenon container-fluid flex-column ">
        <div>
            <div class="main d-flex flex-column justify-content-between  mt-3" >
                <div class="d-flex flex-column align-items-center me-3">
                    <img src="img/home/LOGO WEB.png" alt=""height = "120px" width="200px">
                </div>
                
                <div class="d-flex flex-column justify-content-between mt-3 mb-3 ms-4">
                    <a class = "mainItem" href="" >
                        <i class="mainIcon bi bi-grid bi-2x"></i> 
                        <span class="spanMain ms-3 fw-normal">Utama</span>
                    </a>
                    <a class = "mainItem" href="" >
                        <i class="mainIcon bi bi-bell" ></i>
                        <span class="spanMain ms-3 fw-normal ">Notifikasi</span>
                    </a>
                    <a class = "mainItem" href="" >
                        <i class="mainIcon bi bi-gear"  ></i>  
                        <span class="spanMain ms-3 fw-normal " >Pengaturan</span>
                    </a>
                    <a class = "mainItem" href="" >
                        <i class="mainIcon bi bi-gem"  ></i>
                        <span class="spanMain ms-3 fw-normal " >Langganan</span>  
                    </a>
                </div>
            </div>

            <div class="kategori d-flex flex-column justify-content-between mt-3">
                <p class="title mt-2 ms-4 fw-normal">Kategori</p>
                
                <div class="d-flex flex-column justify-content-between mt-1 ms-3 ">
                    @include('Component/homeComponent/sidebarTag')
                    @include('Component/homeComponent/sidebarTag')
                    @include('Component/homeComponent/sidebarTag')
                    @include('Component/homeComponent/sidebarTag')
                    @include('Component/homeComponent/sidebarTag')
                    @include('Component/homeComponent/sidebarTag')
                    @include('Component/homeComponent/sidebarTag')
                    {{-- <a href="" style="text-decoration : none; color :black; font-family : 'Rubik', sans-serif; font-size : 15px; font-style:normal; margin-top : 16px">
                        <i class="bi bi-dot" style="font-size : 1vmax; color : #F2BE00" ></i> <span class="ms-3 fw-normal" style="font-size : 1vmax">Tari Daerah</span>
                    </a>
                    <a href="" style="text-decoration : none; color :black; font-family : 'Rubik', sans-serif; font-size : 15px; font-style:normal; margin-top : 16px">
                        <i class="bi bi-dot" style="font-size : 1vmax; color : #ED66D7" ></i> <span class="ms-3 fw-normal" style="font-size : 1vmax">Lagu dan Musik</span>
                    </a>
                    <a href="" style="text-decoration : none; color :black; font-family : 'Rubik', sans-serif; font-size : 15px; font-style:normal; margin-top : 16px">
                        <i class="bi bi-dot" style="font-size : 1vmax; color : #5CA2D4" ></i> <span class="ms-3 fw-normal" style="font-size : 1vmax">Mitos</span>
                    </a>
                    <a href="" style="text-decoration : none; color :black; font-family : 'Rubik', sans-serif; font-size : 15px; font-style:normal; margin-top : 16px">
                        <i class="bi bi-dot" style="font-size : 1vmax; color : #BCBB7D" ></i> <span class="ms-3 fw-normal" style="font-size : 1vmax">Pakaian dan Attribut</span>
                    </a>
                    <a href="" style="text-decoration : none; color :black; font-family : 'Rubik', sans-serif; font-size : 15px; font-style:normal; margin-top : 16px">
                        <i class="bi bi-dot" style="font-size : 1vmax; color : #9C81EB" ></i> <span class="ms-3 fw-normal" style="font-size : 1vmax">Makanan Daerah  </span>
                    </a>
                    <a href="" style="text-decoration : none; color :black; font-family : 'Rubik', sans-serif; font-size : 15px; font-style:normal; margin-top : 16px">
                        <i class="bi bi-dot" style="font-size : 1vmax; color : #6FF0A3" ></i> <span class="ms-3 fw-normal" style="font-size : 1vmax">Upacara Adat</span>
                    </a>
                    <a href="" style="text-decoration : none; color :black; font-family : 'Rubik', sans-serif; font-size : 15px; font-style:normal; margin-top : 16px">
                        <i class="bi bi-dot" style="font-size : 1vmax; color : #F1B46C" ></i> <span class="ms-3 fw-normal" style="font-size : 1vmax">Cerita Rakyat</span>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class = "overlay" style=""> </div>

