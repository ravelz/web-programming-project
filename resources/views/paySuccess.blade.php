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
<body>
    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-6 me-3 backReport1">
                <img src="{{ asset('storage') }}/upload/debit-card.png" class="back-img1 img-fluid mt-5" alt="">
            </div>
            <div class="offset-2 col-4 shadow shadow-lg d-flex flex-column mb-5 mt-5 payReport rounded position-absolute">
                <div class="d-flex flex-column align-items-center border border-dark border-opacity-25 p-3 mt-3 headerReport rounded">
                    <img src="{{ asset('storage') }}/upload/LOGO WEB.png" class="success-logo img-fluid mt-3" alt="">
                    <p class="judul-report fw-bold text-success mt-2">Payment Success</p>
                    <img src="{{ asset('storage') }}/upload/checked.png" class="success-ceklist img-fluid" alt="">
                </div>
                <x-report-att></x-report-att>
                <x-report-att></x-report-att>
                <x-report-att></x-report-att>
                <x-report-att></x-report-att>
                <x-report-att></x-report-att>
                <div class="d-flex justify-content-center mb-3 mt-5">
                    <a href = {{ route('home') }} type="button" class="btn btn-light shadow shadow-lg btn-tamat"><span class="tamat fw-semibold">Kembali Ke Home</span></a>
                </div>
            </div>  
            <div class="offset-5 col-6 backReport2 position-absolute">
                <img src="{{ asset('storage') }}/upload/premium.png" class="back-img2 img-fluid mt-5" alt="">
            </div>
        </div>
    </div>
    
      <script src="./js/Home/payment.js"></script>
</body>
</html>
  
 
 
