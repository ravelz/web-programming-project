
<div id = "follow-card" class="card d-flex flex-column mb-4" style="height: auto">
    <div class="d-flex flex-row">
        <div class="col-md-4" style="height: auto">
            @if ($article->thumbnail == null)
                <img id = "follow-img" src="{{asset('storage')}}/uploads/karyabudaya.png" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
            @else 
                <img id = "follow-img" src="{{asset('storage')}}/uploads/{{$article->thumbnail}}" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
            @endif
        </div>
        <div class="col-md-8">
            <div class="card-body" style="height: auto">
                <div class="d-flex ">
                    <div class="me-auto">
                        <h5 id = "follow-cat" class="card-title p-2" style="color:#982727;font-size:20px; font-weight:600; 
                        padding-left:32px; padding-top:16px; box-sizing:border-box">Budaya</h5>
                    </div>
                    <div>
                        <h5 id = "follow-time"class="card-title " style="color:#982727;font-size:20px; font-weight:400; 
                        padding-top:8px; padding-right:32px;box-sizing:border-box">{{ $article->differenceDate }} hari yang lalu</h5>
                    </div>
                </div>
            
                <div id = "follow-tit" style="max-height:400px;"><p class="card-text" style="padding-left: 8px;color:black;font-size:34px; font-weight:400; ">{{ $article->judul }}</p></div>
                <div id = "follow-desc"style="max-height:400px">
                <p class="card-text" style="padding-left: 8px;color:background: #374A59;
                    ;font-size:20px; font-weight:400;  padding-top:24px">{{ $article->deskripsi }}</p>
                </div>                
                <div class="d-flex flex-row p-2">
                    <img style = "margin-bottom: 8px;"id = "follow-img"src="{{ asset('storage') }}/upload/Profile.jpg" class="img-fluid rounded-circle " alt="..." width="44px" height="44px">
                    <a href = "{{ route('profile', ['username' => $article->username]) }}" id = "follow-name" style="text-decoration:none;color:#5E5D2D;font-size:20px; font-weight:600; ">{{ $article->authorName }}</a>
                    
                    <div class="ms-auto" style="margin-top:8px">
                        <a href = "{{route('read', ['id'=>$article->id_article, 'judul'=>$article->judul])}}"style="text-decoration : none; padding-top: 8px; padding-right:32px;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baca Lebih 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>