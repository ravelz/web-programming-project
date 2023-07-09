<div class="modal fade edit-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex flex-row justify-content-between">
        <h1 class="modal-title fs-3 fw-bold text-center ms-2" id="exampleModalLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3 text-center d-flex flex-column align-items-center">
            <label for="fileInput" class="file-input-label">
              <img type = "file" class="border-edit-prof img-thumbnail rounded-circle" src="{{ asset('storage') }}/Profile.jpg" alt="">
            </label>
            <label for="fileInput" class="file-input-label">
              <h5 class="text-danger fw-semibold mt-3 tulisan-edit-foto">Edit Foto Profile</h5>
            </label>
            <input class="form-control" type="file" id="fileInput" style="display: none;">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label fw-semibold">Nama</label>
            <input type="text" class="form-control" id="recipient-name" value="{{ $profile[0]->name }}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label fw-semibold">Username</label>
            <input type="text" class="form-control" id="recipient-name" value="{{ $profile[0]->username }}">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label fw-semibold">Tentang saya<span class="text-secondary fw-normal"> </span></label>
            <textarea class="form-control edit-deskripsi" id="message-text" value="{{ $profile[0]->aboutme }}"></textarea>
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

