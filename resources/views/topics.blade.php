@extends('layouts.app')

@section('title', "Explore Topics")

@section('content')

<div class="col-8 offset-2">
    <div class="row d-flex my-5 justify-content-center">
        <h1 class="d-flex justify-content-center my-3">Jelajahi Topik</h1>
        <div class="col-8 my-3">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
    </div>
    
    <div class="row d-flex flexwrap my-5">
        @foreach(range('A', 'Z') as $letter)
            @if($tags->has($letter))
                <div class="col-3">
                    <h2>{{ $letter }}</h2>
                    <div class="row">
                        @foreach ($tags->get($letter) as $item)
                            <a href="#{{ $letter }}" class="text-decoration-none text-black-50">
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