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
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-light text-center">
                    <div class="container-fluid">
                        <img src="{{ asset('images/LOGO WEB 2.png') }}" style="max-height:70px;display: flex;" alt="" class="img-fluid nav-brand ps-md-5 ps-sm-0 ms-md-5 ms-sm-0">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav-item me-5 col-md-6" style="padding-top: 10px;">
                                <form class="d-flex form-inline" role="search">
                                    <input class="form-control col-md-8" type="search" placeholder="Search" aria-label="Search"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search col-auto" viewBox="0 0 16 16" style="padding-right:a710px">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </form>
                            </ul>
                            <ul class="nav-item p-0 m-auto">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="#982727"/>
                                    <path d="M25.995 8.70006L12.9958 22.4592C12.505 22.9817 12.03 24.0109 11.935 24.7234L11.3491 29.8534C11.1433 31.7059 12.4733 32.9726 14.31 32.6559L19.4083 31.7851C20.1208 31.6584 21.1183 31.1359 21.6091 30.5976L34.6083 16.8384C36.8566 14.4634 37.87 11.7559 34.3708 8.44673C30.8875 5.16923 28.2433 6.32506 25.995 8.70006Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23.8262 10.9958C24.507 15.3658 28.0537 18.7067 32.4553 19.15" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.75 37.8334H38.25" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_377_1010)">
                                        <circle cx="28" cy="25" r="24" fill="#982727"/>
                                    </g>
                                    <path d="M28.0314 10.6075C22.7906 10.6075 18.5314 14.8667 18.5314 20.1075V24.6834C18.5314 25.6492 18.1198 27.1217 17.6289 27.945L15.8081 30.9692C14.6839 32.8375 15.4598 34.9117 17.5181 35.6084C24.3423 37.8884 31.7048 37.8884 38.5289 35.6084C40.4448 34.975 41.2839 32.7109 40.2389 30.9692L38.4181 27.945C37.9431 27.1217 37.5314 25.6492 37.5314 24.6834V20.1075C37.5314 14.8825 33.2564 10.6075 28.0314 10.6075Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M30.9609 11.0667C30.47 10.9242 29.9634 10.8133 29.4409 10.75C27.9209 10.56 26.4642 10.6708 25.1025 11.0667C25.5617 9.89499 26.7017 9.07166 28.0317 9.07166C29.3617 9.07166 30.5017 9.89499 30.9609 11.0667Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M32.7813 36.1783C32.7813 38.7908 30.6438 40.9283 28.0313 40.9283C26.7329 40.9283 25.5296 40.39 24.6746 39.535C23.8196 38.68 23.2812 37.4767 23.2812 36.1783" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                                    <defs>
                                        <filter id="filter0_d_377_1010" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="3"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_377_1010"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_377_1010" result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_377_1011)">
                                        <circle cx="28" cy="25" r="24" fill="#982727"/>
                                    </g>
                                    <path d="M27.9997 25C32.3719 25 35.9163 21.4555 35.9163 17.0833C35.9163 12.711 32.3719 9.16663 27.9997 9.16663C23.6274 9.16663 20.083 12.711 20.083 17.0833C20.083 21.4555 23.6274 25 27.9997 25Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M41.6011 40.8333C41.6011 34.7058 35.5052 29.75 28.0002 29.75C20.4952 29.75 14.3994 34.7058 14.3994 40.8333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <defs>
                                        <filter id="filter0_d_377_1011" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="3"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_377_1011"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_377_1011" result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                            </ul>
                        </div>
                    </div>
                </nav>    
            </div>
            <!-- header selesai -->

            <!-- isi artikel -->
            <div class="row">
                <!-- yang kosong paling kiri -->
                <div class="col-md-2 p-0"> </div>  
                <div style="padding-top: 20px" class="col-md-5">
                    <div class="row">
                        <!-- paling atas  -->
                        <div style= "padding-top: 20px;"> 
                            <div class="row flex-nowrap">
                                <div class="col-auto">
                                    <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                </div>
                                <div class="col-auto">
                                    <h3 style="font-family: Poppins, sans-serif;font-weight: 600;"> Christiella </h3>
                                    <h6 style="color: #696969; font-family: Poppins, sans-serif;font-weight: 200;" > 4 april 2023 | 
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="12" height="12" fill="url(#pattern0)"/>
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_146_1184" transform="scale(0.00195312)"/>
                                            </pattern>
                                            <image id="image0_146_1184" width="512" height="512" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAEAYAAACk6Ai5AAAAIGNIUk0AAHomAACAhAAA+gAAAIDoAAB1MAAA6mAAADqYAAAXcJy6UTwAAAAGYktHRAAAAAAAAPlDu38AAAAJcEhZcwAAAGAAAABgAPBrQs8AAAAHdElNRQfnBAgPGykXeRt+AAAoKUlEQVR42u3debyWdZ3/8c91HwUXcskFzdRxGRcwLXMps2lyMrVMJAkdK0dNG35Kaj9zxqmcMlvUnzaaZoTojOYjl8gsUsGptNJSs1IBl9RBcgOUctRElnNfvz/0Jj2AHM657/tavs/nPz1ShOtQD1+f682BEwEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAg5DneR6RZUU/BwDQea3u6z8ApGNp9+dMm755dvXEiQ4BAKivVufnvn3Gjtkt3/iG/gNA/fXtf8yZM316o5HnDgEAqJ9lXvxb3dd/AKitFfU/HAIAUD8rffHXfwConZX1v7HMP7FL3JD947HHzr1pxhbZ1d/+tkMAAKqj1e15u80ckd1y/vn59fk12T6f+tRK/0H9B4DK6m//Gyv8HhwCAFAZA37x70v/AaAyVrX/jZV+jw4BACittr3496X/AFBaA+3/ygeAFocAAJRGx178+9J/ACiNwfa//wNAi0MAAArTtRf/vvQfAArTrv6v+gDQ4hAAgK4p7MW/L/0HgK5pd/8HPgC0OAQAoGNK8+Lfl/4DQMd0qv+DHwBaHAIA0DalffHvS/8BoG063f/2DQAtDgEAGLDKvPj3pf8AMGDd6n/7B4AWhwAA9FtlX/z70n8A6Ldu979zA0CLQwAAVqg2L/596T8ArFBR/e/8ANDiEACApWr74t+X/gPAUkX3v3sDQItDAICEFR3+wug/AAkrS/+7PwC0OAQASEhZwl84/QcgIWXrf3EDQItDAIAaK1v4S0P/Aaixsva/+AGgxSEAQI2UNfylo/8A1EjZ+1+eAaDFIQBAhZU9/KWl/wBUWFX6X74BoMUhAECFVCX8paf/AFRI1fpf3gGgxSEAQIlVLfyVof8AlFhV+1/+AaDFIQBAiVQ1/JWj/wCUSNX7X50BoMUhAECBqh7+ytJ/AApUl/5XbwBocQgA0EV1CX/l6T8AXVS3/ld3AGhxCADQQXULf23oPwAdVNf+V38AaHEIANBGdQ1/7eg/AG1U9/7XZwBocQgAMAh1D39t6T8Ag5BK/+s3ALQ4BABYBamEv/b0H4BVkFr/6zsAtDgEAHgdqYU/GfoPwOtItf/1HwBaHAIAvEqq4U+O/gPwKqn3P50BoMUhAJC01MOfLP0HSJr+vyy9AaDFIQCQFOEnIvQfIDH6/1rpDgAtDgGAWhN+lkv/AWpN/5fPANDiEACoFeGnX/QfoFb0//UZAPpyCABUmvAzIPoPUGn63z8GgBVxCABUivDTFvoPUCn6v2oMACvjEAAoNeGnI/QfoNT0f2AMAP3lEAAoFeGnK/QfoFT0f3AMAKvKIQBQKOGnEPoPUCj9bw8DwEA5BAC6SvgpBf0H6Cr9by8DwGA5BAA6SvgpJf0H6Cj97wwDQLs4BADaSvipBP0HaCv97ywDQLs5BAAGRfipJP0HGBT97w4DQKc4BABWifBTC/oPsEr0v7sMAJ3mEAB4XcJPLek/wOvS/2IYALrFIQDwGsJPEvQf4DX0v1gGgG5zCACJE36SpP9A4vS/HAwARXEIAIkRfgj9B5Kj/+ViACiaQwCoOeGH5dB/oOb0v5wMAGXhEABqRvihH/QfqBn9LzcDQNk4BICKE34YAP0HKk7/q8EAUFYOAaBihB/aQP+BitH/ajEAlJ1DACg54YcO0H+g5PS/mgwAVeEQAEpG+KEL9B8oGf2vNgNA1TgEgIIJPxRA/4GC6X89GACqyiEAdJnwQwnoP9Bl+l8vBoCqcwgAHSb8UEL6D3SY/teTAaAuHAJAmwk/VID+A22m//VmAKgbhwAwSMIPFaT/wCDpfxoMAHX1yiEw74wZQ7ObLrjAIQCszNLwt/69Ifz1NCrG5cdMnbr0P6kX/QdWkf6nxQBQc/kn47fZ/scf71cEgBVZZvF/5d8bRT8XbXZSfDc/etq0BbcPuzWfOHr0/M0bm+YTR42KDeOi/IQpU4p+PNpL/4GV0f80GQBS4VMDgT58ql8iWi/+Vw77aj7p4IO3yrbKIl56aeTkkZMjFi2af1jj6fy8MWMMATWl/0Af+p82A0BqHAKQPOFPxApe/Pt+M0NAIvQfkqf/RBgA0uUQgOQIfyL6+eLflyEgEfoPydF/Xs0AkDqHANSe8CdigC/+fRkCEqH/UHv6z/IYAHiZQwBqR/gT0aYX/74MAYnQf6gd/ef1GAB4LYcAVJ7wJ6JDL/59GQISof9QefpPfxgAWD6HAFSO8CeiSy/+fRkCEqH/UDn6z6owAPD6HAJQesKfiIJe/PsyBCRC/6H09J+BMADQPw4BKB3hT0RJXvz7MgQkQv+hdPSfwTAAsGocAlA44U9ESV/8+zIEJEL/oXD6TzsYABgYhwB0nfAnoiIv/n0ZAhKh/9B1+k87GQAYHIcAdJzwJ6KiL/59GQISof/QcfpPJxgAaA+HALSd8CeiJi/+fRkCEqH/0Hb6TycZAGgvhwAMmvAnoqYv/n0ZAhKh/zBo+k83GADoDIcArDLhT0QiL/59GQISof+wyvSfbjIA0FkOAVgp4U9Eoi/+fRkCEqH/sFL6TxEMAHSHQwCWIfyJ8OK/XIaAROg/LEP/KZIBgO5yCIDwp8KLf78YAhKh/6D/lIIBgGI4BEiQ8CfCi/+AGAISof8kSP8pEwMAxXIIkADhT4QX/7YwBCRC/0mA/lNGBgDKwSFADQl/Irz4d4QhIBH6Tw3pP2VmAKBcHALUgPAnwot/VxgCEqH/1ID+UwUGAMrJIUAFCX8ivPgXwhCQCP2ngvSfKjEAUG4OASpA+BPhxb8UDAGJ0H8qQP+pIgMA1eAQoISEPxFe/EvJEJAI/aeE9J8qMwBQLQ4BSkD4E+HFvxIMAYnQf0pA/6kDAwDV5BCgAMKfCC/+lWQISIT+UwD9p04MAFSbQ4AuEP5EePGvBUNAIvSfLtB/6sgAQD04BOgA4U+EF/9aMgQkQv/pAP2nzgwA1ItDgDYQ/kR48U+CISAR+k8b6D8pMABQTw4BBkD4E+HFP0mGgEToPwOg/6TEAEC9OQToB+FPhBd/whCQDP2nH/SfFBkASINDgOUQ/kR48Wc5DAGJ0H+WQ/9JmQGAtDgECOFPhhd/+sEQkAj9J/QfIgwApMohkCThT4QXfwbAEJAI/U+S/sNfGQBIm0MgCcKfCC/+tIEhIBH6nwT9h2UZACDCIVBTwp8IL/50gCEgEfpfS/oPK2YAgFdzCNSC8CfCiz9dYAhIhP7Xgv7DyhkAYHkcApUk/Inw4k8BDAGJ0P9K0n/oPwMAvB6HQCUIfyK8+FMChoBE6H8l6D+sOgNAu82J6dHI86IfgzZ75RCYd8aModlNF1zgECiHpeFv/e8i/PU0Ksblx0yd6sWfMmkNAQt6hl2Unzd2bOv/p0U/F22m/6Wk/4nwXtURBoB2WyvOyE+YMsWvCNRT/sn4bbb/8cf7FYFiLbP4v/K/S9HPRZu1fsX/9mG35hNHj/biTxm1/n85f/PGpvnEUaP0v570vxz0PxGv9D/7UPTkx11/fdGPUzcGgDbLvp6NiHUXLvSpgTXnUwML4VP9EuFT/akgvzUgEfpfCP1PRJ/+xweza2KDBQuKfqy6MQB0iEMgEQ6BrhD+RHjxpwb0PxH63xX6nwj97yoDQIc5BBLhEOgI4U+E8FND+p8I/e8I/U+E/hfCANAlDoFEOATaQvgTIfwkQP8Tof9tof+J0P9CGQC6zCGQCIfAgAh/IoSfBOl/IvR/QPQ/EfpfCgaAgjgEEuEQ6BfhT4Twg/6nQv/7Rf8Tof+lYgAomEMgEQ6B5RL+RAg/LEP/E6H/y6X/idD/UjIAlIRDIBEOgYgQ/mQIP6yU/idC/yNC/5Oh/6VmACgZh0AiEj0EhD8Rwg+rTP8Tof/6X2f6XwkGgJJyCCQikUNA+BMh/DBo+p8I/adO9L9SDAAl5xBIRE0PAeFPhPBD2+l/IvSfKtP/SjIAVIRDIBE1OQSEPxHCDx2n/4nQf6pE/yvNAFAxDoFEVPQQEP5ECD90nf4nQv8pM/2vBQNARTkEElGRQ0D4EyH8UDj9T4T+Uyb6XysGgIpzCCSipIeA8CdC+KF09D8R+k+R9L+WDAA14RBIREkOAeFPhPBD6el/IvSfbtL/WjMA1IxDIBEFHQLCnwjhh8rR/0ToP52k/0kwANSUQyARXToEhD8Rwg+Vp/+J0H/aSf+TYgCoOYdAIjp0CAh/IoQfakf/E6H/DIb+J8kAkAiHQCLadAgIfyKEH2pP/xOh/6wK/U+aASAxDoFEDPAQEP5ECD8kR/8Tof+8Hv0nDADJcggkop+HgPAnQvghefqfCP3n1fSfVzEAJM4hkIgVHALCnwjhB/rQ/0Tof9r0n+VYregHoBxah8Csnll5ft7YsWuOemHv+OQPfhA/jAnZpP33L/r5aJNXDoF5Z8wYGjctWtT6y/n18dtsn+OPL/rxaLNRMS4/ZurUBbcPuzWfOHq08AN96X8i9D8t+s/r8BkAvEbrXxDzN29smk8cNcqvCNRT/sn4bbb/8ce3/rPo56HNWou/8AP9pP9p0P+a03/6wQDAcvnUQKggn+oHDJL+QwXpP6vAAMDrcghABQg/0Gb6DxWg/wyAAYB+cQhACQk/0GH6DyWk/wyCAYBV4hCAEhB+oMv0H0pA/2kDAwAD4hCAAgg/UDD9hwLoP21kAGBQHALQBcIPlIz+QxfoPx1gAKAtHALQAcIPlJz+QwfoPx1kAKCtHALQBsIPVIz+QxvoP11gAKAjHAIwAMIPVJz+wwDoP11kAKCjHALQD8IP1Iz+Qz/oPwUwANAVDgFYDuEHak7/YTn0nwIZAOgqhwCE8APJ0X8I/acUDAAUwiFAkoQfSJz+kyT9p0QMABTKIUAShB/gNfSfJOg/JWQAoBQcAtSS8AO8Lv2nlvSfEjMAUCoOAWpB+AFWif5TC/pPBRgAKCWHAJUk/ACDov9Ukv5TIQYASs0hQCUIP0Bb6T+VoP9UkAGASnAIUErCD9BR+k8p6T8VZgCgUhwClILwA3SV/lMK+k8NGACoJIcAhRB+gELpP4XQf2rEAEClOQToCuEHKBX9pyv0nxoyAFALDgE6QvgBSk3/6Qj9p8YMANSKQ4C2EH6AStF/2kL/SYABgFpyCDAgwg9QafrPgOg/CTEAUGsOAfpF+AFqRf/pF/0nQQYAkuAQYLmEH6DW9J/l0n8SZgAgKQ4BIkL4ARKj/0SE/kMYAEiUQyBRwg+QNP1PlP7DUgYAkuYQSITwA/Aq+p8I/YdlGAAgHAK1JfwAvA79ryn9hxUyAMCrOARqQvgBWAX6XxP6DytlAIDlcAhUlPADMAj6X1H6D/1mAIDX4RCoCOEHoI30vyL0H1aZAQD6wSFQUsIPQAfpf0npPwyYAQBWgUOgJIQfgC7S/5LQfxg0AwAMgEOgIMIPQIH0vyD6D21jAIBBcAh0ifADUCL63yX6D21nAIA2cAh0iPADUGL63yH6Dx1jAIA2cgi0ifADUCH63yb6Dx1nAIAOcAgMkPADUGH6P0D6D11jAIAOcgj0k/ADUCP630/6D11nAIAucAisgPADUGP6vwL6D4UxAEAXOQReIfwAJET/X6H/UDgDABQg2UNA+AFImP7rPxTNAAAFSuYQEH4AWEr/gaIYAKAEansICD8ArJD+A91mAIASqc0hIPwA0G/6D3SLAQBKqLKHgPADwIDpP9BpBgAoscocAsIPAG2j/0CnGACgAkp7CAg/AHSM/gPtZgCACinNISD8ANA1+g+0iwEAKqiwQ0D4AaAw+g8MlgEAKqxrh4DwA0Bp6D8wUAYAqIGOHQLCDwClpf/AqjIAQI207RAQfgCoDP0H+ssAADU04ENA+AGgsvQfWBkDANRYvw8B4QeA2tB/YEVWK/oBgM5rHQIzD5s5Jj9vzJgNrmpeFCdNnhwfi/XihSFDhB8A6kf/gb4MAJCQ1iEwq2dWnp83dmxc+fJfF34AqC/9B1oMAJAgwQeA9Og/4M8AAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEmAAAAAAgAQYAAAAACABBgAAAABIgAEAAAAAEtCIadlpMaS3t+gHqYt8dKwZzw8ZUvRzAAAAVJX3qjZ75b2/kZ2XbxFrLV5c9PPUyIyYt/baRT8EAABAVWVH5DvF4+usU/Rz1EV2VNwV6yxc2MjHZjNjvYULi36g2ngs/2K2yUYbFf0YAAAAVZX/LLsw22TDDYt+jtr4ZH5HrLdwYSN2zf85NlqwoOjnqY2D4u/iO9tum+d5HpFlRT8OAABAVbz8HtVoZPvGznHFttsW/Tx1kW8eR8fGCxY0sjFxZbx9/vyiH6g2mvFEzF177afXmbl5xNZbF/04AAAAVfHM393/+Yhttsl/l58Vf1pzzaKfpzYOzmbGbvPnN+LYbE682wDQbs0T8882Jr3nPUU/BwAAQFU0Ry45tPGl97636Oeom2yffHw+55lnGvms/Kh8+jPPFP1AdZNdGe/I573//UU/BwAAQGVsnf1D3rvvvkU/Ru2cHOfG9vPnN2JcfCcO/uMfi36e2lmQfT77+kEH/Wn+Xb+JWHfdoh8HAACgrOZf/9D4iHXWifOy3bNvfvCDRT9P3eQ/yIbGR2bPbsTu2bPZlx99tOgHqpvW71lZPGXovzY+f9hhRT8PAABAWfUetvC6xkkf/ajf+98h6zcfzM5+9NFGdnTzM9mfDQCdkm8aX4n7Tzklb96cR6y2WtHPAwAAUBZ5867fRKy+enN2rB//c8opRT9Pbd2dXZOtPWtWo/Fvzd17f3n//UU/T23tEsPiB9tsM+9tG81tnHnUUUU/DgAAQFnMe3DoE41/+cQnYlH+3fjxVlsV/Tx1lR2Uv733W/ffn7W+zuLcp2f8ubHpc8+1voxd0Q9YN9m4+GNs/6c/9W405LHm/dtv/6aLtx8X4Q9fBAAA0vPEsPsviNhgg9XeuOQXjbc88EB+Z/x7zNxww6Kfq3buiZ/FZs8/P/z9O53QfGzddRtZlmURzWa2Q5wWJ8+cWfTz1VU+IbaIB9/4xsYdi27JTpswoejnAQAA6LaXfwE6y3rGLdk/O/Xii734d1p2apw6Y8bL7/153lj6178Vc/KRd91V9OPV3k3xuewrhxwy508z3tI46MQTi34cAACAbpn3/2Zs3Pi7T386PhMvZWePHl3089Rd9tn4m1e/5/91ALgw3zHb6rbbin7AZPwmPzCmfv3rTz157z09jY98pOjHAQAA6JS5B997Wc+7R43Kh2fvijvPPrvo50lFvjjfJdvr1ltb/33pANBcvNo7mjsYALpmlzg8ljQajU9kv8nX+c535s6afnPPjhYwAACgPuZtO+MDPVt++MOxMFucT7/66tgvPyMW9fQU/VypWPKJ/NnmkF/9qvXflw4Am94+4sCI2bNjSHZ4HDhrVtEPmor8P2PPeG7o0PwX2fn5rO99b84H7v1L44jx44t+LgAAgIGaM236rxuHnHBC87QYks+95prWe0/Rz5WMiXFOHPrQQ28+ceepEY8/3vrLjb7fLvvvfLv8/9x4Y9HPm5zWEnZp9j9xxQUXzN1m+u+yr1511Z/z3+cR661X9OMBAACsyOzZ994bsf76c8fNOCQ7/ZprXv5y6Oef71f8i5H9MLsz/+epU/v+9WUGgHy97OTGpGW/Id2V3xarZ58/9NCF01d7uLHbAw/M233G+Ma0I45ofdnGop8PAABIV+u95Kn83qsb1xx55NC1G3s1dn3ggfyL+Rez0/0ZZ0VrXpg/0rh+2ff6rO9fePLYu+6KWGutxleGbt3YdN68aMYTMXfttYv+AHhZ9t6YEsfed1/cHSfEP5555otDhq3d/PvvfW+rbKss4qWXin4+AACgfmbls/KINdZYe4+/fKoxbezYfN384PjeqafmV8TwuHTHHYt+Pl5xT/wsNnv++cUzXji7+djw4Zuf/M4nIhYsaP3tZX4l+U0X77ZbxIsvZu+MR/NP/fjHRT8/r5XfHB+Ki0eMyP8cs2Kfyy9f88S/bNTY9qmn5q4+/brsikmTnrpk5pieYWPGPHnsgxMifD1NAACg/5665Pd7R2y0Ueurlc0dOf2l7LJLLlnzzL+8r7H1nDnNKfk/xwGXXebFv6yyJflJU6b0ffFf+ndX9I+1/rTG5q35Wflj3/9+0R8GA3RjfDf2fOqp7NRYN9/ygQdidPab2PGZZ/LR+Z2xw7PPxoPZUdGT50U/JgAA0AUfyufGokYjOyt7Jh5ad934Qb573L/hhvmZ8b/Z7B12iAPi8Lhj002LfkwGJtu8cXr2/lGjhi8eObl36o9+tMzfX9E/2PoUj7VGv3BDY8cnnsgnxBbx4BvfWPQHBAAAAPxVtkd8KUY+88wzezTy5vTNNhs5eeTkiEWL+n67Ff5hckt/T/l/x3b5xCuuKPoDAgAAAJaVb5b9Or/ysstW9OLfstI/Tb65KDsxf/eECUV/QAAAAMCy8mOyd+Q7XXrpyr7dSgeATRfvdEPE/fdnu8T1+dibby76AwMAAAAi4p7s4/nHfvKTTT8xcnLEffet7Jv3++vJ5z0xvLH+uecW/fEBAAAAEY3vxNmNd59zTn+/fdbfb5jneR6RZfP2nfHTxjEzZ/qyDwAAAFCA+dkBccL06cNHjHysed4uu2RZlkWs/Ku79fszAJZ+hwvzW+IzX/5y0R8vAAAApCi/PXtHNulLX+rvi39Lvz8DYOkPlOd5RKMx96YZTzVO/v3vY5eYH/+x885F/wQAAABAra2Z/XscP2PG8HVGXtu8oPUr/81mf//xfn8GQEvrB2gcnx2TTT799KI/fgAAAEjC7XFK9uRnP7uqL/4tqzwAtGz88E439M6+9tpsfOwUV/3850X/PAAAAEAtnRTfzY+eNm2T/Xbaq/f7U6YM9LtZ5d8C0Ne8q2eOiXjrW5sv5Usaa9x1V+yXnxGLenqK/vkBAACAKsuOijtinYULG1/s3av57M47b7TnW0dE/OEPA/3+BvwZAC0bHzpycsTdd8e/5aPyyRMnFv0TBAAAALVwVqwVL3zta4N98W8Z9ADQsvrFa/w2P/DUU7Mzs7fGex5/vNifJQAAAKioe+KFGP3IIy++Zdg/NpecdVa7vtu2DQAbfPBvL4x47rl4tHlptmT8+GJ+lgAAAKDaGs82zs3eNX78VtlWWcRLL7Xt+233gw6/bud/6v3lD3+YnZNNySf+13919WcJAAAAKir7eXwxv/6iizY+dOTk3v87dWq7v/+2DwAt+b698/Njxo+Pf8++EocP/vcqAAAAQC3dExvEp++9d9HjL9yeH/CZz3Tqhxn0VwFYmTkfmDkmYo89sry5f2O9X/wi/8/YM54bOrTTPy4AAACU2tT4emz+3HM9l/S8qTl7t902+uWIr0Q89FCnfriOfQZAyyY3jJwcceed8fXYMD550kmd/vEAAACgCrJH8ovjh8cd1+kX/6U/Xrc/wLkjp7+UXXbJJflP46HsqKOP7vaPDwAAAIXaNe7Kf/Stb23y5FuOyg887rhu/bAd/wyAvjaevnB6/k/jxmXfzM7PP3njjd3+8QEAAKAQ92Qfzz/2k5/M36txfX5g9z9DvusDQNbYbfeIxYt757w0Lp8wZkxMid741q9+1e3nAAAAgG7IRsSEOPvOOxvPZtvml48ePXLyyMkRixZ1/TmK/ol48tgHJ0RsuGHPokWHNY765S/zs+KxuGyHHYp+LgAAABiUiXFOHPrQQ7Fnc8PmlXvvvcl+u5wbMW9eUY9T+ADQ8vj59+4f8eY3rz45O7Tx/ttuy78Xu8VPttii6OcCAACAVXJJfCb2evLJfErPp5q37rXXprePODBi9uyiH6vrvwVgRd584s5TIx5/PP/fninNmz7wgdZPWNHPBQAAAP3SevHfpPGG5q377luWF/+W0nwGQF9PveO+H0dsuWVjn+anG0dMm5afkF8bV2y/fdHPBQAAAK9xT7wQox95pDEm+0jz+/vtt/HzOz0e8cgjRT9WX6X5DIC+WkvJog2yXZqX77VX3JPtERf8+tdFPxcAAABERGT7xd3x1d/8Jn98ySnN77/znWV98W8p7QDQsvnJIydH/OlPEb3HNY/fd98YFePyY6ZOLfq5AAAASNSz2bfzw3/6054tVl/YPPUf/mHTT7zt1oinny76sVamtL8FYEVmjpk5JmLIkA2X5E9nl06YkE/IL8yOOeqoop8LAACAmlsQF+ZXTJo0fMuFx+SHH3dc68vcF/1Y/VW5AaCvebvPGN+YdsQRzevzL8WRF10UzXgi5q69dtHPBQAAQLVlu2b/Gm9csCD/Q7w1PnfCCZsM2+mrzU9PmlT0cw344yn6AdrlyWOn7xqxww6NMfHjxslXXx27xPz4j513Lvq5AAAAqJbsYzE3jr7//vyU5o3NSWPHbrLfLudGzJhR9HMN+uMq+gHabVY+K49YY421hr3wcPbLs87KH4mXsveccELRzwUAAEDJHR3P5N/4zneamy18Qz5+3Lg3XbzbbhEvvlj0Y7VL7QaAvuZtO+MDPVt++MP52/Ov5dued15+fjTi5s03L/q5AAAAKFb2kbgr3vfHP8ZH44Js/oknDh/3lt/1/va664p+rk4p/VcBGKyNH97pht7Z117bu87Cxc2f7rBDPjx2yntPPz07NV6MYYsWFf18AAAAdMlZsU2stXhxtk2skf/8G9/oWW/13uZNO+1U9xf/ltp/BsCKPH3H3fdFbLdd7909W2RHXnhhjIpZ2eX77lv0cwEAANBe2fjYKa76+c/zP/Qc0hx7/PGb3Dvi2oiZM4t+rq7/PBT9AEXL8zyPyLK5N838eGPOoYdmJ+Uj4gunnZbfHB+Ki0eMKPr5AAAAWDXZN7IPx8cefDBflN8QF3zhC5uc85a/ba579dVFP1fRkh8A+np5EGg0nv7bmR/s2fLgg/MjI/IjP/e5/Jj8rDhj112Lfj4AAAD6uCFuiTEPP5z/TXZQfPTLX97kvffd0Rx1xRVZNnZsRG9v0Y9XFgaAfpp39cwxEXvv3RzVfCk7/PTT49n4WnbVPvsU/VwAAACpySZl/xqn/e532Q9j69jr/PM3uuPpC5r7ffe7WeO9WcSSJUU/X1kZAAZozrT7NovYc8/YrvfA7LvHHBPPxWHZKYcdFsNjw3hq2LCinw8AAKDy7omfxWbPPx8R5+TnXHVVnN/YMz900qRNbhg5OeLOO4t+vKoxALTJMx96YFLEG97QO3nxYY1bDj443hcv5JMPPTS2idnZ5fvum58Za8ULQ4YU/ZwAAABls/SrtP00Hs2PvOmm+M+4Ozv86quz+Y2Hmu+47rqNDx05OeKFF4p+zqozAHTY7Nn33hux/vpDN2sMbTy6//5xUP5k/uMDDojLsw9ll+63XyzJfx13b7xx0c8JAADQcfNijdh17tw4JC7NPzFtWtyfHZkdMHXq0J7F2zX/5sYb18/elkU8+2zRj1lXBoCCtP6wwbk33fuZiBEjsi0a7278y95759/OPpK/+V3vihfjkOzOPfaId8VLMXmbbWK//IxY1NNT9HMDAAAsY1p2Wgzp7c0ejJkx9uGH87vzifked96ZjY0zsjm33ZZv2nxb88u33Tb8/TufEzFzZpZlWUSeF/3YqTEAlNxj5/56s4g111xtxrBvRowc2ZgQ72vcsuOO8WD8KN639dbxqzgn/+ZWW8UXYmzcvMUW+R+yO7KNNtoors13iLs22CD7eRwcMzfYwG9BAAAAVqT1Kfj5e+K6GDl/fnw4eyB2mz8/2y7fM3/66afj41kz3jd7drwt/1U2ftasGBNXxdRZs3rn5//T/Pv77uu98i8HRNx33+Ynv/OJiAULiv54WD4DQGJaf1bBXy5ctEfEaqsV/TwAAED3rT1+yJ0RS5ZsOGWHYyKef77o5wEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAyu//A0QqPGgbfhPXAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIzLTA0LTA4VDE1OjI3OjQxKzAwOjAwtzKsjAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMy0wNC0wOFQxNToyNzo0MSswMDowMMZvFDAAAAAodEVYdGRhdGU6dGltZXN0YW1wADIwMjMtMDQtMDhUMTU6Mjc6NDErMDA6MDCRejXvAAAAAElFTkSuQmCC"/>
                                        </defs>
                                    </svg>
                                    Premium </h6>
                                </div>
                                <div class="col-auto d-flex justify-content-between ms-auto">
                                    <svg width="50px" height="50px" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_280_1024)">
                                            <circle cx="25" cy="22" r="21" fill="#5E5D2D"/>
                                            <path d="M23.8688 11.1688L36.3521 17.4104C41.9521 20.2104 41.9521 24.7896 36.3521 27.5896L23.8688 33.8313C15.4688 38.0313 12.0417 34.5896 16.2417 26.2042L17.5104 23.6813C17.8313 23.0396 17.8313 21.975 17.5104 21.3333L16.2417 18.7958C12.0417 10.4104 15.4834 6.96876 23.8688 11.1688Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M17.9336 22.5H25.8086" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_280_1024" x="0" y="0" width="50" height="50" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="3"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_280_1024"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_280_1024" result="shape"/>
                                            </filter>
                                        </defs>
                                    </svg>
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_280_1033)">
                                            <circle cx="25" cy="22" r="21" fill="#5E5D2D"/>
                                            <path d="M17.8149 33.7292C19.0107 32.4459 20.8337 32.5479 21.8837 33.9479L23.3566 35.9167C24.5378 37.4771 26.4482 37.4771 27.6295 35.9167L29.1024 33.9479C30.1524 32.5479 31.9753 32.4459 33.1712 33.7292C35.767 36.5 37.8816 35.5813 37.8816 31.7021V15.2667C37.8962 9.3896 36.5253 7.91669 31.0128 7.91669H19.9878C14.4753 7.91669 13.1045 9.3896 13.1045 15.2667V31.6875C13.1045 35.5813 15.2337 36.4854 17.8149 33.7292Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.667 15.2083H31.3337" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21.125 21.0417H29.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_280_1033" x="0" y="0" width="50" height="50" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                <feOffset dy="3"/>
                                                <feGaussianBlur stdDeviation="2"/>
                                                <feComposite in2="hardAlpha" operator="out"/>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_280_1033"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_280_1033" result="shape"/>
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>

                            <!-- bagian isi artikel -->
                        <div style= "padding-top: 40px;" class="bagBawah mx-auto text-center" >
                            <h3 style="font-family: Rubik, sans-serif;font-weight: 600;">TARI KECAK CIRI KHAS BALI</h3>
                            <img class="img-fluid mx-auto" src="{{ asset('images/tarikecak.jpg') }}" style= "width: 400px;height: 250px;" alt="" class="img-fluid">
                        </div>
                        <div style= "padding-top: 50px; padding-left: 10px;text-indent: 50px; font-family: Poppins, sans-serif;font-weight: 300;" class="isiArtikel">
                            <p>Tari kecak adalah tarian yang berasal dari Bali. Pada tahun 1930, tarian ini tercipta dari penari bali bernama Wayan Limbak dan Walter Spies (Pelukis Jerman). Mereka menginisiasi tari Kecak dari tradisi Sanghyang serta kisah Ramayana. Uninknya para penari menari pada kondisi di rasuki oleh roh atau kesurupan.  </p>
                            <p>Keunikan dari tarian ini adalah gerakannya monoton, dilakukan dengan posisi duduk melingkar dan tangan digoyangkan di atas kepala. Lalu, Gerakan tangan di atas, hal ini sebagai simbol “lidah api” yang menyala, busana yang digunakan sederhana, hanya berupa kain sebagai celana pendek dan penutup kepala. Yang paling unik adalah tarian ini diiringi bunyi dari mulut para penari saja, yakni suara cak-cak-cak. </p>
                            <p>Keunikan dari tarian ini adalah gerakannya monoton, dilakukan dengan posisi duduk melingkar dan tangan digoyangkan di atas kepala. Lalu, Gerakan tangan di atas, hal ini sebagai simbol “lidah api” yang menyala, busana yang digunakan sederhana, hanya berupa kain sebagai celana pendek dan penutup kepala. Yang paling unik adalah tarian ini diiringi bunyi dari mulut para penari saja, yakni suara cak-cak-cak.  </p>
                        </div>
                        <div style="font-family: Poppins, sans-serif;font-weight: 400;" class="rekomendasi">
                            <a href="#"  style = "background-color: #982727;border-radius: 30px; width:80px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Tarian</a> 
                            <a href="#"  style = "background-color: #982727;border-radius: 30px; width:80px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Umum</a>
                            <a href="#"  style = "background-color: #982727;border-radius: 30px; width:80px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Adat</a>
                            <a href="#"  style = "background-color: #982727;border-radius: 30px; width:80px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Musik</a>
                            <a href="#"  style = "background-color: #982727;border-radius: 30px; width:80px;border: none !important; box-shadow: none !important;" class="btn btn-primary "  >Wisata</a>
                            <div style="padding-top: 20px;justify-content: space-between;" class="bagianIcons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#982727" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
                                    <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15Zm0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                </svg>
                                <span style="font-family: Poppins, sans-serif;"class="text">265</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#982727" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                <span style="font-family: Poppins, sans-serif;"class="text">60</span>
                            </div>
                        </div>
                        <!-- komen  -->
                        <div style= "padding-top: 40px;" class=" buatKomen">
                            <div style="background-color: #ffffff; padding-top: 20px;" class="d-flex row">    
                                <div class="col-auto">
                                    <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                </div>
                                <div class="col-auto">
                                    <h3 style="font-family: Poppins, sans-serif;font-weight: 600;"> Steven Matthew </h3>
                                    <h6><small style="font-family: Poppins, sans-serif;font-weight: 200;" class="text-muted">Apa Tanggapan Anda?</small></h6>
                                </div>
                                <div class="row">
                                    <div style="padding-top: 50px; height: 100px; align: bottom;" class="row flex-nowrap">
                                        <div class="col-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-type-bold" viewBox="0 0 16 16">
                                                <path d="M8.21 13c2.106 0 3.412-1.087 3.412-2.823 0-1.306-.984-2.283-2.324-2.386v-.055a2.176 2.176 0 0 0 1.852-2.14c0-1.51-1.162-2.46-3.014-2.46H3.843V13H8.21zM5.908 4.674h1.696c.963 0 1.517.451 1.517 1.244 0 .834-.629 1.32-1.73 1.32H5.908V4.673zm0 6.788V8.598h1.73c1.217 0 1.88.492 1.88 1.415 0 .943-.643 1.449-1.832 1.449H5.907z"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-type-italic" viewBox="0 0 16 16">
                                                <path d="M7.991 11.674 9.53 4.455c.123-.595.246-.71 1.347-.807l.11-.52H7.211l-.11.52c1.06.096 1.128.212 1.005.807L6.57 11.674c-.123.595-.246.71-1.346.806l-.11.52h3.774l.11-.52c-1.06-.095-1.129-.211-1.006-.806z"/>
                                            </svg>
                                        </div>
                                        <div class="col-7">
                                            <a href="#" style="font-family: Poppins, sans-serif;font-weight: 200;background-color: #ffffff; color: #982727;border: none !important; box-shadow: none !important;" class="btn btn-primary">Batal</a>
                                            <a href="#" style="font-family: Poppins, sans-serif;background-color: #982727; border: none !important; box-shadow: none !important;"class="btn btn-primary">Kirim</a>
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
                                        <h3 style="font-family: Poppins, sans-serif;font-weight: 600;"> Vierdaria </h3>
                                        <h6 style="font-family: Poppins, sans-serif;ont-weight: 200;"> Keren Bangettt </h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="padding-top: 20px;justify-content: space-between;" class="bagianIcons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#982727" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
                                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15Zm0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                        </svg>
                                        <span style="font-family: Poppins, sans-serif;" class="text">265</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#982727" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                            </svg>
                                        <span style="font-family: Poppins, sans-serif;"class="text">60</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- <div class="col-md-1"></div> -->
                    </div>
                </div>

                <!-- selisih antara artikel dengan kanan  -->
                <div class="col-md-1 p-0"> </div>
                
                <!-- kanan atas  -->
                <div style="padding-top: 30px;"class="col-md-2">
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
                                    <div style= "background-color: #FFFFFF;" class="card mb-3" style="max-width: 540px;">
                                        <div class="row">
                                            <div class="col-4" style= "padding-top: 10px;">
                                                <img class="img-fluid" src="{{ asset('images/fotoProfil.jpeg') }}" style= "width: 50px;height: 50px;border-radius: 100%;float: right;" alt="">
                                            </div>
                                            <div class="col-8" style= "padding-top: 10px;">
                                                <h6 style="font-family: Poppins, sans-serif;font-weight: 600;"> Renatha </h6>
                                                <p style="font-family: Poppins, sans-serif;ont-weight: 200;"> Festival Ogoh - Ogoh di Bali menjadi pusat perhatian ... </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style= "background-color: #FFFFFF;" class="card mb-3" style="max-width: 540px;">
                                        <div class="row">
                                            <div class="col-4" style= "padding-top: 10px;">
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
                
                <!-- paling pojok kanan  -->
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>

