<link rel="stylesheet" href="./css/Home/style.css">
<link rel="stylesheet" href="./css/Home/homeRes.css">
<link rel="stylesheet" href="./css/Home/homeAnimation.css">

@extends('.....Layout.home')

@section('topAuthor')

    <div id = side-top class="ikuti-author d-flex">
        <div class="ikuti-img">
            <img id = "top-img" src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="47px" height="47px">
        </div>
        <div class="nama-author d-flex" style="margin-left: 16px">
            <div>
                <div><h1 id = "top-name" class = "nama-ikuti" >Cecep Arifin</h1></div>
                <div class="kotak-tulisan"> <p id = "top-desc" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, eum.</p></div>
            </div>
            <div class="kotak-tombol">
                <button type="button" class="btn btn-outline-secondary" style="color: black; border-radius: 20px; width:99px; height:39px; ">Follow</button>
            </div>
        </div>
    </div>

@endsection
