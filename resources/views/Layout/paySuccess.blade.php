<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karya Budaya | Payment</title>

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
<body>
    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center position-relative">
            <img src="img/Payment/suc.png" class="scroll-log">
            <div class="d-flex justify-content-center align-items-center suc-pop position-absolute ">
                <div class="card" style="width: 30rem;">
                    <div class="shadow-lg card-body suc-card rounded">
                        <h5 class="card-title text-white h2">PEMBAYARAN BERHASIL!</h5>
                        <p class="card-text text-white">Pembayaran anda telah diproses. Terima kasih telah subscribe !</p>
                        <a class="btn btn-light" href="{{ route('payment') }}" role="button"><span class="h6">Kembali Ke Home</span></a>
                    </div>
                </div>
            </div>
        </div>
        <svg class="ombak fixed-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#982727" d="M0,320H1440V0c-240,0-480,160-720,160S240,0,0,0V320z"></path>
        </svg>
    </div>
    <script src="./js/Home/payment.js"></script>
</body>
</html>