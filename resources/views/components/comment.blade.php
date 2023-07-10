<div>
    <div style= "padding-top: 30px;" class="Komen">
        <div style= "padding: 20px;background-color: #F5F0F0;" class="row"> 
            <div class="row">
                <div class="column">
                    <div class="d-flex flex-row align-items-center">
                        <img class="img-fluid" src="{{ asset('storage/'.$comment->profile_picture) }}" style= "width: 50px;height: 50px;border-radius: 100%;float:left;" alt="">
                        <div class="d-flex flex-column px-3 justify-content-center">
                            <h4 style="font-family: Poppins, sans-serif;font-weight: 600;"> {{ $comment->name }} </h4>
                            <p> {{ $comment->created_at }} </p>
                        </div>
                        
                    </div>
                </div>
                <div class="column" style="padding-top: 10px">
                    <h6 style="font-family: Poppins, sans-serif; padding-top: 10px"> {{$comment->comment}} </h6>
                </div>
            </div>
        </div>
    </div>
</div>