@if($errors->any())
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <h4>{{$errors->first()}}</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@extends('layouts.app')

@section('title', "Explore Topics")


@section('content')

<div class="col-8 offset-2">
    <div class="row d-flex my-5 justify-content-center">
        <h1 class="d-flex justify-content-center my-3">Jelajahi Topik</h1>
        <form action="{{ route('searchTopic') }}" name="searchTopic" method="POST" class="col-8 my-3">
            @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text profile-search-icon" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input id = "profile-cari-postingan" type="text" class="form-control text-center profile-search-input" placeholder="Cari topic. . . ." aria-label="Username" aria-describedby="basic-addon1" name="title">
                </div>
        </form>
    </div>
    
    <div class="row d-flex flexwrap my-5">
        @foreach(range('A', 'Z') as $letter)
            @if($tags->has($letter))
                <div class="col-3">
                    <h2>{{ $letter }}</h2>
                    <div class="row">
                        @foreach ($tags->get($letter) as $item)
                            <a href="{{ route('clickedTag', ['tagName' => $item->id_tag]) }}" class="text-decoration-none text-black-50">
                                <h4>
                                    {{ $item->title_tag }}
                                </h4>
                            </a>
                        @endforeach
                    </div>
                    
                </div>
            @endif
        @endforeach
    </div>
    
</div>




@endsection