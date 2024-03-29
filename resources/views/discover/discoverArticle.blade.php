@extends('layouts.app')

@section('title', Illuminate\Support\Str::title(Route::currentRouteName()))

@section('content')
<section id = "isi" class="d-flex row pb-5" >
    <!-- ========BANNER======= -->
    <div class="col-10 offset-1">
        <div class="row">
            <div class="d-flex flex-column col-3 border-start border-end" >
                <div class="mb-5">
                    <h2 class="fw-bold">Konten</h2>
                    @if (Route::currentRouteName() == "rekomendasi")
                        @php
                            $titleKonten = Route::currentRouteName();
                            $data =  $popularArticles;
                        @endphp
                        @include("discover.rekomendasi")
                    @elseif (Route::currentRouteName() == "populer")
                        @php
                            $titleKonten = Route::currentRouteName();
                            $data =  $popularArticles;
                        @endphp
                        @include("discover.populer")
                    @elseif (Route::currentRouteName() == "diikuti")
                        @php
                            $titleKonten = Route::currentRouteName();
                            $data =  $followedArticles;
                        @endphp
                        @include("discover.diikuti")
                    @elseif (Route::currentRouteName() == "clickedTag")
                        @php
                            $titleKonten = "G";
                            $data =  $popularArticles;
                        @endphp
                        @include("discover.none")
                    @elseif (Route::currentRouteName() == "searchTopic")
                        @php
                            $titleKonten = "H";
                            $data =  $popularArticles;
                        @endphp
                        @include("discover.none")
                    @elseif (Route::currentRouteName() == "searchArticle")
                        @php
                            $titleKonten = "I";
                            $data =  $popularArticles;
                        @endphp
                        @include("discover.none")
                    @endif
                </div>
                <!-- ========TOP TOPIC======= -->
                <div class="top-topic">
                    <h2 class="fw-bold">Topik yang direkomendasikan</h2>
                    <div>
                        <div class="tags d-flex flex-row flex-wrap" style="font-family:'Rubik',sans-serif; font-size:16px">
                            @foreach ($tags as $tag)
                                <x-tag-item :tagItem="$tag"/>
                            @endforeach                                        
                        </div>
                    </div>                                                            
                    <div style="margin-top : 12px; padding-left:24px; padding-bottom:32px;">
                        <a style="color: #5E5D2D; font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;" href="{{ route('topics') }}">Lihat lebih banyak saran...</a>
                    </div>
                </div>
                <div class="d-flex flex-row mb-5">
                    <div>
                        <h2 class="mb-2">Ikuti juga</h2>
                        @foreach ($authors as $author)
                            <div id = side-top class="d-flex flex-row justify-content-between">
                                <a href="{{ route('profile', ['username' => $author->username]) }}" class="d-flex flex-row justify-content-between text-decoration-none text-black">
                                    <div class="ikuti-img">
                                        <img id = "top-img" src="{{ asset('storage/'.$author->profile_picture) }}" class="rounded-circle " alt="..." width="47px" height="47px">
                                    </div>
                                    <div class="mx-2">
                                        <h1 id = "top-name" class = "nama-ikuti" >{{ $author->name }}</h1>
                                        <div class="kotak-tulisan"> 
                                            <p id = "top-desc" >{{ Str::limit($author->aboutme, 100) }}</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="p-0 m-0">
                                    <a type="submit" value="send" class="btn btn-outline-secondary" style="color: black; border-radius: 20px;" href="{{ route('follow', ['id' => $author->id_user]) }}">Follow</a>
                                </div>
                            </div>
                        @endforeach
                        {{-- <!-- Button trigger modal -->
                        <div class="ps-2">
                            <a style="color: #5E5D2D; font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat lebih banyak saran...</a>
                        </div> --}}
                    </div>
                </div>
                
            </div>

            <div class="d-flex flex-column col-8 offset-1">
                <h1 class="judul-ikuti pb-3 text-capitalize border-bottom">
                    @if ($titleKonten == "G")
                        {{"Berdasarkan Topic"}}
                    @elseif ($titleKonten == "H")
                        {{"Hasil pencarian topic"}}
                    @elseif ($titleKonten == "I")
                        {{"Hasil pencarian article"}}
                    @else
                        {{ $titleKonten }}
                    @endif
                    
                </h1>
                <div>
                    @foreach ($data as $article)
                        <x-profile-big-card :article="$article"/>
                    @endforeach
                </div>
                <div class="d-flex justify-content-start flex-column">
                    {!! $data->links() !!}
                </div>
            </div>   
        </div>
    </div>
</section>
@endsection

<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>