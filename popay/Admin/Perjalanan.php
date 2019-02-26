<?php
   require 'config/koneksi.php';

   if (isset($_POST['insert'])){

     if(jalanan($_POST) > 0){
       echo "<script>alert('Data Sudah Ditambahkan !'); location : 'Perjalanan.php';</script>";
     }else{
          echo "<script>alert('Data Gagal Ditambahkan !'); location : 'Perjalanan.php';</script>";
     }
   }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Input Perjalanan</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                      <img src="" alt="siswa"/>
                        <a href="#">
                        </a>
                    </div>
                    <div class="header__navbar">

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
                <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a href="#">
                        <img src="" alt="" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
                        <div class="">
                            <img src="" alt="" />
                        </div>
                        <h4 class="name"><strong> SMA NEGERI 1 RAMBIPUJI </strong></h4>
                        <a href="#"></a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>HOME
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="index.html">
                                            <i class=""></i>Pengumuman</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">
                                            <i class=""></i>Input Data</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">
                                            <i class=""></i>Deposit Siswa</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">
                                            <i class=""></i>Denda</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">
                                            <i class=""></i>Rekap</a>
                                </ul>
                            </li>
                            <li>
                                <a href="inbox.html">
                                    <i class=""></i>Inbox</a>
                                <span class="inbox-num">3</span>
                            </li>
                            <li>
                                <a href="#">
                                    <i class=""></i>Logout</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
            <body class="animsition">
                <div class="page-wrapper">
            <body class="animsition">
                <div class="page-wrapper">
                    <div class="page-content--bge5">
                        <div class="container">
                            <div class="login-wrap">
                                <div class="login">
                                <h3 class="text-center title-2"><strong>Input Perjalanan<strong></h3>
                                        </div>
                                       <hr>
                                        <form class="form-horizontal" method="post" action="">
                                            <div class="form-group">
                                              <label for="Nama_Siswa" class="col-sm-9 col-sm-offset-3" name="Nama_Siswa">Kd_perjalanan :</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" id="nama" name="kd_perjalanan" placeholder="kode perjalanan" type="text" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="Nama_Siswa" class="col-sm-9 col-sm-offset-3" name="Nama_Siswa">destinasi :</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" id="nama" name="destinasi" placeholder="destinasi" type="text" required>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                          <div class="col-sm-9 col-sm-offset-3">
                                           <button type="submit" class="btn btn-default"name= "insert">Insert</button>
                                           <button type="submit" class="btn btn-primary" name = "setor">Update</button>
                                           </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                             </form>
                          </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
