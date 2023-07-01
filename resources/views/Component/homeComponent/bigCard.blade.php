<link rel="stylesheet" href="./css/Home/style.css">
<link rel="stylesheet" href="./css/Home/homeRes.css">
<link rel="stylesheet" href="./css/Home/homeAnimation.css">

@extends('../../Layout.home')

@component('bigCard')

    <div id = follow-card class="card mb-3" style="max-width: 540px; ">
        <div class="row g-0">
            <div class="col-md-4 profile-follow-img" >
                <img id = "follow-img" src="img\Home\hakim.jpg" class="img-fluid rounded-start" alt="..."  >
            </div>
            <div class="col-md-8">
                <div class="card-body" style="height: auto">
                    <div class="d-flex ">
                        <div class="me-auto">
                            <h5 id = "follow-cat" class="card-title p-2" style="color:#982727;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;
                            padding-left:32px; padding-top:16px; box-sizing:border-box">Budaya</h5>
                        </div>
                        <div>
                            <h5 id = "follow-time"class="card-title " style="color:#982727;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif;
                            padding-top:8px; padding-right:32px;box-sizing:border-box">3 hari yang lalu</h5>
                        </div>
                    </div>
                
                    <div id = "follow-tit" style="max-width: 527px; max-height:400px;"><p class="card-text" style="padding-left: 8px;color:black;font-size:34px; font-weight:400; font-family:'Rubik', sans-serif;">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                    <div id = "follow-desc"style="max-width: 527px; max-height:400px"><p class="card-text" style="padding-left: 8px;color:background: #374A59;
                        ;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif; padding-top:24px">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p>
                    </div>
                    <div class="d-flex">
                        <div class="p-2" style="">
                            <img style = "margin-bottom: 8px;"id = "follow-img"src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="44px" height="44px" >
                        </div>
                        <div class="p-2" style="margin-top:8px">
                            <a href = ""id = "follow-name"style="text-decoration:none;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baymax</a>
                        </div>
                        <div class="ms-auto p-2" style="margin-top:8px">
                            <a href = ""style="text-decoration : none; padding-top: 8px; padding-right:32px;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baca Lebih 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endcomponent



<div id = follow-card class="card mb-3" style="max-width: 1005px; height: auto">
    <div class="row g-0">
        <div class="col-md-4" style="height: auto">
            <img id = "follow-img" src="img\Home\hakim.jpg" class="img-fluid" alt="..." style="height:100%; width:100%; object-fit:cover;" >
        </div>
        <div class="col-md-8">
            <div class="card-body" style="height: auto">
                <div class="d-flex ">
                    <div class="me-auto">
                        <h5 id = "follow-cat" class="card-title p-2" style="color:#982727;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;
                        padding-left:32px; padding-top:16px; box-sizing:border-box">Budaya</h5>
                    </div>
                    <div>
                        <h5 id = "follow-time"class="card-title " style="color:#982727;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif;
                        padding-top:8px; padding-right:32px;box-sizing:border-box">3 hari yang lalu</h5>
                    </div>
                 </div>
         
                <div id = "follow-tit" style="max-width: 527px; max-height:400px;"><p class="card-text" style="padding-left: 8px;color:black;font-size:34px; font-weight:400; font-family:'Rubik', sans-serif;">Wayang Kulit : Dari Indonesia Untuk Dunia</p></div>
                <div id = "follow-desc"style="max-width: 527px; max-height:400px"><p class="card-text" style="padding-left: 8px;color:background: #374A59;
                    ;font-size:20px; font-weight:400; font-family:'Rubik', sans-serif; padding-top:24px">wayang kulit lahir, hidup, tumbuh, berkembang terutama dalam masyarakat Jawa. Lebih dari sekadar pertunjukan, wayang kulit dahulu merupakan media permenungan menuju roh spiritual para dewa. . . .</p></div>
                </div>
                <div class="d-flex">
                    <div class="p-2" style="margin-left: 16px;">
                        <img style = "margin-bottom: 8px;"id = "follow-img"src="img/Home/profile.jpg" class="rounded-circle " alt="..." width="44px" height="44px" >
                    </div>
                     <div class="p-2">
                        <a href = ""id = "follow-name"style="text-decoration:none;padding-top: 8px;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baymax</a>
                     </div>
                    <div class="ms-auto p-2">
                        <a href = ""style="text-decoration : none; padding-top: 8px; padding-right:32px;color:#5E5D2D;font-size:20px; font-weight:600; font-family:'Rubik', sans-serif;">Baca Lebih 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5E5D2D" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                              </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>