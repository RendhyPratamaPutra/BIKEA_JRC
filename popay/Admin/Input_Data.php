
<?php

    require "config/koneksi.php";

    if ( isset($_POST["register"])) {

        if (registrasi($_POST) > 0){
           echo "<script> alert('Selamat Input Berhasil.'); location = 'Input_Data.php'; </script>";
      }
      else {
        echo "<script> alert('Maaf Data Gagal Disimpan !!'); location = 'index.php'; </script>";
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
    <title>Register</title>

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

        <div class="container">
          <div class="row card page-content--bge5 mt-5">
            <div class="col-md-10 col-md-offset-1 mx-auto">
              <div class="well well-lg well-sep">
                <div class="row ">
                    <div class="col-sm-6 ">
                     <br><br><br>
                        <h3>Register</h3>
                        <br>
                        <form class="form-horizontal" method="post" action="">
                             <div class="form-group">
                                  <label for="" class="col-sm-3 control-label">NIS</label>
                                   <div class="col-sm-9">
                                    <input class="form-control" id="NIP" name="Id_Siswa" placeholder="NIS" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="password" name="Password" placeholder="Password" type="password" required>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Nama Siswa</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="Nama_Siswa" placeholder="Nama Siswa" type="text" required>
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
                            <div class="Jenis-checkbox">
                              <tr>
                                  <label>Jenis Kelamin : </label>
                                    <td><input name="Jenis_Kelamin" type="checkbox" value="Laki-Laki" checked>
                                  </input>Laki-Laki</td>
                                  <td>  <input name="Jenis_Kelamin" type="checkbox" value="Perempuan" checked>
                                </input>Perempuan
                                </td>
                              </tr>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Nama Ayah</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="Nama_Ayah" placeholder="Nama Ayah" type="text" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">Nama Ibu</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama" name="Nama_Ibu" placeholder="Nama Ibu" type="text" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-sm-9 col-sm-offset-3">No Hp Orang Tua</label>
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
