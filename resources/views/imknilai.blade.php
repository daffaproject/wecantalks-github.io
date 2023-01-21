<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>HALAMAN NILAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
body {
 background-image: url("assets/img/breadcrumbs-bg.jpg");
 background-size: 500px;
}
    a {
  font-size:14px;
  font-weight:700
}
.superNav {
  font-size:13px;
}
.form-control {
  outline:none !important;
  box-shadow: none !important;
}
@media screen and (max-width:540px){
  .centerOnMobile {
    text-align:center
  }
}

</style>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Daffa Salim</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-12 justify-content-right">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/homepage">Home</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/data_warga">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/data_warga">Help</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<br><br><br>
      {{-- LOGIN --}}
      <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">MASUKAN NILAI ANDA</h2>
                    <p class="text-white-50 mb-5">Mohon masukan data anda dengan benar!</p>

                    <label class="form-label" for="typeEmailX">Nama</label>
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="text" class="form-control form-control-lg" />
                    </div>

                    <label class="form-label" for="typeEmailX">Kelas</label>
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="text" class="form-control form-control-lg" />
                    </div>

                    <label class="form-label" for="typeEmailX">NPM</label>
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="text" class="form-control form-control-lg" />
                    </div>

                    <label class="form-label" for="typeEmailX">Mata Kuliah</label>
                    <div class="form-outline form-white mb-4">
                      <input type="radio" id="radio" />  IMK
                      <input type="radio" id="radio" />  PBO
                      <input type="radio" id="radio" />  PBW
                    </div>

                    <label class="form-label" for="typeEmailX">Nilai</label>
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="text" class="form-control form-control-lg" />
                    </div>

                    <label class="form-label" for="typeEmailX">Masukan Scan transkrip nilai</label>
                    <div class="form-outline form-white mb-4">
                      <input type="file" id="file" class="form-control form-control-lg" />
                    </div>
                    <br>
      
                    <button onclick="myalert1()"class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
                    <script>
                        function myalert1(){
                            alert("Data successfully entered");
                        }
                    </script>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>  
                </div>
              </div>
            </div>
        </div>
      </section>
{{-- LOGIN END --}}


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>