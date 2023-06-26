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
        {{-- @include('Partial/sidebarLeft')
        <div class="ham ham1">
            <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div> --}}
        <div class="container d-flex flex-column">
            <p class="h1 fw-bold judul-ikuti mt-5 ">Pembayaran</p>
            <p class="fw-medium fs-4">Pilih Metode Pembayaran di Bawah</p>
            <div class="d-flex justify-content-between text-center">
                <div class="payMethod text-center" >
                    <label class="form-check-label" for="flexRadioDefault1">
                        <img class="img-fluid" 
                        src="img/payment/bca2.png" alt="">
                        <div class="form-check">
                            <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault1"><span class="h5 pt-2 pe-3">BCA Payment</span>
                        </div>
                    </label>
                </div>
                <div class="payMethod" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        <img class="img-fluid" 
                        src="img/payment/paypal.png"alt="">
                        <div class="form-check text-center">
                            <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault2"><span class="h5 pt-2 pe-3  ">Paypal Payment</span>
                        </div>
                    </label>
                </div>
                <div class="payMethod text-center" >
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

        <div class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <p class="h3">Billing Info</p>
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
                            <label for="exampleFormControlInput1" class="form-label">Kota</label>
                            <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="Asal">
                        </div>
                        <div class="offset-4 col-10">
                            <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                            <input id = "form-home" class="form-control" id="exampleFormControlInput1" placeholder="12345">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="Select" class="form-label">Negara</label>
                        <select id="Select" class="form-select">
                          <option  value="" disabled selected class="secondary-text">Pilih Negaramu</option>
                          <option  value="1">1</option>
                          <option  value="2">2</option>
                          <option  value="3">3</option>
                        </select>
                    </div>
                    {{-- <div class=" col-6 input-group mt-5">
                        <label for="inputGroupSelect03" class="form-label mt-2 me-3 align-middle">Country</label>
                        <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                          <option selected class="placeCountry">Negara. . . .</option>
                          <option value="1">Negara 1</option>
                          <option value="2">Negara 2</option>
                          <option value="3">Negara 3</option>
                        </select>
                    </div> --}}
                </div>
                <div class="col-6">
                    <p class="h3">Payment Info</p>
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
            <div id = "spinner" class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
        </div>
    </div>
    
    @include('Partial/footer')

    <script src="./js/Home/payment.js"></script>
</body>
</html>