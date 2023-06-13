<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="{{ route('create')}}">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form>
                        <div class="mb-8">
                            <label for="judul" class="form-label">Judul Artikel</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                        </div>
                        <div class="mb-8">
                        <label for="deskripsi" class="form-label">Isi Artikel</label>
                        <textarea name="deskripsi" class="deskripsi" id="deskripsi" cols="100" rows="20"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div> 
    </form>

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
</body>
</html>