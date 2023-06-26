@extends('master')

@section('title', 'CreateArticle')

@section('konten')

<form method="POST" action="{{ route('create')}}">
    @csrf
    <div class="my-div" style="position: relative; height: 100vh;">
        <div class="background-image" style="background-image: url('https://images.unsplash.com/photo-1571235908642-0459c9475ac3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: -1;"></div>
        <div class="container d-flex flex-column" style="position: relative; height: 90vh; max-width: 1500px; margin: auto; background-color: #F5EFEF; padding: 50px; overflow: hidden; top: 5vh;">
            <div class="d-flex flex-wrap justify-content-end align-items-center">
                <div>
                    <img src="{{ asset('images/logo.png') }}" class="mb-5" style="max-height: 120px; max-width: 100%;">
                </div>
                <div style="margin-left: auto;">
                    <button type="submit" class="btn btn-primary" style="background-color: #982727; padding: 8px 16px; font-size: 18px; color: white; outline: none; margin-right: 10px;">Posting</button>
                </div>
                <div>
                    <img class="card-img-top mx-auto" src="{{ asset('images/fotoProfil.jpeg') }}" style="width: 80px; height: 80px; border-radius: 100%;" class="img-fluid" alt="...">
                </div>
            </div>
            <form style="width: 100%;">
                <div class="mb-3 text-start align-items-lg-center">
                    <label for="judul" class="form-label" style="font-size: 20px;">Judul</label>
                    <div style="border: 2px solid black; background-color: #F5EFEF;">
                        <input type="text" name="judul" class="form-control rounded" id="judul" style="background-color: #F5EFEF; border: none; width: 100%;">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label" style="font-size: 20px;">Apa Ceritamu?</label>
                    <div style="border: 2px solid black; background-color: #F5EFEF;">
                        <textarea name="deskripsi" class="deskripsi form-control rounded" id="deskripsi" cols="70" rows="1000" style="background-color: #F5EFEF; border: none; width: 100%;"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>




    @push('scripts')
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        </script>
        <script>
            CKEDITOR.replace('deskripsi', options);
        </script>
        <script>
            import { EasyImage } from '@ckeditor/ckeditor5-easy-image';
            import { Image } from '@ckeditor/ckeditor5-image';

            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    plugins: [ EasyImage, Image, /* ... */ ],
                    toolbar: [ 'uploadImage', /* ... */ ],

                    // Configure the endpoint. See the "Configuration" section above.
                    cloudServices: {
                        tokenUrl: 'https://example.com/cs-token-endpoint',
                        uploadUrl: 'https://your-organization-id.cke-cs.com/easyimage/upload/'
                    }
                } )
                .then( /* ... */ )
                .catch( /* ... */ );
        </script>
    @endpush

    @stack('scripts')