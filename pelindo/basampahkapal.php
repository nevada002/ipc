<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BA Nota Sampah Kapal</title>
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
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="#notakapal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Berita Acara Nota Kapal</a>
                    <ul class="collapse list-unstyled" id="notakapal">
                        <li>
                            <a href="banotakapal.php">Keluhan Berita Acara Nota Kapal</a>
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
                <!-- <li>
                    <a href="review.php">Review</a>
                </li> -->
                <li>
                    <a href="index.php">Logout</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <h1>Keluhan Nota Sampah Kapal</h1>
                </div>
            </nav>

            <table class="table table-bordered table text-center" style="background: transparent;">
                <thead>
                    <tr>
                        <th scope="col">Nama Kapal</th>
                        <th scope="col">Tanggal </th>
                        <th scope="col">Nomor Nota </th>
                        <th scope="col">Deskripsi Keluhan </th>
                        <th scope="col">Lampiran Pendukung</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tanto Mitra</td>
                        <td>19-Juli-2021</td>
                        <td>010.010.21-90.00523</td>
                        <td>Belum Muncul E-Invoice</td>
                        <td>
                            <form method="get" action="file/PenerimaanKP.pdf">
                                <button type="submit">Download</button>
                            </form>
                        </td>
                        <td>
                            <div class="btn-group open">
                                <div style="border: none; height: 30px;  padding: 5px; width: 72px;  color:blue">
                                    Proses
                                </div>
                                <a class="btn btn-default"><i class="icon-cog"></i> </a>
                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class=" "></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Proses</a></li>
                                    <li><a href="#">Ditolak</a></li>
                                    <li><a href="#">Berhasil</a></li>
                                    <li><a href=""></a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Umsini KM</td>
                        <td>5-Agustus-2021</td>
                        <td> 010.010.21-90.004114</td>
                        <td>Belum Muncul E-Invoice</td>
                        <td>
                            <form method="get" action="file/PenerimaanKP.pdf">
                                <button type="submit">Download</button>
                            </form>
                        </td>
                        <td>
                            <div class="btn-group open">
                                <div style="border: none; height: 30px;  padding: 5px; width: 72px;  color: green;">
                                    Berhasil
                                </div>
                                <a class="btn btn-default"><i class="icon-cog"></i></a>
                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class=" "></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Proses</a></li>
                                    <li><a href="#">Ditolak</a></li>
                                    <li><a href="#">Berhasil</a></li>
                                    <li><a href=""></a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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