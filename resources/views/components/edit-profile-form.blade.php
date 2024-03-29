<div class="modal fade edit-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form method="POST" action="{{ route('changePassword') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal-header d-flex flex-row justify-content-between">
          <h1 class="modal-title fs-3 fw-bold text-center ms-2" id="exampleModalLabel">Edit Profile</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 text-center d-flex flex-column align-items-center form-group">
              <label for="fileInput" class="file-input-label">
                <img type = "file" id="preview-image-before-upload" class="border-edit-prof img-thumbnail rounded-circle" src="{{ asset("storage/".Auth::user()->profile_picture) }}" alt="">
              </label>
              <label for="fileInput" class="file-input-label">
                <h5 class="text-danger fw-semibold mt-3 tulisan-edit-foto">Edit Foto Profile</h5>
              </label>
              <input class="form-control" type="file" id="fileInput" name="fileInput" style="display: none;" >
              @error('fileInput')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="name" class="col-form-label fw-semibold">Nama</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $profile[0]->name }}">
            </div>
            <div class="mb-3">
              <label for="username" class="col-form-label fw-semibold">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="{{ $profile[0]->username }}">
            </div>
            <div class="mb-3">
              <label for="aboutme" class="col-form-label fw-semibold">Tentang saya<span class="text-secondary fw-normal"> </span></label>
              <textarea class="form-control edit-deskripsi" id="aboutme" name="aboutme" >{{ $profile[0]->aboutme }}</textarea>
            </div>
            <div class="mb-3">
              <label for="password" class="col-form-label fw-semibold">Password Lama</label>
              <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
            </div>
            <div class="mb-3">
              <label for="new_password" class="col-form-label fw-semibold">Password Baru<span class="text-secondary fw-normal"> ( Jika ingin ganti password. . . . )</span></label>
              <input id="new_password" type="password" class="form-control" name="new_password">
            </div>
            <div class="mb-3">
              <label for="new_confirm_password" class="col-form-label fw-semibold">Konfirmasi Password Baru<span class="text-secondary fw-normal"> ( Ketikkan kembali password baru Anda )</span></label>
              <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password">
            </div>
          
        </div>
        <div class="modal-footer">
          <button id = "gasEdit" type="submit" class="gasEdit btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<script type="text/javascript">
      
$(document).ready(function (e) {
 
   
   $('#fileInput').change(function(){
            
    let reader = new FileReader();
 
    reader.onload = (e) => { 
 
      $('#preview-image-before-upload').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
 
</script>

