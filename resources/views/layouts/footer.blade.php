<section class="footer border-top">
    <div class=" d-flex justify-content-center" style="padding-top: 100px;">
        <img src="{{ asset('storage') }}/upload/LOGO WEB.png" alt="" style="width : 400px; height:200px;">
    </div>  
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#982727" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,176C384,181,480,171,576,160C672,149,768,139,864,154.7C960,171,1056,213,1152,224C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,
        1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <div class="footer-last d-flex flex-column justify-content-between align-items-center" style="height:auto; width:100%; background-color:#982727">
        <a href="{{ route('subsType') }}" id = "subs" type="button" class="btn btn-secondary footer-button" style="margin-bottom:48px;font-family:'Rubik',sans-serif; font-size:24px; font-weight:600; color:black;
            background-color:white;box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 5px;">Subscribe Now
        </a>
        <div class="d-flex flex-row justify-content-between" style="padding-bottom:32px">
            <a id = "face" href="">
                <img src="{{ asset('storage') }}/upload/facebook.png" alt="">  
            </a>
            <a id = "git" href="">
                <img src="{{ asset('storage') }}/upload/github.png" alt="">  
            </a>
            <a id = "tele"href="">
                <img src="{{ asset('storage') }}/upload/telegram.png" alt="">  
            </a>
            <a id = "home" href="">
                <img src="{{ asset('storage') }}/upload/instagram.png" alt="">  
            </a>
        </div>
        <div class="d-flex flex-row justify-content-between" style="width: 100%;">
            <div style="padding-left: 24px">
                <p style="font-family:'Poppins',sans-serif; font-size:12px; font-weight:300; color:white;"><span>&#169;</span> 2023 Seluruh Hak Cipta</p>
            </div>
            <div>
                <div class="d-flex flex-row justify-content-between" style="padding-left:200px;font-family:'Poppins',sans-serif; font-size:14px; font-weight:400; color:white;" >
                    <p class="mid-1" style="padding:0 24px">Kebijakan Pribadi</p>
                    <p class="mid-2"style="padding:0 24px">Syarat Penggunaan</p>     
                    <p class="mid-3"style="padding:0 24px">Penjualan & Pengembalian</p>
                    <p class="mid-4"style="padding:0 24px">Hukum</p>
                </div>
            </div>
            <div>
                <div class="d-flex flex-row justify-content-between" style="font-family:'Poppins',sans-serif; font-size:14px; font-weight:400; color:white;" >
                    <p style="padding:0 16px">Tentang</p>
                    <p style="padding:0 16px">Fitur</p>
                    <p style="padding:0 16px">Pricing</p>
                    <p style="padding:0 16px">Gallery</p>
                    <p style="padding:0 16px">Tim</p>
                </div>
            </div>
        </div>
    </div>
</section>