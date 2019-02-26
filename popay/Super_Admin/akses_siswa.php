
<?php
 require "config/koneksi.php";

 if ( isset($_POST["submit"])) {

        if (aksessiswa($_POST) > 0){
           echo "<script> alert('Selamat Input Berhasil.'); location = 'akses_siswa.php'; </script>";
    }else {
      echo "<script> alert('Maaf Data Gagal Disimpan !!'); location = 'akses_siswa.php'; </script>";
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

    <title>Data Admin</title>

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

     <!-- Navbar -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="account.php">Account</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
          </div>
        </li>
      </ul>

    </nav>
</form>
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
          <a class="nav-link" href="input_admin.php">
            <i class="fas fa-edit"></i>
            <span>Input Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="akses_admin.php">
            <i class="  fas fa-clipboard"></i>
            <span>Akses Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="akses_siswa.php">
            <i class="fas fa-clipboard"></i>
            <span>Akses Siswa</span></a>
        </li>
      </ul>


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Siswa</li>
          </ol>

          <!-- Area Data Admin Example-->
        
          <div class="main-content">
              <div class="section__content section__content--p30">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="card">
                                  <div class="card-header">Data Siswa</div>
                                  <div class="card-body">
                                      <form action="" method="post" novalidate="novalidate">
                                     <?php  
                                    $result = mysqli_query($koneksi,"SELECT * FROM siswa");  
                                    $jsArray = "var prdName = new Array();\n";  
                                    echo 'NIS : <select name="nis" onchange="changeValue(this.value)">';  
                                    echo '<option>-------</option>';  
                                    while ($row = mysqli_fetch_array($result)) {  
                                        echo '<option value="' . $row['nis'] . '">' . $row['nis'] . '</option>';  
                                        $jsArray .= "prdName['" . $row['nis'] . "'] = {name:'" . addslashes($row['nama_siswa']) . "',desc:'".addslashes($row['kd_status'])."'};\n";    
                                    }  
                                    echo '</select>';  
                                    ?>  
                                    <?php
                                    $sql = mysqli_query($koneksi,"SELECT * FROM status ORDER BY status DESC"); 
                                                      ?>
                                    <br/><br />Nama Siswa : <input type="text" name="nama_siswa" id="prd_name"/>
                                     <br><br>
                                     <p>Status:
                                    <select name="kd_status" id = "prd_desc" >
                                    <?php if (mysqli_num_rows($sql) > 0 ) { ?>
                                    <?php while ($row = mysqli_fetch_array($sql)) { ?>
                                    <option value = "<?php echo $row['kd_status']  ?>"> <?php echo $row['status']  ?> </option>
                                    <?php } ?>
                                     <?php } ?>
                                    </select></p>
                                    <script type="text/javascript">  
                                    <?php echo $jsArray; ?>
                                    function changeValue(id){
                                    document.getElementById('prd_name').value = prdName[id].name;
                                   document.getElementById('prd_desc').value = prdName[id].desc;
                                    };
                                    </script>
                                  
                                           <div class="form-group">
                             <div class="col-sm-9 col-sm-offset-3">
                                   <button type="submit" class="btn btn-primary" name = "submit">Update</button>
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
