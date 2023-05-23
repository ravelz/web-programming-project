<link rel="stylesheet" href="./css/Home/style.css">
<link rel="stylesheet" href="./css/Home/homeRes.css">
<link rel="stylesheet" href="./css/Home/homeAnimation.css">


@component('Component.homeComponent')

    <div id="card-kecil" class=" ikuti-card">
        <div class="card" style="max-width: 291.61px; height:auto; border-radius: 0px;">
            <img id = "pic-small" src="../img/Home/smallCard.jpg" class="card-img-top" alt="..." style="border-radius: 0px;">
            <div class="card-body">
            <div class="first-layer">
                <div class="kategori-waktu">
                    <p id="kategori-small" class="kategori">TEMPAT WISATA</p>
                    <p id ="waktu-small"class = "waktu">17 Jam yang lalu</p>
                </div>
            </div>

            <h1 style="color: black" id = "judul-small" class="judul">Judul Artikel</h1>
            <p style = "color: black" id = "deskripsi-small" class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quidem..</p>

            <div class="last-layer">
                <div class="foto-penulis">
                    <a href=""><img id = "prof-small" src="img/Home/profile.jpg" class="img rounded-circle " alt="..." width="32px" height="32px"></a>
                </div>

                <a href="" style="text-decoration: none" id = "name-small" class="nama-penulis">Steven Matthew</a>

                <div class="baca-lebih">
                    <a href = ""style = "text-decoration : none" id = "read-small" class="sub">Baca Lebih</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="background: #5E5D2D;" class="bi bi-arrow-right panah" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </div>
            </div>
            </div>
        </div>
    </div>

@endcomponent
