<div class="modal fade edit-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header d-flex flex-row justify-content-between">
          <img data-bs-toggle="modal" data-bs-dismiss="edit-form" data-bs-target="edit-picture" id = "edit-picture" height="50px" width="50px" class="border border-3 border-edit-prof rounded-circle" src="{{ asset('storage') }}/upload/Profile.jpg" alt="">
          <x-change-profile-picture></x-change-profile-picture>
          <h1 class="modal-title fs-3 fw-bold text-center ms-2" id="exampleModalLabel">Edit Profile</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label fw-semibold">Nama</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label fw-semibold">Username</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label fw-semibold">Deskripsi</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label fw-semibold">Password Lama</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label fw-semibold">Password Baru<span class="text-secondary fw-normal"> ( Jika ingin ganti password. . . . )</span></label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label fw-semibold">Konfirmasi Password Baru<span class="text-secondary fw-normal"> ( Ketikkan kembali password baru Anda )</span></label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button id = "gasEdit" type="button" class="gasEdit btn btn-primary">Ubah</button>
        </div>
      </div>
    </div>
  </div>

