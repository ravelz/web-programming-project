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

@php
    use Carbon\Carbon;
    if ($data['methodId']== 1 ) {
        $data['method'] = "bca.jpg";
        $data['methods'] = "BCA Payment";
    } elseif ($data['methodId'] == 2) {
        $data['method'] = "paypal.jpg";
        $data['methods'] = "Paypal Payment";
    } else {
        $data['method'] = "visa.jpg";
        $data['methods'] = "Visa Payment";
    }
@endphp
<body class="krem">
    <div class="row d-flex krem report-container ">
        <div class="offset-1 col-10 row">
            <div class="col-5 kaRed d-flex flex-column rounded-start row">
                <div class="d-flex flex-column align-items-center border-bottom border-light border-opacity-25 ms-3">
                    <p class="display-6 text-light mt-3 fw-bold"> LAPORAN PEMBAYARAN</p>
                    <img width="250px" height="250px" class="img-fluid bg-light p-3 mb-4 " src="{{ asset('storage') }}/LOGO WEB.png" alt="">
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-wallet2 text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Jumlah: </p>
                        <p class="fs-5 text-light fw-semibold">
                        Rp 
                        @if ($paket == "Maxwin")
                            20.000
                            @elseif ($paket == "Scatter")
                            50.000
                        @endif
                        ,-</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-calendar text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Tanggal: </p>
                        <p class="fs-5 text-light fw-semibold">{{ Carbon::now()->format('Y-m-d') }}</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-person-circle text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Nama Pemilik Kartu: </p>
                        <p class="fs-5 text-light fw-semibold">{{ $data['namaKartu'] }}</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-envelope-at text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-light mb-0"> Email: </p>
                        <p class="fs-5 text-light fw-semibold">{{ $data["email"] }}</p>
                    </div> 
                </div>
                <a href = "{{ route('index') }}" type = "button" class=" col-4 mt-3 mb-3 btn btn-light text-dark fw-semibold fs-5 align-self-center">Kembali ke Home</a>
            </div>
            <div class="col-7 bg-light rounded-end">
                <div class="d-flex justify-content-between border-bottom border-dark border-opacity-25 ms-3 align-items-center">
                    <img width="160px" height="150px" class="img-fluid bg-light" src="{{ asset('storage/'.$data['method']) }}" alt="">
                    <p class="text-secondary mt-3 ms-3 fw-normal fs-5 me-3">{{ Carbon::now()->format('Y-m-d | H:i:s') }}   </p>
                </div>
                <div class="d-flex border-bottom border-dark border-opacity-25 ms-3">
                    <i class="bi bi-wallet2 text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-3 text-secondary fw-semibold">Akun Karya Budaya {{ $paket }} <span class="text-dark fw-semibold">(permanent)</span></p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-light border-opacity-25 ms-3">
                    <i class="bi bi-calendar text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class=" mt-3 fs-3 text-secondary fw-semibold">Halo {{ Auth::user()->username }}</p>
                        <p class="fs-5 text-secondary fw-normal">Terima kasih karena kamu telah melakukan pembayaran sebesar <span class="text-dark fw-semibold">
                            Rp 50.000,- <br></span> Kepada Karya Budaya. ( <span style = " color : #982727" class="fw-semibold">karyaBudaya@sunib.ac.id</span> )</p>
                    </div> 
                </div>
                <div class="d-flex border-bottom border-dark border-opacity-25 ms-3">
                    <i class="bi bi-person-circle text-light fs-5 mt-3 ms-3"></i> 
                    <div class="d-flex flex-column mt-3 ms-3">
                        <p class="fs-5 text-secondary mb-0"> Nama Pemilik Kartu: {{ $data['namaKartu'] }}</p>
                        <p class="fs-5 text-secondary fw-normal">Akunmu akan terupgrade sesuai dengan pembayaran yang telah dilakukan, <br>
                        dan ini akan memakan beberapa waktu.</p>
                    </div> 
                </div>
                <div class="d-flex justify-content-between ms-3 mt-3 mb-5">
                    <p style = "color : #982727" class="fs-5 fw-bold mb-0 ms-3"> www.karyabudaya.com</p>
                    <p class="fs-5 text-end text-dark fw-semibold me-3">ID Akun: {{ Auth::id() }}</p>
                </div>
            </div>
        </div>
    </div>
      
      <script src="./js/Home/payment.js"></script>
</body>
</html>
  
 
 
