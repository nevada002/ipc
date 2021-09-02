<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>Masuk | Keluhan Agen</title>
  <link rel="icon" href="assets/img/logoatas.svg" type="image/x-icon">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: #F7AD1A">
    <div class="container ">
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/logopelindo.png" alt="" width="108.8" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-7 justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Keluhan
            </a>
            <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item text-light" href="#">Form Keluhan Nota Kapal</a></li>
              <li><a class="dropdown-item text-light" href="#">Form Keluhan Nota Sampah Kapal</a></li>
              <li><a class="dropdown-item text-light" href="#">Form Keluhan Penghapusan PPKB</a></li>
            </ul>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hasil</a>
          </li>
          <div class="col-5"> </div>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="regist.php">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  <!-- End Navbar -->
  <!-- Input Data -->
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
          <div class="card border-0 mt-5" style="max-width:auto;">
            <div class="card-body">
              <h1 class="card-title text-center mt-5 ">Masuk</h1>
              <div class="row">
                <form action="homeuser.php">
                  <div class="col mt-5 mb-3 ">
                    <input type="email" class="form-control border-0" id="email" placeholder="E-mail">
                  </div>
                  <div class="col mb-3">
                    <input type="password" class="form-control border-0" id="password" placeholder="Kata Sandi">
                  </div>
                  <div class="row">
                    <div class="col"></div>
                    <div class="col-auto mt-4">Belum memiliki akun?<a href="regist.php">Daftar</a></div>
                    <div class="col-auto mt-3 ">
                      <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>