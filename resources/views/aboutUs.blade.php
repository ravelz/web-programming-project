@extends('layouts.app')

@section('content')

    <div class="d-flex row mt-5 pb-5 background-anjay justify-content-around slide-from-left ">
        <div class="offset-1 col-4 mt-5 d-flex flex-column ">
            <p class="display-2">Tentang Kami</p>
            <p class="fs-5 text-justify">
                Karya Budaya adalah situs web yang menjadi tempat pertemuan bagi individu dengan beragam latar belakang suku, agama, dan ras. Sejak tahun 2023, Karya Budaya telah menjadi sumber informasi yang penting mengenai berbagai daerah. Situs ini memiliki artikel-artikel terkenal yang membuatnya menjadi sumber utama penyebaran berita kedaerahan yang bisa diakses oleh semua kalangan, mulai dari siswa sekolah hingga orang dewasa.
            </p>
            <p class="fs-5 text-justify">
            Situs ini menyebarkan berbagai informasi kedaerahan seperti makanan daerah, upacara adat, tarian tradisional, dan acara lokal lainnya. Melalui Karya Budaya, banyak individu dari berbagai daerah dapat saling bertemu dan adat-istiadat mereka dapat disandingkan. Namun, hal ini tidak mengurangi rasa persatuan dan kesatuan kita sebagai Negara Kesatuan Republik Indonesia. Sebaliknya, ini justru memperkuat hubungan dan meningkatkan pemahaman antara masyarakat dari berbagai daerah.
            </p>
            <p class="fs-5 text-justify">
            Situs web Karya Budaya dibangun dengan tujuan agar informasi-informasi kedaerahan dari berbagai tempat dapat dengan mudah diakses oleh daerah lain tanpa menghilangkan konteks kedaerahan itu sendiri. Semoga, Karya Budaya terus menjadi sumber informasi yang kaya mengenai daerah-daerah di Indonesia.
            </p>
            <p class="mt-3 fs-5 fw-semibold">"Orang Indo kalo ketemu hal mistis, logicnya buyar"</p>
        </div>
        <div class="offset-1 col-5 mt-5 left-about-container ">
            <img width="500px" height="500px" src="{{ asset('storage') }}/LOGO WEB.png" class="img-fluid align-self-center p-3 mt-5" alt="...">
        </div>
        
    </div>

    <script src="{{ url('js/Home/payment.js') }}"></script>

@endsection