<div id="card-kecil">
    <div class="card" style="height:auto; border-radius: 0px;">
        @if ($article->thumbnail == null)
                <img id = "pic-small" src="{{asset('storage')}}/hakim.jpg" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
            @else 
                <img id = "pic-small" src="{{asset('storage')}}/uploads/{{$article->thumbnail}}" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
            @endif
        <div class="card-body">
        <div class="first-layer">
            <div class="kategori-waktu">
                <p id="kategori-small" class="kategori text-break text-wrap">
                    @if ($article->membership == 2)
                    Premium
                    @else
                        Gratis
                    @endif
                </p>
                <p id ="waktu-small" class = "waktu text-wrap">{{ $article->differenceDate }} hari yang lalu</p>
            </div>
        </div>

        <h1 style="color: black" id = "judul-small" class="judul text-wrap">{{ $article->judul }}</h1>
        <p style = "color: black;" id = "deskripsi-small" class="deskripsi text-wrap">{{ $article->deskripsi }}</p>
        <div class="last-layer d-flex justify-content-between">
            <div class="foto-penulis">
                <a href=""><img id = "prof-small" src="{{ asset('storage/'.$article->profile_picture) }}" class="img rounded-circle " alt="..." width="32px" height="32px"></a>
                <a href="{{ route('profile', ['username' => $article->username]) }}" style="text-decoration: none" id = "name-small" class="nama-penulis text-wrap">{{ $article->authorName }}</a>
            </div>
            <div class="baca-lebih">
                <a href = "{{route('read', ['id'=>$article->id_article, 'judul'=>$article->judul])}}" style = "text-decoration : none" id = "read-small" class="sub text-wrap">Baca Lebih</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="background: #5E5D2D;" class="bi bi-arrow-right panah" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </div>
        </div>
        </div>
    </div>
</div>