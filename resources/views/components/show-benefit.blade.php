<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <h1 class="modal-title fs-1 fw-bold ms-auto me-auto mt-3" id="exampleModalLabel">KEUNTUNGAN BERLANGGANAN</h1>
            <img class="modal-logo-ben ms-auto me-auto p-3" src="{{ asset('storage') }}/upload/LOGO WEB.png" alt="">
            <div class="modal-body text-start">
                {{-- ========ISI MODAL======== --}}
                <div class="ms-auto me-auto isi-ben rounded">
                    <div id="carouselExampleIndicators" class="carousel slide position-static" data-bs-ride="true">
                        <x-ben-carousel></x-ben-carousel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    



