@php
    if ($methodId== 1 ) {
        $method = "bca2.png";
        $methods = "BCA Payment";
    } elseif ($methodId == 2) {
        $method = "paypal.png";
        $methods = "Paypal Payment";
    } else {
        $method = "visaFix.png";
        $methods = "Visa Payment";
    }
@endphp

{{-- =============MODAL 1============ --}} 

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img class="modal-logo" src="{{ asset('storage') }}/upload/LOGO WEB.png" alt="">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <h1 class="modal-title fs-3 fw-bold ms-auto me-auto" id="exampleModalLabel">{{$methods}}</h1>
            <img class="modal-logo ms-auto me-auto mt-2 border border-dark border-opacity-25 p-3" src="{{ asset('storage') }}/upload/{{$method}}" alt=""height = "120px" width="160px">
            <div class="modal-body text-start">
                {{-- ========ISI MODAL======== --}}
                <div class="row">
                    <div class="mt-2 col-6">
                        <form class="" >
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Panjang</label>
                            <input id = "exampleFormControlInput1" type="text" class="form-control" placeholder="Misal: Oren" >
                        </form>
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


{{-- =============MODAL 2============ 

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img class="modal-logo" src="img/home/LOGO WEB.png" alt=""height = "70px" width="120px">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <h1 class="modal-title fs-3 fw-bold ms-auto me-auto" id="exampleModalLabel">Paypal Payment</h1>
            <img class="modal-logo ms-auto me-auto mt-2 border border-dark border-opacity-25 p-3" src="img/payment/paypal.png" alt=""height = "120px" width="160px">
            <div class="modal-body text-start">
                {{-- ========ISI MODAL======== 
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
</div>--}}

{{-- =============MODAL 3============ 

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <img class="modal-logo" src="img/home/LOGO WEB.png" alt=""height = "70px" width="120px">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <h1 class="modal-title fs-3 fw-bold ms-auto me-auto" id="exampleModalLabel">Visa Payment</h1>
                    <img class="modal-logo ms-auto me-auto mt-2 border border-dark border-opacity-25 p-3" src="img/payment/visaFix.png" alt=""height = "120px" width="160px">
                    <div class="modal-body text-start">
                        {{-- ========ISI MODAL======== 
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
</div>--}}


 {{-- Alternatif Form 2 --}}

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
    {{-- @include('Partial/footer') --}}

        