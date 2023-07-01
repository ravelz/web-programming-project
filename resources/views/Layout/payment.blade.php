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
                <div class="payMethod border border-5" data-bs-toggle="modal" data-bs-target="#exampleModal1" >
                    <label class="form-check-label" for="flexRadioDefault1">
                        <img class="img-fluid" 
                        src="img/payment/bca2.png" alt="">
                        <div class="form-check">
                            <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault1"><span class="h5 pt-2 pe-3">BCA Payment</span>
                        </div>
                    </label>
                </div>
            
                {{-- ======PAYMENT METHOD 2======== --}}
                <div class="payMethod border border-5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        <img class="img-fluid" 
                        src="img/payment/paypal.png"alt="">
                        <div class="form-check text-center">
                            <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault2"><span class="h5 pt-2 pe-3  ">Paypal Payment</span>
                        </div>
                    </label>
                </div>

                 {{-- ======PAYMENT METHOD 3======== --}}
                <div class="payMethod border border-5" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        <img class="amazon img-fluid" 
                        src="img/payment/visaFix.png"alt="">
                        <div class="form-check text-center">
                            <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault3"><span class="h5 pt-2 pe-3">Visa Payment</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        {{-- =============MODAL============ --}}
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-3 fw-bold" id="exampleModalLabel">BCA Payment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        {{-- ========ISI MODAL======== --}}
                        <div class="row">
                            <div class="mt-2 col-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Panjang</label>
                                <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                            </div>
                            <div class="mt-2 col-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Alamat Email</label>
                                <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="nama@contoh.com">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6 mt-2">
                                <label for="Select" class="form-label fw-bold">Kota</label>
                                <select id="Select" class="form-select">
                                    <option  value="" disabled selected class="secondary-text">Pilih Kota</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="Select" class="form-label fw-bold">Negara</label>
                                <select id="Select" class="form-select">
                                    <option  value="" disabled selected class="secondary-text">Pilih Negara</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6 mt-2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Pemilik Kartu</label>
                                <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nomor Kartu</label>
                                <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="xxxx-xxxx-xxxx-xxxx">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex flex-column">
                        <button type="button" id = "klik-bayar1"class="btn btn-danger klik-bayar"><span class="bayarCuy fs-5">Bayar</span></button>
                        <div id = "spin1" class="spinner-border text-danger mt-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-3 fw-bold" id="exampleModalLabel">Paypal Payment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        {{-- ========ISI MODAL======== --}}
                        <div class="row">
                            <div class="mt-2 col-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Panjang</label>
                                <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                            </div>
                            <div class="mt-2 col-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Alamat Email</label>
                                <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="nama@contoh.com">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6 mt-2">
                                <label for="Select" class="form-label fw-bold">Kota</label>
                                <select id="Select" class="form-select">
                                    <option  value="" disabled selected class="secondary-text">Pilih Kota</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="Select" class="form-label fw-bold">Negara</label>
                                <select id="Select" class="form-select">
                                    <option  value="" disabled selected class="secondary-text">Pilih Negara</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6 mt-2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Pemilik Kartu</label>
                                <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nomor Kartu</label>
                                <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="xxxx-xxxx-xxxx-xxxx">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex flex-column">
                        <button type="button" id = "klik-bayar2"class="btn btn-danger klik-bayar"><span class="bayarCuy fs-5">Bayar</span></button>
                        <div id = "spin2" class="spinner-border text-danger mt-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-3 fw-bold" id="exampleModalLabel">Visa Payment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        {{-- ========ISI MODAL======== --}}
                        <div class="row">
                            <div class="mt-2 col-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Panjang</label>
                                <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                            </div>
                            <div class="mt-2 col-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Alamat Email</label>
                                <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="nama@contoh.com">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6 mt-2">
                                <label for="Select" class="form-label fw-bold">Kota</label>
                                <select id="Select" class="form-select">
                                    <option  value="" disabled selected class="secondary-text">Pilih Kota</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="Select" class="form-label fw-bold">Negara</label>
                                <select id="Select" class="form-select">
                                    <option  value="" disabled selected class="secondary-text">Pilih Negara</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6 mt-2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Pemilik Kartu</label>
                                <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Nomor Kartu</label>
                                <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="xxxx-xxxx-xxxx-xxxx">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex flex-column">
                        <button type="button" id = "klik-bayar3"class="btn btn-danger klik-bayar"><span class="bayarCuy fs-5">Bayar</span></button>
                        <div id = "spin3" class="spinner-border text-danger mt-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===================END MODAL=============== --}}

        {{-- <div class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <p class="h3">Info Billing</p>
                    <div class="mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Nama Panjang</label>
                        <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                    </div>
                    <div class="mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                        <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="nama@contoh.com">
                    </div>
                    <div class="col-6 d-flex mt-4 ">
                        <div class="col-10">
                            <label for="Select" class="form-label">Kota</label>
                            <select id="Select" class="form-select">
                              <option  value="" disabled selected class="secondary-text">Pilih Kota</option>
                              <option  value="1">1</option>
                              <option  value="2">2</option>
                              <option  value="3">3</option>
                            </select>
                        </div>
                        <div class="offset-4 col-10">
                            <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                            <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="12345">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="Select" class="form-label">Negara</label>
                        <select id="Select" class="form-select">
                          <option  value="" disabled selected class="secondary-text">Pilih Negara</option>
                          <option  value="1">1</option>
                          <option  value="2">2</option>
                          <option  value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <p class="h3">Info Pembayaran</p>
                    <div class="mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Nama Pemilik Kartu</label>
                        <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Misal: Oren">
                    </div>
                    <div class="mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Kartu</label>
                        <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                    <div class=" mt-4 col-6 d-flex ">
                        <div class="col-10">
                            <label for="Select" class="form-label">Bulan Kadaluarsa</label>
                            <select id="Select" class="form-select">
                              <option  value="" disabled selected class="secondary-text">1-12</option>
                              <option  value="1">1</option>
                              <option  value="2">2</option>
                              <option  value="3">3</option>
                            </select>
                        </div>
                        <div class="offset-4 col-10">
                            <label for="Select" class="form-label">Tahun Kadaluarsa</label>
                            <select id="Select" class="form-select">
                                <option  value="" disabled selected class="secondary-text">Tahun</option>
                                <option  value="1">1</option>
                                <option  value="2">2</option>
                                <option  value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Nomor CVC</label>
                        <input id = "form-home" type="email" class="form-control" id="exampleFormControlInput1" placeholder="123">
                    </div>
                </div>     
            </div>  
        </div>

        <div class="d-flex justify-content-center mt-5">
            <button type="button" id = "klik-bayar"class="btn btn-danger klik-bayar"><span class="bayarCuy">Bayar</span></button>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div id="spinner1" class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div id="spinner2" class="ms-3 spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div id="spinner3" class="ms-3 spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
     --}}
    @include('Partial/footer')

    <script src="./js/Home/payment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>