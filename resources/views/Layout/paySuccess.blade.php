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
    <div id="intro" class="bg-image shadow-2-strong d-flex flex-column justify-content-center">
        <div class="mask" style="background-color: #982727">
            <div class="container d-flex justify-content-center align-items-center text-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 title-sukses">Pembayaran Berhasil!</h1>
                    <h5 class="mb-4">Pembayaran anda telah diproses! kami akan memberikan detailnya kepada anda secepatnya melalui email anda.</h5>
                    <a class="btn btn-light btn-lg m-2" href="{{ route('payment') }}" role="button" rel="nofollow"><span class="h5">Back to Home</span></a>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/Home/payment.js"></script>
</body>
</html>