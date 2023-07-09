
    <!--CSS -->
<link rel="stylesheet" href="./css/Home/style.css">

</head>
<body>
    <div class="container gx-0">
        <div class="pay-method-card container d-flex flex-column shadow shadow-lg rounded">
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
    </div>
    <script src="./js/Home/payment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>