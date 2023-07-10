@php
    if ($payId == 1 ) {
        $method = "bca.jpg";
        $methods = "BCA Payment";
    } elseif ($payId == 2) {
        $method = "paypal.jpg";
        $methods = "Paypal Payment";
    } else {
        $method = "visa.jpg";
        $methods = "Visa Payment";
    }
@endphp

{{-- ======PAYMENT METHOD 1======== --}}

<div class="payMethod border border-5" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $payId }}">
    <label class="form-check-label" for={{$radioCheck}}>
        <img class="img-fluid" src="{{asset('storage')}}/{{$method}}"alt="">
        <div class="form-check">
            <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="{{ $radioCheck }}"><span class="fw-semibold text-nowrap pay-mets pt-2 pe-3">{{ $methods }}</span>
        </div>
    </label>
</div>

{{-- ======PAYMENT METHOD 2======== 
    <div class="payMethod border border-5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        <label class="form-check-label" for="flexRadioDefault2">
            <img class="img-fluid" 
            src="img/payment/paypal.png"alt="">
            <div class="form-check text-center">
                <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault2"><span class="h5 pt-2 pe-3  ">Paypal Payment</span>
            </div>
        </label>
    </div> --}}


{{-- ======PAYMENT METHOD 3======== 
    <div class="payMethod border border-5" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        <label class="form-check-label" for="flexRadioDefault3">
            <img class="amazon img-fluid" 
            src="img/payment/visaFix.png"alt="">
            <div class="form-check text-center">
                <input class="form-check-input ms-auto me-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault3"><span class="h5 pt-2 pe-3">Visa Payment</span>
            </div>
        </label>
    </div> --}}
