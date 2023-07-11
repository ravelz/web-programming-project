<!DOCTYPE html>
<html class="pt-0" lang="en">
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
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

</head>

<style>
   @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }   
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(0%);
        }
    }

    .tit {
        animation: fadeIn 1s ease-in-out;
    }

    .card {
        animation: slideInRight 2s ease-in-out;
        animation-delay: calc(0.5s + var(--card-delay) * 0.2s); 
        opacity: 0;
    }

    .card.visible {
        opacity: 1; 
    }
</style>
<body class="pt-2" style="background-color: #F5F0F0;">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex col-12 flex-row justify-content-around">
                <a href = "{{ route('index') }}" type = "button" class="btn kaRed text-light fw-semibold fs-5 align-self-start ">Kembali</a>
                <p class="display-2 mb-5 fw-bold tit">Our Teamates</p>
                <div></div>
            </div>
            
            <div class="d-flex flex-column">
                <div class="offset-sm-1 offset-lg-3 col-sm-6 col-12 d-flex justify-content-between ">
                    <div class="card col-6 col-lg-4 col-sm-6 border-light mb-3" style="max-width: 30rem;">
                        <div class="d-flex justify-content-between kaRed rounded-top">
                            <div class="card-header text-light fs-3 text-rubik pb-5">Ella</div>
                            <div class="d-flex me-3 mt-3">
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <img class="img-thumbnail rounded-circle profil-about mb-4" src="{{ asset('storage') }}/upload/smallCard.jpg" alt="">
                          <h5 class="card-title fs-2 mb-3 mt-2 text-center text-rubik">ANJAY GURINJAY</h5>
                          <p class="card-text text-center text-rubik mb-5 p-2">Makan daging anjing dengan sayur KOL !!!</p>
                        </div>
                    </div>
                    <div class="card ms-3 col-6 col-lg-4 col-sm-6 border-light mb-3" style="max-width: 30rem;">
                        <div class="d-flex justify-content-between kaRed rounded-top">
                            <div class="card-header text-light fs-3 text-rubik pb-5">Ella</div>
                            <div class="d-flex me-3 mt-3">
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <img class="img-thumbnail rounded-circle profil-about mb-4" src="{{ asset('storage') }}/upload/smallCard.jpg" alt="">
                          <h5 class="card-title fs-2 mb-3 mt-2 text-center text-rubik">ANJAY GURINJAY</h5>
                          <p class="card-text text-center text-rubik mb-5 p-2">Makan daging anjing dengan sayur KOL !!!</p>
                        </div>
                    </div>
                    <div class="card ms-3 col-6 col-lg-4 col-sm-6 border-light mb-3" style="max-width: 30rem;">
                        <div class="d-flex justify-content-between kaRed rounded-top">
                            <div class="card-header text-light fs-3 text-rubik pb-5">Ella</div>
                            <div class="d-flex me-3 mt-3">
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <img class="img-thumbnail rounded-circle profil-about mb-4" src="{{ asset('storage') }}/upload/smallCard.jpg" alt="">
                          <h5 class="card-title fs-2 mb-3 mt-2 text-center text-rubik">ANJAY GURINJAY</h5>
                          <p class="card-text text-center text-rubik mb-5 p-2">Makan daging anjing dengan sayur KOL !!!</p>
                        </div>
                    </div>
                </div>
                <div class="offset-3 col-6 d-flex justify-content-center mt-3">
                    <div class="card col-6 col-lg-4 col-sm-6 border-light mb-3" style="max-width: 30rem;">
                        <div class="d-flex justify-content-between kaRed rounded-top">
                            <div class="card-header text-light fs-3 text-rubik pb-5">Ella</div>
                            <div class="d-flex me-3 mt-3">
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <img class="img-thumbnail rounded-circle profil-about mb-4" src="{{ asset('storage') }}/upload/smallCard.jpg" alt="">
                          <h5 class="card-title fs-2 mb-3 mt-2 text-center text-rubik">ANJAY GURINJAY</h5>
                          <p class="card-text text-center text-rubik mb-5 p-2">Makan daging anjing dengan sayur KOL !!!</p>
                        </div>
                    </div>
                    <div class="card ms-3 col-6 col-lg-4 col-sm-6 border-light mb-3" style="max-width: 30rem;">
                        <div class="d-flex justify-content-between kaRed rounded-top">
                            <div class="card-header text-light fs-3 text-rubik pb-5">Ella</div>
                            <div class="d-flex me-3 mt-3">
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                                <i class="ms-2 bi bi-facebook text-light fs-4"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <img class="img-thumbnail rounded-circle profil-about mb-4" src="{{ asset('storage') }}/upload/smallCard.jpg" alt="">
                          <h5 class="card-title fs-2 mb-3 mt-2 text-center text-rubik">ANJAY GURINJAY</h5>
                          <p class="card-text text-center text-rubik mb-5 p-2">Makan daging anjing dengan sayur KOL !!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/Home/payment.js') }}"></script>
</body>
</html>