<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        {{-- aku belom bisa masukin cardnya kesini, jadi maaf ya --}}
        @foreach ($articles as $d)
        <div class="card" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">{{$d->judul}}</h5>
              <p class="card-text"> {!! Str::limit($d->deskripsi, 100) !!} </p>
              <a href="{{route('read', ['id'=>$d->id_article, 'judul'=>$d->judul])}}" class="btn btn-primary">Baca  </a>
            </div>
          </div>
        @endforeach
    </div>
</body>
</html>