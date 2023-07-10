<div>
    <div style= "padding-top: 30px;" class="Komen">
        <div style= "padding: 20px;background-color: #F5F0F0;" class="row"> 
            <div class="row">
                <div class="column">
                    <div class="d-flex flex-row" style="padding-top: 20px">
                        <div class="col-10">
                            <img class="img-fluid" src="{{ asset('storage/'.$comment->profile_picture) }}" style= "width: 50px;height: 50px;border-radius: 100%;float:left;" alt="">
                            <div class="d-flex flex-column px-3 justify-content-center">
                                <h4 style="font-family: Poppins, sans-serif;font-weight: 600;"> {{ $comment->name }} </h4>
                                <p> {{ $comment->created_at }} </p>
                            </div>
                        </div>
                        <div class="offset-1 col-1">
                            <div class="d-flex flex-column px-5"   >
                                <svg width="25" height="25" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 24.7917C17.9132 24.7917 18.2598 24.6517 18.5398 24.3717C18.8198 24.0917 18.9593 23.7456 18.9583 23.3333C18.9583 22.9201 18.8183 22.5735 18.5383 22.2935C18.2583 22.0135 17.9122 21.874 17.5 21.875C17.0868 21.875 16.7402 22.015 16.4602 22.295C16.1802 22.575 16.0407 22.9211 16.0417 23.3333C16.0417 23.7465 16.1817 24.0931 16.4617 24.3731C16.7417 24.6531 17.0878 24.7926 17.5 24.7917ZM16.0417 18.9583H18.9583V10.2083H16.0417V18.9583ZM12.0313 30.625L4.375 22.9688V12.0313L12.0313 4.375H22.9688L30.625 12.0313V22.9688L22.9688 30.625H12.0313ZM13.2708 27.7083H21.7292L27.7083 21.7292V13.2708L21.7292 7.29167H13.2708L7.29167 13.2708V21.7292L13.2708 27.7083Z" fill="black"/>
                                </svg>
                            </div>
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