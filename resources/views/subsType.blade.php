<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<style>

  html{
    overflow: hidden;
  }

  .subs-type-card {
    box-shadow: 0 0 0 rgba(0, 0, 0, 0); 
    transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out; 
  }

  .subs-type-card:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    transform: scale(1.05); 
  }
</style>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <div class="container-fluid vh-100 vw-100 d-flex flex-column mt-5 position-relative subsType-container">
        <h1 class="text-center text-dark text-rubik fw-bold display-5 mt-1">Pilih Jenis Subscription</h1>
        <div class="text-center">
          <img width="250px" height="250px" class="img-fluid" src="{{ asset('storage') }}/upload/LOGO WEB.png" alt="">
        </div>
        
        <div class="d-flex align-items-center justify-content-center ms-auto me-auto subs-type-container mt-5 flex-wrap">
            <div class="card subs-type-card text-center mt-3 ms-5" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title fw-semibold fs-3 text-secondary">Role 1</h5>
                  <p class="card-text fw-normal">Dengan Subrek, kamu bisa menjelajahi 7 galaxy.</p>
                  <p class="fs-2 fw-semibold">Rp 20.000,-</p>
                  <p class="fs-4 fw-bold text-danger">Permanent</p>
                  <a type = "button" href="{{ route('payment') }}" class="btn text-light fw-normal btn-subsType w-50">Gas Beli !</a>
                </div>
                <div class="benefit-subrek border-top border-dark border-opacity-25">
                    <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                    <div class="list-group list-container text-start">
                        <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>  1.a</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  1.a</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  1.a</li>
                        <li class="list-group-item"><i class="bi bi-dash-circle-fill text-danger"></i>  2.b</li>
                        <li class="list-group-item"><i class="bi bi-dash-circle-fill text-danger"></i>  2.b</li>
                        <li class="list-group-item"><i class="bi bi-dash-circle-fill text-danger"></i>  2.b</li>
                    </div>
                </div> 
            </div>
              
            <div class="card subs-type-card text-center mt-3 ms-5" style="width: 25rem;">
              <div class="card-body">
                <h5 class="card-title fw-semibold fs-3 text-warning">Role 2</h5>
                <p class="card-text fw-normal">Dengan Subrek, kamu bisa menjelajahi 7 galaxy.</p>
                <p class="fs-2 fw-semibold">Rp 50.000,-</p>
                <p class="fs-4 fw-bold text-danger">Permanent</p>
                <a type = "button" href="{{ route('payment') }}" class="btn text-light fw-normal btn-subsType w-50">Gas Beli !</a>
              </div>
              <div class="benefit-subrek border-top border-dark border-opacity-25">
                  <p class="fs-5 text-start ms-3 mt-4 fw-semibold mb-3">Fitur Tambahan</p>
                  <div class="list-group list-container text-start">
                      <li class="list-group-item rounded-0"><i class="bi bi-check-circle-fill text-success"></i>  1.a</li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  1.a</li>
                      <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i>  1.a</li>
                      <li class="list-group-item"><i class="bi bi-dash-circle-fill text-danger"></i>  2.b</li>
                      <li class="list-group-item"><i class="bi bi-dash-circle-fill text-danger"></i>  2.b</li>
                      <li class="list-group-item"><i class="bi bi-dash-circle-fill text-danger"></i>  2.b</li>
                  </div>
              </div> 
          </div>
        </div>
    </div>
    <div class="container-fluid gx-0 position-absolute gelombang-bayar">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#982727" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,165.3C384,160,480,128,576,106.7C672,85,768,75,864,96C960,117,1056,171,1152,186.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    
</body>
</html>