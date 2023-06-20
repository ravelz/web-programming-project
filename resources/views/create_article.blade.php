<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
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

    <script>
        ClassicEditor
                .create( document.querySelector( '#deskripsi' ), {
                    ckfinder:{
                        uploadUrl: '{{route('upload',['_token'=>csrf_token()])}}',
                        uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.5.0/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                        filebrowserUploadMethod : 'form',
                    }
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
</body> 
</body>
</html>