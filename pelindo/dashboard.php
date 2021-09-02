<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard Admin</title>
    <link rel="icon" href="assets/img/logoatas.svg" type="image/x-icon">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Keterangan', 'Total Keseluruhan', 'Aktif', 'Non-Aktif', ],
                ['Jumlah Agen', 20, 15, 5],
                ['BA Nota Kapal', 5, 3, 2],
                ['BA Nota Sampah Kapal', 2, 1, 1],
                ['BA Penghapusan PPKB', 5, 2, 3]
            ]);

            var options = {
                bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>


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
                    <h1>Dashboard</h1>
                </div>
            </nav>
            <div class="row">
                <div class="col-auto">
                    <div class="card border-10" style="width: 15rem; height: 10rem; background-color: #DFDFDF; border-color: rgba(255,99,132,1);">
                        <div class="card-body">
                            <h1 class="card-title">20</h1>
                            <p class="card-text">Jumlah Agen/User</p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card border-10" style="width: 15rem; height: 10rem; background-color: #DFDFDF; border-color: rgba(255, 206, 86, 1);">
                        <div class="card-body">
                            <h1 class="card-title">5</h1>
                            <p class="card-text">Jumlah Berita Acara Nota Kapal</p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card border-10" style="width: 15rem; height: 10rem; background-color: #DFDFDF; border-color: rgba(75, 192,192,1);">
                        <div class="card-body">
                            <h1 class="card-title">2</h1>
                            <p class="card-text">Jumlah Berita Acara Nota Sampah Kapal</p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card border-10" style="width: 15rem; height: 10rem; background-color: #DFDFDF; border-color: rgba(255, 159, 64, 1);">
                        <div class="card-body">
                            <h1 class="card-title">5</h1>
                            <p class="card-text">Jumlah Berita Acara Penghapusan PPKB</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mx-4" id="barchart_material" style="width: 1030px; height: 500px;"></div>
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>