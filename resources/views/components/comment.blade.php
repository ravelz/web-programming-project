<div>
    <div style= "padding-top: 30px;" class="Komen">
        <div style= "padding: 20px;background-color: #FFFFFF;" class="row"> 
            <div class="row">
                <div class="row">
                    <div style="display: flex; align-items:center">
                        <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float:left;" alt="">
                        <h4 style="font-family: Poppins, sans-serif;font-weight: 600; margin-left: 15px; padding-top: 10px"> {{$comment->name}} </h3>
                    </div>
                </div>
                <div class="row" style="padding-top: 10px">
                    <h6 style="font-family: Poppins, sans-serif; padding-top: 10px"> {{$comment->comment}} </h6>
                </div>
            </div>
        </div>
    </div>
</div>