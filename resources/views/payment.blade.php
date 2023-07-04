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
    <div class="container-fluid gx-0">
        <div class="container d-flex flex-column mt-5">
            <p class="h1 fw-bold judul-ikuti mt-5 ">Pembayaran</p>
            <p class="fw-medium fs-4">Pilih Metode Pembayaran di Bawah</p>
            <div class="d-flex justify-content-between text-center">
                {{-- ======PAYMENT METHOD 1======== --}}
                <x-payment-method></x-payment-method>
                <x-payment-method></x-payment-method>
                <x-payment-method></x-payment-method>
            </div>
        </div>
        {{-- =============MODAL============ --}}
        <x-payment-modal></x-payment-modal>



        
    <script src="./js/Home/payment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>