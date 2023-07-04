
    <div class="isi">
        <div class="row">
            {{-- ==============      KIRI    ============== --}}
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2 offset-1" style="max-width: 500px">        
                <x-profile-bio></x-profile-bio>
                <x-profile-stats></x-profile-stats>
                <div class="ms-2 border border-dark border-opacity-10 rounded row p-3 ">
                    <div class="d-flex flex-column justify-content-between col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <x-profile-stats-att></x-profile-stats-att>
                    </div>
                </div>
                <button type="button" id = "status-berlangganan" class="btn btn-danger text-nowrap ms-2 mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  data-bs-toggle="modal" data-bs-target="#exampleModal4"><span class="tulisan-status-berlangganan text-wrap fs-5">
                Status Berlangganan : Aktif</span></button>
                <x-show-benefit></x-show-benefit>
            </div>
             {{-- ==============     KANAN     ============== --}}
            <div class="offset-1 col-7">
                <div class="row">
                    <div class="col-10 mt-4 profile-search d-flex">
                        <div class="input-group mb-3">
                            <span class="input-group-text profile-search-icon" id="basic-addon1"><i class="bi bi-search"></i></span>
                            <input style="max-width: 1050px" id = "profile-cari-postingan" type="text" class="form-control text-center profile-search-input" placeholder="Cari Postingan. . . ." aria-label="Username" aria-describedby="basic-addon1">
                        </div>  
                    </div>
                    <div class="col-1 col-sm-2 col-md-1 col-lg-1 col-xl-1 mt-4 d-flex" style="cursor: pointer; max-width: 10px">
                        <i id="profile-sort-postingan" class="bi bi-arrow-down-up me-2 profile-sort-icon"></i>
                        <p id="profile-sort-postingan" class="profile-sort">urutkan</p> 
                    </div>
                </div>
                <div class="row d-flex flex-column justify-content-between">
                    <div class="col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12 border-bottom border-1 mt-1 profile-garis" style="max-width: 1100px"></div>
                    <div class="profile-card-box mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px;">
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                        <x-profile-big-card></x-profile-big-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/Home/profile.js"></script>
</body>
</html>