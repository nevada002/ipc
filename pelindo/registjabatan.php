<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Daftar | Penanda Tangan atau Pihak Verifikasi</title>
    <link rel = "icon" href ="assets/img/logoatas.svg" type = "image/x-icon">    
  </head>
  <body>
<div class="container">
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
                      <li><a class="dropdown-item text-light" href="formnotakapal.php">Form Keluhan Nota Kapal</a></li>
                      <li><a class="dropdown-item text-light" href="formnotasampah.php">Form Keluhan Nota Sampah Kapal</a></li>
                      <li><a class="dropdown-item text-light" href="formppkb.php">Form Keluhan Penghapusan PPKB</a></li>
                    </ul>
                </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hasil.php">Hasil</a>
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

<!-- Memilih Role -->
<div class="container">
  <div class="card border-0 mt-5" style="max-width:auto;">
    <div class="card-body">
      <h1 class="card-title text-center mt-5">Daftar</h1>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h4> Role</h4>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
        <div class="row mt-4 ">
            <div class="col-sm"></div>
                <div class="col-sm form-check form-check-inline">
                  <a href="registagen.php" class="link-dark">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Agen</label>
                  </a>
                </div>
                <div class="col-sm form-check form-check-inline">
                  <a href="registcustomerservice.php" class="link-dark">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label " for="inlineRadio1">Customer Service</label>
                  </a>
                 </div>
              <div class="col-sm"></div>
          </div>
  
          <div class="row mt-1 ">
              <div class="col-sm"></div>
                <div class="col-sm form-check form-check-inline">
                  <a href="registjabatan.php" class="link-dark">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Penanda Tangan</label>
                  </a>
                </div>
                <div class="col-sm form-check form-check-inline">
                  <a href="registjabatan.php" class="link-dark" >
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Pihak Verifikasi</label>
                  </a>
          </div>
          <div class="col-sm"></div>
        </div>
      </div>
<!-- End Memilih Role -->

<!-- Input Data -->
  <form action="loginadmin.php">
        <div class="col mt-auto mb-3 ">
            <input type="text" class="form-control border-0" id="exampleFormControlInput1" placeholder="Nama Lengkap">
        </div>
        <div class="col mb-3 ">
            <input type="email" class="form-control border-0" id="exampleFormControlInput1" placeholder="E-mail">
        </div>
        <div class="col mb-3">
            <input type="password" class="form-control border-0" id="exampleFormControlInput1" placeholder="Kata Sandi">
        </div>
        <div class="col mb-3">
            <input type="password" class="form-control border-0" id="exampleFormControlInput1" placeholder="Ulangi Kata Sandi">
        </div>
            <select class="form-select border-0" aria-label="Default select example">
              <option selected>-Pilih-</option>
              <option value="1">Supervisor Perencanaan Pemanduan & Penundaan</option>
              <option value="2">Supervisor Aneka Usaha</option>
              <option value="3">Manager Properti</option>
              <option value="4">Manager Komersial</option>
              <option value="5">Manager Adm. Kepanduan, Komunikasi & Prasarana Pemanduan</option>
              <option value="6">Manager Sistem Infomasi</option>
              <option value="7">Manager Perbendaharaan</option>
            </select>
          <div class="row">
            <div class="col"></div>
            <div class="col mt-4">Sudah memiliki akun?<a href="loginadmin.php">Login</a></div>
            <div class="col-auto mt-3 ">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </div>  
  </form>
<!-- Akhir Pendaftaraan -->
  </div>
</div>

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