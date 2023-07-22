<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<style>

  html{
    padding-top: 0px;
    background-color: white;
    overflow: auto;
  }

  .subs-type-card {
    box-shadow: 0 0 0 rgba(0, 0, 0, 0); 
    transition: box-shadow 0.3s ease-in-out, transform 0.5s ease-in-out; 
  }

  .subs-type-card:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    transform: scale(1.05); 
  }
</style>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <div class="container-fluid d-flex flex-column position-absolute subsType-container">
        <h1 class="text-center text-dark text-rubik fw-bold display-5 mt-1">Pilih Jenis Subscription</h1>
        <div class="text-center">
          <img width="250px" height="250px" class="img-fluid" src="{{ asset('storage/LOGO WEB.png') }}" alt="">
        </div>
        
        <div class="d-flex align-items-center justify-content-center ms-auto me-auto subs-type-container mt-5 flex-wrap mb-5">
            @if ($role == 3)
              <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
                  <div class="card-body">
                    <h5 class="card-title fw-semibold fs-3 text-secondary">Maxwin</h5>
                    <p class="card-text fw-normal">Menjadi penulis unggul
                    </p>
                    <p class="fs-2 fw-semibold">Rp 20.000,-</p>
                    <p class="fs-4 fw-bold text-danger">Permanent</p>
                    <a type = "button" href="{{ route('payment', ['role'=>'4', 'paket'=>"Maxwin"]) }}" class="btn text-light fw-normal btn-subsType w-50">Gas Beli !</a>
                  </div>
                  <div class="benefit-subrek border-top border-dark border-opacity-25">
                      <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                      <div class="list-group list-container text-start">
                          <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>Dapat menentukan artikel karya Anda berbayar atau tidak
                          </li>
                          <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Isi konten artikel Anda menjadi lebih eksklusif
                          </li>
                          <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Membantu developer situs web untuk menjadi lebih baik lagi
                          </li>
                      </div>
                  </div> 
              </div>

              <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title fw-semibold fs-3 text-warning">Scatter</h5>
                  <p class="card-text fw-normal">Menjadi pembaca andalan</p>
                  <p class="fs-2 fw-semibold">Rp 50.000,-</p>
                  <p class="fs-4 fw-bold text-danger">Permanent</p>
                  <a type = "button" href="{{ route('payment', ['role'=>'4', 'paket'=>"Scatter"]) }}" class="btn text-light fw-normal btn-subsType w-50 disabled">Gas Beli !</a>
                </div>
                <div class="benefit-subrek border-top border-dark border-opacity-25">
                    <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                    <div class="list-group list-container text-start">
                        <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>  Dapat membaca semua tipe artikel, berbayar maupun tidak</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Tidak ada batasan atas artikel yang dapat Anda akses
                        </li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Membantu developer situs web untuk menjadi lebih baik lagi</li>
                    </div>
                </div> 
              </div>
            @elseif ($role == 2)
              <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title fw-semibold fs-3 text-secondary">Maxwin</h5>
                  <p class="card-text fw-normal">Menjadi penulis unggul
                  </p>
                  <p class="fs-2 fw-semibold">Rp 20.000,-</p>
                  <p class="fs-4 fw-bold text-danger">Permanent</p>
                  <a type = "button" href="{{ route('payment', ['role'=>'4', 'paket'=>"Maxwin"]) }}" class="btn text-light fw-normal btn-subsType w-50 disabled">Gas Beli !</a>
                </div>
                <div class="benefit-subrek border-top border-dark border-opacity-25">
                  <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                  <div class="list-group list-container text-start">
                      <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>Dapat menentukan artikel karya Anda berbayar atau tidak
                      </li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Isi konten artikel Anda menjadi lebih eksklusif
                      </li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Membantu developer situs web untuk menjadi lebih baik lagi
                      </li>
                  </div>
                </div> 
              </div>

              <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title fw-semibold fs-3 text-warning">Scatter</h5>
                  <p class="card-text fw-normal">Menjadi pembaca andalan</p>
                  <p class="fs-2 fw-semibold">Rp 50.000,-</p>
                  <p class="fs-4 fw-bold text-danger">Permanent</p>
                  <a type = "button" href="{{ route('payment', ['role'=>'4', 'paket'=>"Scatter"]) }}" class="btn text-light fw-normal btn-subsType w-50">Gas Beli !</a>
                </div>
                <div class="benefit-subrek border-top border-dark border-opacity-25">
                    <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                    <div class="list-group list-container text-start">
                        <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>  Dapat membaca semua tipe artikel, berbayar maupun tidak</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Tidak ada batasan atas artikel yang dapat Anda akses
                        </li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Membantu developer situs web untuk menjadi lebih baik lagi</li>
                    </div>
                </div>
              </div>
            @elseif ($role == 1)
            <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
              <div class="card-body">
                <h5 class="card-title fw-semibold fs-3 text-secondary">Maxwin</h5>
                <p class="card-text fw-normal">Menjadi penulis unggul
                </p>
                <p class="fs-2 fw-semibold">Rp 20.000,-</p>
                <p class="fs-4 fw-bold text-danger">Permanent</p>
                <a type = "button" href="{{ route('payment', ['role'=>'2', 'paket'=>"Maxwin"]) }}" class="btn text-light fw-normal btn-subsType w-50">Gas Beli !</a>
              </div>
              <div class="benefit-subrek border-top border-dark border-opacity-25">
                <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                <div class="list-group list-container text-start">
                    <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>Dapat menentukan artikel karya Anda berbayar atau tidak
                    </li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Isi konten artikel Anda menjadi lebih eksklusif
                    </li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Membantu developer situs web untuk menjadi lebih baik lagi
                    </li>
                </div>
              </div> 
            </div>

            <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
              <div class="card-body">
                <h5 class="card-title fw-semibold fs-3 text-warning">Scatter</h5>
                <p class="card-text fw-normal">Menjadi pembaca andalan</p>
                <p class="fs-2 fw-semibold">Rp 50.000,-</p>
                <p class="fs-4 fw-bold text-danger">Permanent</p>
                <a type = "button" href="{{ route('payment', ['role'=>'3', 'paket'=>"Scatter"]) }}" class="btn text-light fw-normal btn-subsType w-50">Gas Beli !</a>
              </div>
              <div class="benefit-subrek border-top border-dark border-opacity-25">
                  <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                  
                  <div class="list-group list-container text-start">
                      <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>  Dapat membaca semua tipe artikel, berbayar maupun tidak</li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Tidak ada batasan atas artikel yang dapat Anda akses
                      </li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Membantu developer situs web untuk menjadi lebih baik lagi</li>
                  </div>
               
              </div> 
            </div>
            @elseif ($role == 4)
              <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title fw-semibold fs-3 text-secondary">Maxwin</h5>
                  <p class="card-text fw-normal">Menjadi penulis unggul
                  </p>
                  <p class="fs-2 fw-semibold">Rp 20.000,-</p>
                  <p class="fs-4 fw-bold text-danger">Permanent</p>
                  <a type = "button" href="{{ route('payment', ['role'=>'2', 'paket'=>"Maxwin"]) }}" class="btn text-light fw-normal btn-subsType w-50 disabled">Gas Beli !</a>
                </div>
                <div class="benefit-subrek border-top border-dark border-opacity-25">
                  <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                  <div class="list-group list-container text-start">
                      <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>Dapat menentukan artikel karya Anda berbayar atau tidak
                      </li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Isi konten artikel Anda menjadi lebih eksklusif
                      </li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>Membantu developer situs web untuk menjadi lebih baik lagi
                      </li>
                  </div>
              </div> 
              </div>



              <div class="card subs-type-card text-center mt-3 ms-5 border-3" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title fw-semibold fs-3 text-warning">Scatter</h5>
                  <p class="card-text fw-normal">Menjadi pembaca andalan</p>
                  <p class="fs-2 fw-semibold">Rp 50.000,-</p>
                  <p class="fs-4 fw-bold text-danger">Permanent</p>
                  <a type = "button" href="{{ route('payment', ['role'=>'3', 'paket'=>"Scatter"]) }}" class="btn text-light fw-normal btn-subsType w-50 disabled">Gas Beli !</a>
                </div>
                <div class="benefit-subrek border-top border-dark border-opacity-25">
                    <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                    <div class="list-group list-container text-start">
                        <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>  Dapat membaca semua tipe artikel, berbayar maupun tidak</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Tidak ada batasan atas artikel yang dapat Anda akses
                        </li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  Membantu developer situs web untuk menjadi lebih baik lagi</li>
                    </div>
                </div>
              </div>
            @endif
            
              
            
        </div>
    </div>
  
    <svg class="position-fixed gelombang-bayar bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#982727" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,165.3C384,160,480,128,576,106.7C672,85,768,75,864,96C960,117,1056,171,1152,186.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    
    
</body>
</html>