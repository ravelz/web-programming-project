<div>
    <div class="bagBawah mx-auto" >
        <h1> {{$dataArticle->judul}} </h1>
    </div>
    <div class="isiArtikel mb-5">
        {!! $dataArticle->deskripsi !!}
    </div>




    <div style="font-family: Poppins, sans-serif;font-weight: 400;" class="rekomendasi">
        <a href="#"  style = "background-color: #982727;border-radius: 30px; width:80px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Tarian</a> 
    </div>




    <div style="padding-top: 20px;justify-content: space-between;" class="bagianIcons">
        <a href="{{route('like_article', ['id'=>$dataArticle->id_article])}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#982727" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15Zm0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
            </svg>
        </a>
        <span style="font-family: Poppins, sans-serif;"class="text">{{$dataArticle->jml_like}}</span>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#982727" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
        </a>
        <span style="font-family: Poppins, sans-serif;"class="text">{{$dataArticle->jml_comment}}</span>
    </div>
    
</div>