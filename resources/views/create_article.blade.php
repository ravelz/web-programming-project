<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- input text field --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>


</head>
<style>
    .btn-post{
    background-color: #982727; 
    padding: 8px 16px; 
    font-size: 18px; 
    color: white; 
    margin-right: 10px;
  }

    .btn-post:hover{
    background-color: #B05151 !important;
    border: #B05151 ;
    color: white;
    font-weight:400;
  }

  .background-image{
    background-image: url('https://images.unsplash.com/photo-1571235908642-0459c9475ac3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
  }

  .draft-btn{
    color: #982727;
    border-color :#982727;
  }

  .draft-btn{
    color: #982727 !important;
    border-color :#982727 !important;
    background-color: white !important;
  }


</style>
<body>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-div" style="position: relative; height: 100vh;">
            <div class="background-image" style=" background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: -1;"></div>
 <div class="container d-flex flex-column rounded" style="position: relative; height: 90vh; max-width: 1200px; margin: auto; background-color: #F5EFEF; padding: 50px; overflow: hidden; top: 5vh; overflow:scroll">
                <div class="d-flex justify-content-between border-bottom border-dark border-opacity-25">
                    <div class="d-flex justify-content-between ms-4">
                        <a href = "{{ route('home') }}" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                        <div class="d-flex align-items-center ms-4 mb-4">
                            <img src="{{ asset('images/logo.png') }}" class=" align-self-end" style="max-height: 70px; max-width: 100%;">
                            <h3 class="ms-4 mb-4 fw-semibold text-center">Tulis Artikelmu</h3>
                        </div>
                    </div>   
                    <div class="d-flex align-items-center ">
                        <button type="submit" class="btn btn-primary fs-4 fw-semibold m-3" style="background-color: #982727; color :#ffffff; border: #982727;" formaction="{{ route('draft')}}">Draft</button>
                        <button type="submit" class="btn btn-primary fs-4 fw-semibold" style="background-color: #982727; color :#ffffff; border: #982727;" formaction="{{ route('store')}}">Posting</button>
                    </div>
                </div>
                <div style="width: 100%;">
                    <div class="mb-4 text-start align-items-lg-center">
                        <label for="Judul" class="mt-5 form-label fw-bold mb-3">Judul</label>
                        <input type="text" value="{{old('Judul')}}" name="Judul" class="form-control rounded @error('Judul') is-invalid @enderror border" id="Judul" style="background-color: #ffffff; width: 100%;" placeholder="Tulis judul artikelmu">
                        @error('Judul')
                            <div class="text-danger"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="Thumbnail" class="form-label ,b-3">Thumbnail</label>
                        <input value="{{old('Thumbnail')}}" class="form-control @error('Thumbnail') is-invalid @enderror" type="file" name="Thumbnail" id="Thumbnail">
                        @error('Thumbnail')
                            <div class="text-danger"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="" class="mb-3">Tambahkan tag</label>
                        <input value="{{old('Tag')}}" type="text" name="Tag" id="Tag" placeholder="Tambahkan tag artikel" class="form-control @error('Tag') is-invalid @enderror" multiple="multiple">
                        @error('Tag')

                            <div class="text-danger"> {{$message}} </div>
                        @enderror 
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="form-label fw-bold mb-3">Apa Ceritamu?</label>
                        <div style="border: 2px solid black; background-color: #F5EFEF;">
                            <textarea name="deskripsi" class="deskripsi form-control rounded" id="deskripsi" cols="70" rows="1000" style="background-color: #F5EFEF; border: none; width: 100%;">{{old('deskripsi')}}</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>

    <script>
        ClassicEditor
                .create( document.querySelector( '#deskripsi' ), {
                    ckfinder:{
                        uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.5.0/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                        uploadUrl: '{{route('upload',['?_token='.csrf_token()])}}',
                        filebrowserUploadMethod : 'form',
                    },
                    image: {
                        resizeUnit: 'px',
                        resizeOptions: [
                            {
                                name: 'resizeImage:original',
                                value: null,
                                icon: 'original'
                            },
                            {
                                name: 'resizeImage:800',
                                value: '800',
                                icon: 'medium'
                            },
                            {
                                name: 'resizeImage:600',
                                value: '600',
                                icon: 'small'
                            }
                        ]
                    }
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#Tag').tokenfield();
        })
    </script>
</body>
</html>
