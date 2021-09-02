<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pembuatan Berita Acara Nota Sampah Kapal</title>
    <link rel="icon" href="assets/img/logoatas.svg" type="image/x-icon">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav class="text-center" id="sidebar">
            <div class="sidebar-header">
                <img src="assets/img/logopelindo.png" alt="" width="154.5" height="71">
            </div>
            <ul class="list-unstyled components ">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="#notakapal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Berita Acara Nota Kapal</a>
                    <ul class="collapse list-unstyled" id="notakapal">
                        <li>
                            <a href="banotakapal.php">Keluhan Berita Acara
                                Nota Kapal</a>
                        </li>
                        <li>
                            <a href="buatbanotakapal.php">Membuat Berita Acara Nota Kapal</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#notasampah" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Berita Acara Nota Sampah Kapal</a>
                    <ul class="collapse list-unstyled" id="notasampah">
                        <li>
                            <a href="basampahkapal.php">Keluhan Berita Acara Nota Sampah Kapal</a>
                        </li>
                        <li>
                            <a href="buatbasampahkapal.php">Membuat Berita Acara Nota Sampah Kapal</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#hapusppkb" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Berita Acara Penghapusan PPKB</a>
                    <ul class="collapse list-unstyled" id="hapusppkb">
                        <li>
                            <a href="bahapusppkb.php">Keluhan Berita Acara Penghapusan PPKB</a>
                        </li>
                        <li>
                            <a href="buatbahapusppkb.php">Membuat Berita Acara Penghapusan PPKB</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="review.php">Review</a>
                </li>
                <li>
                    <a href="index.php">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <h1>Surat Berita Acara Koreksi Nota Sampah Kapal</h1>
                </div>
            </nav>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#myModal">Tambah Data</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-scrollable">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Surat Berita Acara Koreksi Nota Sampah Kapal</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nomorsurat" class="form-label">Nomor Surat</label>
                                <input type="text" class="form-control" id="nomorsurat">
                            </div>
                            <div class="mb-3">
                                <label for="haridantanggal" class="form-label">Hari dan Tanggal</label>
                                <input type="date" class="form-control" id="haridantanggal">
                            </div>
                            <div class="mb-3">
                                <label for="haridantanggal" class="form-label">Hari dan Tanggal Nota Sampah Kapal (Dari)</label>
                                <input type="date" class="form-control" id="haridantanggal">
                            </div>
                            <div class="mb-3">
                                <label for="haridantanggal" class="form-label">Hari dan Tanggal Nota Sampah Kapal (Sampai)</label>
                                <input type="date" class="form-control" id="haridantanggal">
                            </div>
                            <div class="mb-3">
                                <label for="pembuat" class="form-label">Dibuat Oleh</label>
                                <input type="text" class="form-control" id="pembuat">
                            </div>
                            <div class="mb-3">
                                <label for="lampiranpendukung">Lampiran Pendukung</label>
                                <input type="file" class="form-control-file" id="lampiranpendukung">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-primary " data-dismiss="modal">Simpan</button>
                            <button type="button" class="btn btn-default btn-secondary " data-dismiss="modal">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table text-center" style="background: transparent;">
                <thead>
                    <tr>
                        <th class="align-text-top" scope="col">No</th>
                        <th class="align-text-top" scope="col">Nomor Surat</th>
                        <th class="align-text-top" scope="col">Hari dan Tanggal</th>
                        <th class="align-text-top" scope="col">Tanggal Nota Sampah Kapal</th>
                        <th class="align-text-top" scope="col">Dibuat Oleh</th>
                        <th class="align-text-top" scope="col">Lampiran Pendukung</th>
                        <th class="align-text-top" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>26821/BA-KNSK/1/2021</td>
                        <td>Rabu 10/8/2021</td>
                        <td>2/7/2021 s/d 6/7/2021</td>
                        <td>Budi</td>
                        <td>
                            <form action="file/PenerimaanKP.pdf" method="get">
                                <button type="submit" style="background: transparent; border: none;">notasampahkapal.pdf</button>
                            </form>
                        </td>
                        <td>
                            <div class="btn-group open">
                                <button type="button" class="btn btn-primary mx-2" data-toggle="modal" data-target="#viewModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-success mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-secondary mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-info mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div id="viewModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="w-100 h-100" src="file/BA_Sampah_kapal2-gambar/0001.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div id="editModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Surat Berita Acara Koreksi Nota Sampah Kapal</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nomorsurat" class="form-label">Nomor Surat</label>
                                            <input type="text" class="form-control" id="nomorsurat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="haridantanggal" class="form-label">Hari dan Tanggal</label>
                                            <input type="date" class="form-control" id="haridantanggal">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaperusahaan" class="form-label">Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="namaperusahaan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaperusahaan" class="form-label">No Surat Perusahaan</label>
                                            <input type="text" class="form-control" id="namaperusahaan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="haridantanggal" class="form-label">Tanggal Surat</label>
                                            <input type="date" class="form-control" id="haridantanggal">
                                        </div>
                                        <div class="mb-3">
                                            <label for="perihal" class="form-label">Perihal</label>
                                            <textarea class="form-control" id="perihal" rows="2"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="penjelasan" class="form-label">Penjelasan</label>
                                            <textarea class="form-control" id="penjelasan" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomornotakapal" class="form-label">Nomor Nota Kapal</label>
                                            <input type="text" class="form-control" id="nomornotakapal">
                                        </div>
                                        <div class="mb-3">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pembuat" class="form-label">Dibuat Oleh</label>
                                            <input type="text" class="form-control" id="pembuat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lampiranpendukung">Lampiran Pendukung</label>
                                            <input type="file" class="form-control-file" id="lampiranpendukung">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <bottom type="button" class="btn btn-default btn-primary " data-dismiss="modal">Simpan</bottom>
                                        <button type="button" class="btn btn-default btn-secondary " data-dismiss="modal">Keluar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <tr>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="btn-group open">
                                    <button type="button" class="btn btn-primary" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                    </button>                         
                                    <button type="button" class="btn btn-success mx-2" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                    </button>
                                </div>
                            </td>                    
                        </tr> -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>