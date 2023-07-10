<div>
    <form method = "POST" action="{{route('comment_article',['id'=>$inputComment->id_article])}}">
        @csrf
        <div style= "padding-top: 40px;" class=" buatKomen">
            <div style="background-color:#F5F0F0; padding: 20px;" class="d-flex row">      
                <div class="row">
                    <div style="display: flex; align-items:center">
                        <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float:left;" alt="">
                        <h5 style="font-family: Poppins, sans-serif;font-weight: 600; margin-left: 15px; padding-top: 10px"> 
                            {{Auth::user()->name}} 
                        </h5>
                    </div>
                </div>
                <div class="mb-3" style="padding-top: 20px">
                    <label for="commentInput" class="form-label" style="margin-bottom: 10px">Apa Tanggapan Anda?</label>
                    <textarea class="form-control" name="commentInput" id="commentInput" rows="2"></textarea>
                  </div>
                <div class="row" style="margin-bottom:10px">
                    <div style="padding-top: 5px; align: center;" class="d-flex row">
                        <div class="row">
                            <div style="display: flex; align-items:center;">
                                <a href="" style="font-family: Poppins, sans-serif; font-weight: 200; background-color: #ffffff; color: #982727; border: #982727; box-shadow: none !important; margin-right:10px" class="btn btn-primary">Batal</a>
                                <button type="submit" style="font-family: Poppins, sans-serif; background-color: #982727; color :#ffffff; border: #982727; none !important; box-shadow: none !important;" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>