<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>Daftar</title>
  <link rel="icon" href="assets/img/logoatas.svg" type="image/x-icon">
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

  <!-- Regis -->
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
          <div class="col form-check form-check-inline">
            <button type="button" class="btn btn-primary" style="background: none; border: none;" data-bs-toggle="modal" data-bs-target="#Agen">
              <input class="form-check-input" type="radio" name="agen" id="user" value="option1">
              <label class="form-check-label text-dark" for="user">Agen</label>
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="Agen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrasi Agen</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="login.php">
                    <div class="col mt-auto mb-3 ">
                      <input type="text" class="form-control border-0" id="exampleFormControlInput1" placeholder="Nama Agen">
                    </div>
                    <div class="col mt-auto mb-3 ">
                      <input type="text" class="form-control border-0" id="exampleFormControlInput1" placeholder="Alamat">
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
                    <!-- Akhir Pendaftaraan -->
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: none; border: none;">
                    <div class="col mt-4 text-dark ">Sudah memiliki akun?<a href="login.php">Login</a></div>Login
                  </button>
                  <a href="login.php"><button type="submit" class="btn btn-primary">Daftar</button></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm form-check form-check-inline">
            <button type="button" class="btn btn-primary" style="background: none; border: none;" data-bs-toggle="modal" data-bs-target="#CustomerService">
              <input class="form-check-input" type="radio" name="cs" id="cs" value="cs">
              <label class="form-check-label text-dark" for="cs">Customer Service</label>
            </button>
          </div>
          <div class="modal fade" id="CustomerService" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrasi Customer Service</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="dashboard.php">
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
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: none; border: none;">
                    <div class="col mt-4 text-dark ">Sudah memiliki akun?<a href="loginadmin.php">Login</a></div>Login
                  </button>
                  <a href="loginadmin.php"><button type="submit" class="btn btn-primary">Daftar</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm"></div>
        </div>

        <div class="row mt-1 ">
          <div class="col-sm"></div>
          <div class="col-sm form-check form-check-inline">
            <button type="button" class="btn btn-primary" style="background: none; border: none;" data-bs-toggle="modal" data-bs-target="#PenandaTangan">
              <input class="form-check-input" type="radio" name="pt" id="pt" value="pt">
              <label class="form-check-label text-dark" for="pt">Penanda Tangan</label>
            </button>
          </div>

          <div class="modal fade" id="PenandaTangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrasi Penanda Tangan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="dashboardverif.php">
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
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: none; border: none;">
                    <div class="col mt-4 text-dark ">Sudah memiliki akun?<a href="loginverif.php">Login</a></div>Login
                  </button>
                  <a href="loginverif.php"><button type="submit" class="btn btn-primary">Daftar</button></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm form-check form-check-inline">
            <button type="button" class="btn btn-primary" style="background: none; border: none;" data-bs-toggle="modal" data-bs-target="#PihakVerifikasi">
              <input class="form-check-input" type="radio" name="pv" id="pv" value="pv">
              <label class="form-check-label text-dark" for="pv">Pihak Verifikasi</label>
            </button>
          </div>
          <div class="modal fade" id="PihakVerifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrasi Pihak Verifikasi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="dashboardverif.php">
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
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: none; border: none;">
                    <div class="col mt-4 text-dark ">Sudah memiliki akun?<a href="loginverif.php">Login</a></div>Login
                  </button>
                  <a href="loginverif.php"><button type="submit" class="btn btn-primary">Daftar</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Memilih Role -->

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