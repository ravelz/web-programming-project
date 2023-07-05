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
</head>
<body>
    <form method="POST" action="{{ route('store')}}">
        @csrf
        <div class="my-div" style="position: relative; height: 100vh;">
            <div class="background-image" style="background-image: url('https://images.unsplash.com/photo-1571235908642-0459c9475ac3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: -1;"></div>
            <div class="container d-flex flex-column" style="position: relative; height: 90vh; max-width: 1200px; margin: auto; background-color: #F5EFEF; padding: 50px; overflow: hidden; top: 5vh;">
                <div class="d-flex flex-wrap justify-content-end align-items-center">
                    <div>
                        <img src="{{ asset('images/logo.png') }}" class="mb-5" style="max-height: 80px; max-width: 100%;">
                    </div>
                    <div style="margin-left: auto;">
                        <button type="submit" class="btn btn-primary" style="background-color: #982727; padding: 8px 16px; font-size: 18px; color: white; outline: none; margin-right: 10px;">Posting</button>
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
                        <table class="table table-bordered" id="table">
                            <tr>
                                <th>Add Tag</th>
                                <th>Action</th>    
                            </tr>
                            <tr>
                                <td><input type="text" name="inputs[0][name]" placeholder="Add tag here" class="form-control"></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button> </td>    
                            </tr>
                        </table> 
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
    </form>

    <script type="text/javascript">
        var i = 0;
        $('#add').click(function(){
            ++i;
            $('#table').append('<tr><td><input type="text" name="inputs['+1+'][name]" placeholder="Add tag here" class="form-control"></td><td><button type="button" name="remove" id="remove" class="btn btn-danger remove-btn">Remove</button> </td></tr>');
        });
        $(document).on('click', '.remove-btn', function () {
            $(this).parents('tr').remove();
        });
    </script>

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