<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!--Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <style>
       html{
            background: rgb(152,39,39);
            background: linear-gradient(277deg, rgba(152,39,39,1) 0%, rgba(245,240,240,1) 100%);
       }
    </style>
<body class="krem">
    <div class="row d-flex krem report-container rounded">
        <div class="offset-1 col-10 row rounded">
            <div class="col-5 kaRed d-flex flex-column rounded">
                <div class="d-flex flex-column align-items-center border-bottom border-light border-opacity-25 ms-3">
                    <p class="display-6 text-light mt-3 fw-bold"> LAPORAN PEMBAYARAN</p>
                    <img width="250px" height="250px" class="img-fluid bg-light p-3 mb-4 " src="{{ asset('storage') }}/upload/LOGO WEB.png" alt="">
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-wallet2 text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Jumlah: </p>
                        <p class="fs-5 text-light fw-semibold">Rp 50.000,-</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-calendar text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Tanggal: </p>
                        <p class="fs-5 text-light fw-semibold">12 - 03 - 2023</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-person-circle text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Nama Pemilik Kartu: </p>
                        <p class="fs-5 text-light fw-semibold">Steven Matthew</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-envelope-at text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Email: </p>
                        <p class="fs-5 text-light fw-semibold">stevenmatthew@binus.ac.id</p>
                    </div> 
                </div>
            </div>
            <div class="col-7 bg-light rounded">
                <div class="d-flex justify-content-between border-bottom border-dark border-opacity-25 ms-3 align-items-center">
                    <img width="160px" height="150px" class="img-fluid bg-light" src="{{ asset('storage') }}/upload/bca2.png" alt="">
                    <p class="text-secondary mt-3 ms-3 fw-normal fs-5 me-3"> 12 Maret 2023 | 09:30:25  </p>
                </div>
                <div class="d-flex border-bottom border-dark border-opacity-25 ms-3">
                    <i class="bi bi-wallet2 text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-3 text-secondary fw-semibold">Akun Karya Budaya Premium <span class="text-dark fw-semibold">(permanent)</span></p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-calendar text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Tanggal: </p>
                        <p class="fs-3 text-secondary fw-semibold">Halo Username</p>
                        <p class="fs-5 text-secondary fw-normal"> telah melakukan pembayaran sebesar <span class="text-dark fw-semibold">
                            Rp 50.000,- <br></span> Kepada Karya Budaya. ( <span style = " color : #982727" class="fw-semibold">karyaBudaya@Binus.ac.id</span> )</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-dark border-opacity-25 ms-3">
                    <i class="bi bi-person-circle text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Nama Pemilik Kartu: </p>
                        <p class="fs-5 text-secondary fw-normal">Akunmu akan terupgrade sesuai dengan pembayaran yang telah dilakukan, <br>
                        dan tunggu sebentar saja.</p>
                    </div> 
                </div>
                <div class="d-flex justify-content-between ms-3 mt-3 mb-5">
                    <p style = "color : #982727" class="fs-5 fw-bold mb-0 ms-3"> www.karya budaya.com</p>
                    <p class="fs-5 text-end text-dark fw-semibold me-3">ID Akun : 20</p>
                </div>
            </div>
        </div>
    </div>
      
      <script src="./js/Home/payment.js"></script>
</body>
</html>
  
 
 
