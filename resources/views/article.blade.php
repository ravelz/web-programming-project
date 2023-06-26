<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,100&family=Roboto+Slab&family=Trispace:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="909c13afe6" crossorigin="anonymous" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <title>Article</title>
        <style> 
            /* *{
                border:1px solid black;
            } */
            @media (max-width: 320px){
                .form-control{
                    width: 80%;
                }
            }
            @media (max-width: 600px){
                .container {
                    grid-template-columns: 1fr;
                }
            }

            h5{
                font-size:4vmin;
            }
            p{
                font-size:2vmin;
            }
            h6{
                font-size:2.5vmin;
            }
            h3{
                font-size:4vmin;
            }
            
        </style>
    </head>
    <body style="background-color: #F5F0F0;">
        <!-- header -->
        <div class="container-fluid" style="max-height: 200px; width: 100%;">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-light text-center" style="height: 100%;">
                    <div class="container-fluid">
                        <img src="{{ asset('images/LOGO WEB 2.png') }}" style="max-height:60px;display: flex;" alt="" class="img-fluid nav-brand ps-md-5 ps-sm-0 ms-md-5 ms-sm-0">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav-item me-5 col-md-6" style="padding-top: 10px;">
                                <form class="d-flex form-inline justify-content-center" role="search">
                                    <input class="form-control col-md-8" type="search" placeholder="Search" aria-label="Search"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search col-auto" viewBox="0 0 16 16" style="padding-right: 10px; margin-left: 10px; padding-top: 5px;">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </form>
                            </ul>

                            <ul class="nav-item p-0 m-auto">
                                <svg width="45" height="45" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="#982727"/>
                                    <path d="M18.4187 11.375L12.4323 17.7115C12.2062 17.9521 11.9875 18.4261 11.9437 18.7542L11.674 21.1167C11.5792 21.9698 12.1917 22.5531 13.0375 22.4073L15.3854 22.0063C15.7135 21.9479 16.1729 21.7073 16.399 21.4594L22.3854 15.1229C23.4208 14.0292 23.8875 12.7823 22.276 11.2583C20.6719 9.74897 19.4542 10.2813 18.4187 11.375Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.4198 12.4324C17.7333 14.4449 19.3667 15.9834 21.3938 16.1876" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.9375 24.7917H24.0625" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <svg width="45" height="45" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="#982727"/>
                                    <path d="M17.5146 10.1426C15.101 10.1426 13.1396 12.104 13.1396 14.5176V16.6249C13.1396 17.0697 12.95 17.7478 12.724 18.127L11.8854 19.5197C11.3677 20.3801 11.725 21.3353 12.6729 21.6561C15.8156 22.7061 19.2063 22.7061 22.349 21.6561C23.2313 21.3645 23.6177 20.3217 23.1365 19.5197L22.2979 18.127C22.0792 17.7478 21.8896 17.0697 21.8896 16.6249V14.5176C21.8896 12.1113 19.9208 10.1426 17.5146 10.1426Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M18.8635 10.3541C18.6375 10.2884 18.4042 10.2374 18.1635 10.2082C17.4635 10.1207 16.7927 10.1718 16.1656 10.3541C16.3771 9.81447 16.9021 9.4353 17.5146 9.4353C18.1271 9.4353 18.6521 9.81447 18.8635 10.3541Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.7021 21.9187C19.7021 23.1218 18.7177 24.1062 17.5146 24.1062C16.9167 24.1062 16.3625 23.8583 15.9688 23.4645C15.575 23.0708 15.3271 22.5166 15.3271 21.9187" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                                </svg>

                                <svg width="45" height="45" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="#982727"/>
                                    <path d="M17.5 17.4999C19.5135 17.4999 21.1458 15.8676 21.1458 13.8541C21.1458 11.8405 19.5135 10.2083 17.5 10.2083C15.4865 10.2083 13.8542 11.8405 13.8542 13.8541C13.8542 15.8676 15.4865 17.4999 17.5 17.4999Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23.7635 24.7917C23.7635 21.9698 20.9563 19.6875 17.5 19.6875C14.0438 19.6875 11.2365 21.9698 11.2365 24.7917" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </ul>
                        </div>
                    </div>
                </nav>    
            </div>
            <!-- header selesai -->

            <!-- isi artikel -->
            <div class="d-flex flex-row">
                <!-- yang kosong paling kiri -->
                <div class="offset-1 col-10">
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <!-- paling atas  -->
                                <div style= "padding-top: 20px;"> 
                                    <div class="row flex-nowrap">
                                        <div class="col-auto">
                                            <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                        </div>
                                        <div class="col-auto">
                                            <h6 style="font-family: Poppins, sans-serif;font-weight: 600;"> Christiella </h6>
                                            <p style="color: #696969; font-family: Poppins, sans-serif;font-weight: 200;" > 4 april 2023 | 
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="12" height="12" fill="url(#pattern0)"/>
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#image0_146_1184" transform="scale(0.00195312)"/>
                                                    </pattern>
                                                    <image id="image0_146_1184" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                                                </defs>
                                            </svg>
                                            Premium </p>
                                        </div>
                                        <div class="col-auto d-flex justify-content-between ms-auto">
                                            <svg width="45" height="45" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px;">
                                                <circle cx="17.5" cy="17.5" r="17.5" fill="#5E5D2D"/>
                                                <path d="M16.7108 11.8959L22.9524 15.0167C25.7524 16.4167 25.7524 18.7063 22.9524 20.1063L16.7108 23.2272C12.5108 25.3272 10.7972 23.6063 12.8972 19.4136L13.5316 18.1522C13.692 17.8313 13.692 17.299 13.5316 16.9782L12.8972 15.7094C10.7972 11.5167 12.518 9.7959 16.7108 11.8959Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.743 17.5615H17.6805" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <svg width="45" height="45" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="17.5" cy="17.5" r="17.5" fill="#5E5D2D"/>
                                                <path d="M13.9073 22.3645C14.5052 21.7228 15.4166 21.7739 15.9416 22.4739L16.6781 23.4583C17.2687 24.2385 18.2239 24.2385 18.8146 23.4583L19.551 22.4739C20.076 21.7739 20.9875 21.7228 21.5854 22.3645C22.8833 23.7499 23.9406 23.2905 23.9406 21.351V13.1333C23.9479 10.1947 23.2625 9.45825 20.5062 9.45825H14.9937C12.2375 9.45825 11.5521 10.1947 11.5521 13.1333V21.3437C11.5521 23.2905 12.6166 23.7426 13.9073 22.3645Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14.8333 13.1042H20.6666" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.5625 16.0208H19.9375" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <!-- bagian isi artikel -->
                                @foreach ($read as $r)
                                    <x-isi-article :dataArticle="$r"/>
                                @endforeach


                                <!-- komen  -->
                                <div style="padding-top: 40px;" class="buatKomen">
                                    <div style="background-color: #ffffff; padding-top: 20px;" class="d-flex row">    
                                        <div class="col-auto">
                                            <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style="width: 50px; height: 50px; border-radius: 100%; float: right;" alt="">
                                        </div>
                                        <div class="col-auto">
                                            <h6 style="font-family: Poppins, sans-serif; font-weight: 600;">Steven Matthew</h6>
                                            <p><small style="font-family: Poppins, sans-serif; font-weight: 200;" class="text-muted">Apa Tanggapan Anda?</small></p>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <div style="padding-top: 50px; height: 100px; align: bottom;" class="row flex-nowrap">
                                                <div class="d-flex flex-col justify-content-start">
                                                    <a href="#" style="font-family: Poppins, sans-serif; font-weight: 200; background-color: #ffffff; color: #982727; border: none !important; box-shadow: none !important;" class="btn btn-primary">Batal</a>
                                                    <a href="#" style="font-family: Poppins, sans-serif; background-color: #982727; border: none !important; box-shadow: none !important; height: 40px;" class="btn btn-primary">Kirim</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- komen -->
                                <div style= "padding-top: 30px;" class="Komen">
                                    <div style= "padding-top: 20px;background-color: #FFFFFF;" class="row"> 
                                        <div class="row">
                                            <div class="col-auto">
                                                <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                            </div>
                                            <div class="col-auto">
                                                <h6 style="font-family: Poppins, sans-serif;font-weight: 600;"> Vierdaria </h6>
                                                <p style="font-family: Poppins, sans-serif;ont-weight: 200;"> Keren Bangettt </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div style="padding-top: 20px;justify-content: space-between;" class="bagianIcons">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#982727" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
                                                    <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15Zm0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                                </svg>
                                                <span style="font-family: Poppins, sans-serif;font-size: 15px;" class="text">265</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#982727" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                </svg>
                                                <span style="font-family: Poppins, sans-serif;font-size: 15px;"class="text">60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- <div class="col-md-1"></div> -->
                            </div>
                        </div>
                        <div style="padding-top: 30px;" class="ms-auto offset-1 col-3">
                        <div class="card">
                            <a href="#"  style = "background-color: #982727;border-radius: 30px; padding-vertical: 20px; font-size: 12px;border: none !important; box-shadow: none !important;" class="btn btn-primary mx-auto my-4 px-2">GET UNLIMITED ACCESS</a>
                            <img class="card-img-top mx-auto" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 100px;height: 100px;border-radius: 100%;" class="img-fluid" alt="...">
                            <div class="card-body text-center">
                                <h5 style="font-family: Poppins, sans-serif;font-weight: 600;"class="card-title">Christiella</h5>
                                <p style="font-family: Poppins, sans-serif;font-weight: 200;" class="card-text">5.7K Followers</p>
                                <p style="font-family: Poppins, sans-serif;font-weight: 200;" class="card-text">Sr. Software Engineer | Writer | A.I Enthusiast</p>
                                <p style="font-family: Poppins, sans-serif;font-weight: 200;" class="card-text">http://instagram//nenegsukaisih</p>
                                <a href="#"  style = "background-color: #982727;border-radius: 30px; width:100px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Follow</a>
                            </div>
                        </div>
                        <!-- kanan bawah   -->
                        <div style= "padding-top: 30px;" class="BuatMore">
                            <h3> More For KaryaBudaya </h3>
                                <div style= "padding-top: 20px;" class="row"> 
                                    <div class="row">
                                        <div style= "background-color: #FFFFFF;" class="card mb-1" style="max-width: 540px;">
                                            <div class="row">
                                                <div class="col-3" style= "padding-top: 10px;">
                                                    <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;display: flex;" alt="">
                                                </div>
                                                <div class="col-8" style= "padding-top: 10px;">
                                                    <h6 style="font-family: Poppins, sans-serif;font-weight: 600;"> Renatha </h6>
                                                    <p style="font-family: Poppins, sans-serif;ont-weight: 200;"> Festival Ogoh - Ogoh di Bali menjadi pusat perhatian ... </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style= "background-color: #FFFFFF;" class="card mb-1" style="max-width: 540px;">
                                            <div class="row">
                                                <div class="col-3 flex" style= "padding-top: 10px;">
                                                    <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                                </div>
                                                <div class="col-8" style= "padding-top: 10px;">
                                                    <h6 style="font-family: Poppins, sans-serif;font-weight: 600;"> Renatha </h6>
                                                    <p style="font-family: Poppins, sans-serif;ont-weight: 200;"> Festival Ogoh - Ogoh di Bali menjadi pusat perhatian ... </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
