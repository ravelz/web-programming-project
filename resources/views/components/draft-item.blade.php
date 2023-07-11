{{-- @php
    dd($article);
@endphp --}}
<div id = "profile-follow-card" class="gx-0 card rounded-0 mb-3 mt-4 col-11 col-sm-11 col-md-11 col-lg-12 col-xl-12" style="max-width: 1100px">
    <div class="row g-0">
        <div class="col-md-4 sm-w-200 profile-follow-img">
            @if ($draft->thumbnail == null)
                <img id = "follow-img" src="{{asset('storage')}}/hakim.jpg" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
            @else 
                <img id = "follow-img" src="{{asset('storage')}}/uploads/{{$draft->thumbnail}}" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
            @endif
        </div>
        <div class="col-md-8">
            <div class="card-body follow-card-body" >
                <div class="d-flex ">
                    <div class="me-auto">
                    </div>
                    <div>
                        <h5 id = "profile-follow-time"class="card-title" >{{ $draft->differenceDate }} hari yang lalu</h5>
                    </div>
                </div>
                <div id = "profile-follow-tit" style=""><p class="card-text profile-follow-tit follow-text">{{ $draft->judul }}</p></div>
                <div id = "profile-follow-desc"style=""><p class="card-text profile-follow-desc follow-text-desc">
                    
                    @php
                        $isi = strip_tags($draft->deskripsi, 'br')
                    @endphp
                    {!! $isi !!}
                </p>
                </div>
                <div class="d-flex">
                    <div class="p-2">
                        {{-- <img id = "follow-img-big" src="{{ asset('storage/'.$draft->profile_picture) }}" class="rounded-circle" alt="..." width="40px" height="40px" > --}}
                    </div>
                    <div class="p-2 prof-big-card">
                        {{-- <a href = "{{ route('profile', ['username' => $draft->username]) }}" class = "profile-fol-name"id = "follow-name">{{ $draft->authorName }}</a> --}}
                    </div>
                    <div class="ms-auto p-2 baca-lebih-container">
                        <a href = "{{route('edit', ['id'=>$draft->id_draft, 'judul'=>$draft->judul])}}" class = "profile-tulisan-baca-lebih">Edit Artikel 
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