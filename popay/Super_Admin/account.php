<?php
        session_start();
        require 'config/koneksi.php';

    if (!isset($_SESSION['admin']) ) {
        header("Location: ../login.php");
        exit;
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

    <title>Akun</title>

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

      <a class="navbar-brand mr-1" href="account.php">MENU</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

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
          <a class="nav-link" href="backup.php">
            <i class="fas fa-edit"></i>
            <span>Backup Database</span></a>      
        </li>
        <li class="nav-item">
          <a class="nav-link" href="restore.php">
            <i class="fas fa-edit"></i>
            <span>Restore Database</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_admin.php">
            <i class="fas fa-clipboard"></i>
            <span>Data Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_siswa.php">
            <i class="fas fa-clipboard"></i>
            <span>Data Siswa</span></a>
        </li>
      </ul>


      <div id="content-wrapper">
        <div class="container-fluid">

       <!-- /.container-fluid -->
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="account.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Admin</li>
          </ol>

          <!-- Area Input Admin Example-->
          <div class="container">
          <div class="row card page-content--bge5 mt-5">
            <div class="col-md-10 col-md-offset-1 mx-auto">
              <div class="well well-lg well-sep">
                <div class="row ">
                    <div class="col-sm-6 ">
                     <br>                        <h3>DATA ADMIN</h3><hr>
           
                    <?php $sql = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nip = '" . $_SESSION['admin'] . "'");?>
                     <?php if (mysqli_num_rows($sql) > 0 ) { ?>
                                    <?php while ($row = mysqli_fetch_array($sql)) { ?>

                        <form class="form-horizontal" method="post" action="">
                             <div class="form-group">
                                  <label for="" class="col-sm-3 control-label">NIP</label>
                                   <div class="col-sm-9">
                                    <input class="form-control" name="nip" placeholder="NIP" type="text" value="<?php echo $row['nip'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control"  name="password" placeholder="Password" type="password" value="<?php echo $row['password'] ?>"required>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Nama Admin</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="nama_admin" placeholder="Nama Admin" type="text" value="<?php echo $row['nama_admin'] ?>"required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" type="text" value="<?php echo $row['tempat_lahir'] ?>"required>
                                </div>
                            </div>
                          </div>
                           <div class="col-md-6">
                              <br><br><br><br>
                            <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input class="form-control"  name="tanggal_lahir" placeholder="yyyy/mm/dd" type="date" value="<?php echo $row['tanggal_lahir'] ?>"required>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Alamat</label>
                                <div class="col-sm-9">
                                    <input class="form-control"  name="alamat" placeholder="Alamat" type="text" value="<?php echo $row['alamat'] ?>"required>
                                </div>
                            </div>
                           <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <input class="form-control"  name="jenis_kelamin" placeholder="Jenis Kelamin" type="text" value="<?php echo $row['jenis_kelamin'] ?>"required>
                                </div>
                            </div>
                         <?php } ?>
                                  <?php } ?>   

                         <div class="form-group">
                             <div class="col-sm-9 col-sm-offset-3">
                                   <button type="submit" class="btn btn-primary" name = "update">Update</button>
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
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
