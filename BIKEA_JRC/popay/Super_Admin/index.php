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

    <title>HOME</title>

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

      <a class="navbar-brand mr-1" href="index.php">MENU</a>

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
            <li class="breadcrumb-item active">Home</li>
          </ol>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="breadcrum-item"></i>
              <h3 align="center">VISI MISI DAN TUJUAN SATUAN PENDIDIKAN</h3></div>
            <div class="card-body">
              <h5 align="left">1. VISI SMA NEGERI RAMBIPUJI</h5>
              <span>
                <p>
                  <h6 align="justify">Perkembangan dan tantangan masa depan seperti: perkembangan ilmu pengetahuan dan teknologi; globalisasi yang sangat cepat;
                    era informasi; dan berubahnya kesadaran masyarakat dan orang tua terhadap pendidikan memicu sekolah untuk merespon tantangan sekaligus peluang itu.
                    SMA Negeri Rambipuji memiliki nilai karakter yang menggambarkan profil sekolah yang diinginkan di masa datang yang diwujudkan dalam Visi sekolah berikut:</h6>
                    <table style="height: 60px;" width="776">
                    <tbody>
                    <tr>
                    <td width="492">
                    <h5 style="text-align: center;"><strong>&nbsp;</strong><strong>“ Membentuk Generasi Berprestasi, Berbudaya, Beriman dan Bertaqwa</strong><strong> ”</strong></h5>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <h5><strong>&nbsp;</strong><strong>Indikator visi :</strong></h5>
                    <ol>
                    <li>
                    <h6>Unggul dalam berprestasi, bersaing memasuki perguruan tinggi dan dunia kerja, serta mampu civilized / survival di era globalisasi</h6>
                    </li>
                    <li>
                    <h6>Unggul dalam pengamalan ajaran agama</h6>
                    </li>
                    <li>
                    <h6>Berkarakter dan berbudi pekerti luhur</h6>
                    </li>
                    <li>
                    <h6>Peduli dan berbudaya lingkungan</h6>
                    </li>
                    </ol>
                    <h5>2. MISI SMA NEGERI Rambipuji</h5>
                    <h6>Misi SMA Negeri Rambipuji adalah :</h6>
                    <ol>
                        <li>
                          <h6>Melaksanakan pembelajaran dan bimbingan secara efektif</h6>
                        </li>
                        <li>
                          <h6>Menumbuhkembangkan bidang akademik</h6>
                        </li>
                        <li>
                          <h6>Menumbuhkembangkan rasa kedisplinan yang tinggi</h6>
                        </li>
                        <li>
                          <h6>Menumbuhkembangkan pribadi berkarakter dan sistemik</h6>
                        </li>
                        <li>
                          <h6>Melaksanakan pembinaan ekstrakurikuler secara intensif</h6>
                        </li>
                        <li>
                          <h6>Membekali ketrampilan dibidang komputer</h6>
                        </li>
                        <li>
                          <h6>Melaksanakan bimbingan bahasa Inggris</h6>
                        </li>
                        <li>
                          <h6>Menumbuhkembangkan sikap peduli lingkungan hidup</h6>
                        </li>
                      </ol>
                      <h5>3.TUJUAN PENDIDIKAN SMA NEGERI RAMBIPUJI</h5>
                      <H6 align="justify"><b>Tujuan Pendidikan Nasional</b> adalah mengembangkan kemampuan dan membentuk watak serta peradaban bangsa yang bermartabat dalam rangka mencerdaskan kehidupan bangsa, bertujuan untuk berkembangnya potensi peserta didik agar menjadi manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, dan menjadi warga negara yang demokratis serta bertanggung jawab.Tujuan pendidikan SMA : Tujuan pendidikan tingkat satuan pendidikan menengah dirumuskan mengacu kepada tujuan umum pendidikan sebagai berikut. </H6>
                      <ul>
                        <li>
                          <h6>Tujuan pendidikan menengah adalah meningkatkan kecerdasan, pengetahuan, kepribadian, akhlak mulia, serta keterampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanjut.</h6>
                        </li>
                        <li>
                          <h6>Tujuan pendidikan menengah kejuruan adalah meningkatkan kecerdasan, pengetahuan, kepribadian, akhlak mulia, serta keterampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanjut sesuai dengan kejuruannya.</h6>
                        </li>
                        <li>
                          <h6>Tujuan pendidikan menengah dalam PP No 29 Tahun 1990 pasal 2 (1) yaitu:</h6>
                            <h6>Meningkatkan pengetahuan siswa untuk melanjutkan pendidikan pada jenjang yang lebih tinggi dan untuk mengembangkan diri sejalan dengan perkembangan ilmu pengetahuan, teknologi dan kesenian.</h6>
                        </li>
                        <li>
                          <h6>Meningkatkan kemampuan siswa sebagai anggota masyarakat dalam mengadakan hubungan timbal-balik dengan lingkungan sosial, budaya dan alam sekitarnya.</h6>
                        </li>
                      </ul>
                      <h6>Tujuan pendidikan SMAN RAMBIPUJI<h6>
                      <ul>
                        <li>
                          <h6>Memiliki keunggulan dalam berprestasi, mampu bersaing memasuki perguruan tinggi dan dunia kerja, serta mampu menghadapi tantangan di era globalisasi</h6>
                        </li>
                        <li>
                          <h6>Meningkatkan nilai-nilai keimanan dengan meningkatkan pengamalan ajaran agama</h6>
                        </li>
                        <li>
                          <h6>Memiliki karakter dan berbudi pekerti luhur yang dengan mengedepankan nilai-nilai moralitas dalam menghadapi kehidupan bernasyarakat.</h6>
                        </li>
                        <li>
                          <h6>Memiliki kesadaran dan kepeduli berbudaya terhadap lingkungan sekitar</h6>
                        </li>
                      </ul>
                      <h6>Indikator utama mutu yg ingin dicapai SMAN Rambipuji sebagai berikut :</h6>
                      <table style="height: 937px;" width="795">
                        <tbody>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 1</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Meningkatkan keimanan dan ketaqwaan sesuai dengan agama dan kepercayaanya masing-masing</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 2</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Meningkatkan disiplin seluruh warga sekolah (guru, karyawan , peserta didik) ditandai dengan terciptanya 7 K, 6 S, 5 M dengan kehadiran minimal 90%</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 3</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Meningkatkan pemahaman dan keterampilan seluruh warga sekolah terhadap 8 SNP dan implementasinya dalam proses pendidikan di sekolah</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 4</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Meningkatkan perolehan hasil belajar peserta didik dengan&nbsp; KKM mata pelajaran ≥ 75 maupun perolehan nilai Ujian Nasional ≥ 80.</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 5</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Meningkatkan mutu lulusan dan jumlah lulusan yang diterima di Perguruan Tinggi terakreditasi sehingga mencapai minimal 80 %</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 6</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Meningkatkan proses pembelajaran melalui permbelajaran berbasis IT</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 7</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Menambah sarana dan prasarana penunjang pendidikan</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                            <h6>Tujuan 8</h6>
                          </td>
                          <td width="31">
                            <h6>:</h6>
                          </td>
                          <td width="451">
                            <h6>Menciptakan budaya lingkungan yang nyaman untuk meningkatkan prestasi belajar yang lebih baik.</h6>
                          </td>
                        </tr>
                        <tr>
                          <td width="95">
                             <h6>Tujuan 9</h6>
                           </td>
                           <td width="31">
                             <h6>:</h6>
                           </td>
                           <td width="451">
                             <h6>Memberikan pelayanan akademis dan non akademis kepada siswa dengan potensi kecerdasan, minat dan bakat</h6>
                           </td>
                         </tr>
                         <tr>
                           <td width="95">
                             <h6>Tujuan 10</h6>
                           </td>
                           <td width="31">
                             <h6>:</h6>
                           </td>
                           <td width="451">
                             <h6>Peningkatan kerjasama dan kemitraan dengan SMP, PT, Dinas/Instansi terkait, dalam bentuk MoU</h6>
                           </td>
                         </tr>
                       </tbody>
                     </table>

                     <!-- Sticky Footer -->
                     <footer>
                       <div class="container my-auto">
                         <div class="copyright text-center my-auto">
                           <span>Copyright © SMA NEGERI RAMBIPUJI 2018</span>
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
