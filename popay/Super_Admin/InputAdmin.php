
<?php
    
    require "config/koneksi.php";

    if ( isset($_POST["register"])) {

        if (register($_POST) > 0){
           echo "<script> alert('Selamat Input Berhasil.'); location = 'login.php'; </script>";
      }
      else {
        echo "<script> alert('Maaf Data Gagal Disimpan !!'); location = 'register.php'; </script>";
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">MENU</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>


      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">2+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">notifications 1</a>
            <a class="dropdown-item" href="#">notifications 2</a>

          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Pesan 1</a>
            <a class="dropdown-item" href="#">Pesan 2</a>

          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Account</a>
            <a class="dropdown-item" href="#">Language</a>
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
              <i class="fas fa-home"></i>
                <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="InputAdmin.html">
            <i class="fas fa-edit"></i>
            <span>Input Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DataAdmin.html">
            <i class="	fas fa-clipboard"></i>
            <span>Data Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DataSiswa.html">
            <i class="fas fa-clipboard"></i>
            <span>Data Siswa</span></a>
        </li>
      </ul>


      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Input Admin</li>
          </ol>

          <!-- Area Input Admin Example-->
          <div class="container">
          <div class="row card page-content--bge5 mt-5">
            <div class="col-md-10 col-md-offset-1 mx-auto">
              <div class="well well-lg well-sep">
                <div class="row ">
                    <div class="col-sm-6 ">
                     <br><br><br>
                        <h3>INPUT ADMIN</h3>
                        <br>
                        <form class="form-horizontal" method="post" action="">
                             <div class="form-group">
                                  <label for="" class="col-sm-3 control-label">NIP</label>
                                   <div class="col-sm-9">
                                    <input class="form-control" id="NIP" name="Id_Admin" placeholder="NIP" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="password" name="Password" placeholder="Password" type="password" required>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Nama Admin</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="Nama_Admin" placeholder="Nama Admin" type="text" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="Tempat_Lahir" placeholder="Tempat Lahir" type="text" required>
                                </div>
                            </div>
                          </div>
                           <div class="col-md-6">
                              <br><br><br>

                            <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="Tanggal_Lahir" placeholder="yyyy/mm/dd" type="date" required>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Alamat</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="Alamat" placeholder="Alamat" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <label class=" form-control-label"> Jenis Kelamin</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="pria" class="form-check-input"> Pria
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="wanita" class="form-check-input"> Wanita
                                        </label>
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">No Hp </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="No_HP" placeholder="No HP" type="text" required>
                                </div>
                            </div>
                          <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                         <div class="form-group">
                             <div class="col-sm-9 col-sm-offset-3">
                                   <button type="submit" class="btn btn-primary" name = "register">Register</button>
                                <button type="reset" class="btn btn-default" name = "batal">Reset</button>&nbsp;
                               <a href="index.php" > Kembali</a>
                         </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
              </div>
            </div>
          </div>

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  </body>

</html>
