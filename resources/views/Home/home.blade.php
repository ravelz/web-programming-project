
@extends('layouts.app')
@if($errors->any())
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <h4>{{$errors->first()}}</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<head>
    <title>Karya Budaya | Home</title>   
    <!--Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Glide --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.4.1/dist/css/glide.core.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.4.1/dist/glide.min.js"></script>
    

</head>
    
    @section('content')
    <section class="Header d-flex align-items-center d-flex justify-content-center col">
        <div class="row" >
            <div class=" d-flex justify-content-center">
                <img src="{{ asset('storage') }}/LOGO WEB.png" alt="" style="width : 470px;">
            </div> 
            <div class="row justify-content-center mb-5">
                <form action="{{ route('searchArticle') }}" name="searchTopic" method="POST" class="col-12 mt-4 profile-search d-flex">
                    @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text profile-search-icon" id="basic-addon1"><i class="bi bi-search"></i></span>
                            <input id = "profile-cari-postingan" type="text" class="form-control text-center profile-search-input" placeholder="Cari topic. . . ." aria-label="Username" aria-describedby="basic-addon1" name="title">
                        </div>
                </form>
            </div>
        </div>
    </section>

                                                    <!-- ========PEMBATAS======== -->
    <div class="pembatas-bawah"></div>

    <!-- ====================================================ISI============================================================== -->
    <section id = "isi" class="d-flex row pb-5" >
        <!-- ========BANNER======= -->
        <div class="col-10 offset-1">
            @if (!$followedArticles->isEmpty())
                <div class="row">
                    <div class="col-2 banner">
                        <p class="sign ">Diikuti</p>
                    </div>
                    <div id = "view-all" class="col view-all d-flex align-items-center text-dark" >
                        <a class="text-dark text-decoration-none" href="{{ route('diikuti') }}">
                            <p>Semua
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </p>
                        </a>
                    </div>
                </div>
            
                <div class="row my-5">
                    <div class="row mt-2">
                        <div class="col ikuti">
                            <h3 class="judul-ikuti">Artikel dari yang kamu ikuti</h3>
                        </div>
                    </div>
                    <!-- ========CARD DIIKUTI======= -->
                    <div class="row p-0 m-0">
                        <div class="col glide d-flex flex-column justify-content-center">
                            <div class="d-flex flex-row " data-glide-el="controls">
                                <button class="glide__arrow--prev rounded btn" type="button" data-glide-dir="<">
                                    <img src="https://www.upgrad.com/__khugblog-next/image/?url=%2F__khugblog-next%2F_next%2Fstatic%2Fmedia%2Fleft-vector.becdf374.png&w=32&q=75" alt="">
                                </button>
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">

                                    @foreach ($followedArticles as $article)
                                        <x-article-card :article="$article"/>
                                    @endforeach
                                    </ul>
                                </div>
                                <button class="glide__arrow--next rounded btn" type="button" data-glide-dir=">">
                                    <img src="https://www.upgrad.com/__khugblog-next/image/?url=%2F__khugblog-next%2F_next%2Fstatic%2Fmedia%2Fright-vector.df3941af.png&w=32&q=75" alt="">
                                </button>
                            </div>
                            
                            
                        </div>
                        <script>
                            new Glide('.glide', {
                                type: 'slider',
                                bound: true,
                                rewind: true,
                                startAt: 1,
                                perView: 4,
                                gap: 16,
                                autoplay: 5000,
                                hoverpause: true,
                                focusAt: 0,  // set focus on the center slide
                            }).mount();
                        </script>
                    </div>
                </div>
            @endif
            

            <div class="row py-5">
                <div class="d-flex flex-column col-8">
                    <div class="row mt-2">
                        <div class="col-11 ikuti">
                            <h3 class="judul-ikuti" style="padding-bottom: 32px">Artikel rekomendasi buat kamu</h3>
                        </div>
                    </div>
                        <!-- ========BIG CARD======= -->
                    <div>
                        @foreach ($popularArticles as $article)
                            <x-profile-big-card :article="$article"/>
                        @endforeach
                    </div>
                    <div>
                        <div class="col-7">
                            <a href = "{{ route("rekomendasi") }}" style="background-color: #F5F0F0;color: #5E5D2D; font-size:20px; font-weight:600; font-family:'Rubik', sans-serif; padding-left:12px; text-decoration:underline;">Tampilkan Lebih. . .</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column col-3 offset-1 border-start border-end px-3" >
                    <div class="d-flex flex-row">
                        <!-- ========TOP AUTHOR======= -->
                        <div>
                            <h2>Ikuti juga</h2>
                            @guest
                            @endguest
                            @auth
                            @foreach ($authors as $author)
                                <div id = side-top class="d-flex flex-row justify-content-between">
                                    <a href="{{ route('profile', ['username' => $author->username]) }}" class="d-flex flex-row justify-content-between text-decoration-none text-black">
                                        <div class="ikuti-img">
                                            <img id = "top-img" src="{{ asset('storage/'.$author->profile_picture) }}" class="rounded-circle " alt="..." width="47px" height="47px">
                                        </div>
                                        <div class="mx-2">
                                            <h1 id = "top-name" class = "nama-ikuti" >{{ $author->name }}</h1>
                                            <div class="kotak-tulisan"> 
                                                <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="p-0 m-0">
                                        <a type="submit" value="send" class="btn btn-outline-secondary" style="color: black; border-radius: 20px;" href="{{ route('follow', ['id' => $author->id_user]) }}">Follow</a>
                                    </div>
                                </div>
                            @endforeach
                            @endauth
                            <!-- Button trigger modal -->
                            <div style="margin-top : 12px; padding-left:24px; padding-bottom:32px;">
                                <a style="color: #5E5D2D; font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat lebih banyak saran...</a>
                            </div>
                        </div>
                    </div>
                    <!-- ========TOP TOPIC======= -->
                    <div class="top-topic">
                        <h2>Topik yang direkomendasikan</h2>
                        <div>
                            <div class="tags d-flex flex-row flex-wrap" style="font-family:'Rubik',sans-serif; font-size:16px">
                                @foreach ($tags as $tag)                                  
                                    <x-tag-item :tagItem="$tag"/>
                                @endforeach                                        
                            </div>
                        </div>                                                            
                        <div style="margin-top : 12px; padding-left:24px; padding-bottom:32px;">
                            <a style="color: #5E5D2D; font-size:16px; font-weight:400; font-family:'Rubik', sans-serif;" href="{{ route('topics') }}" >Lihat lebih banyak saran...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Follow more author</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column">
                @foreach ($authors as $author)
                    <x-author-item :author="$author"/>
                @endforeach
                <div class="d-flex justify-content-center w-100 text-red">
                    {{ $authors->links()  }}
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>       
            </div>
        </div>
        </div>
    </div>
    @endsection

<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>