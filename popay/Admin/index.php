<?php
        session_start();

    if (!isset($_SESSION["Login"]) ) {
        header("Location: login.php");
        exit;
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
      <title>Dashboard 2</title>

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
      <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

      <!-- Main CSS-->
      <link href="css/theme.css" rel="stylesheet" media="all">

  </head>

  <body class="animsition">
      <div class="page-wrapper">
          <!-- MENU SIDEBAR-->
          <aside class="menu-sidebar2">
              <div class="logo">
                  <a href="#">
                      <img src="images/icon/logo-white.png" alt="Admin" />
                  </a>
              </div>
              <div class="menu-sidebar2__content js-scrollbar1">
                  <div class="account2">
                      <div class="image img-cir img-120">
                          <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                      </div>
                      <h4 class="name">john doe</h4>
                      <a href="sign out.php">Sign out</a>
                  </div>
                  <nav class="navbar-sidebar2">
                      <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                          <a class="js-arrow" href="index.php">
                              <i class="fas fa-tachometer-alt"></i>HOME</a>

                          <li class="active has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-archive"></i>AKADEMIK
                                  <span class="arrow">
                                      <i class="fas fa-angle-down"></i>
                                  </span>
                              </a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="Input_Pengumuman.html" class="fas fa-edit">Input Pengumuman</a>
                                  </li>
                                  <li>
                                      <a href="Deposit_Siswa.html"class="fa fa-cc-mastercard">Deposit Siswa</a>
                                  </li>
                                  <li>
                                      <a href="Rekap_Siswa.html" class="fas fa-book"></i>Rekap</a>
                                  </li>
                                  <li>
                                      <a href="Input_Data.php" class="fas fa-edit"></i>Input Data Siswa</a>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="inbox.html">
                                  <i class="fas fa-comments"></i>Inbox</a>
                              <span class="inbox-num">3</span>
                          </li>
                          </ul>
                          </li>
                      </ul>
                  </nav>
              </div>
          </aside>
          <!-- END MENU SIDEBAR-->

          <!-- PAGE CONTAINER-->
          <div class="page-container2">
              <!-- HEADER DESKTOP-->
              <header class="header-desktop2">
                  <div class="section__content section__content--p30">
                      <div class="container-fluid">
                          <div class="header-wrap2">
                              <div class="logo d-block d-lg-none">
                                  <a href="#">
                                      <img src="images/icon/logo-white.png" alt="Admin" />
                                  </a>
                              </div>
                              <div class="header-button2">
                                  <div class="header-button-item js-item-menu">
                                      <i class="zmdi zmdi-search"></i>
                                      <div class="search-dropdown js-dropdown">
                                          <form action="">
                                              <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                              <span class="search-dropdown__icon">
                                                  <i class="zmdi zmdi-search"></i>
                                              </span>
                                          </form>
                                      </div>
                                  </div>

                                  </div>
                                  <div class="header-button-item mr-0 js-sidebar-btn">
                                      <i class="zmdi zmdi-menu"></i>
                                  </div>
                                  <div class="setting-menu js-right-sidebar d-none d-lg-block" show-sidebar" style="height: 170px;">
                                      <div class="account-dropdown__body">
                                          <div class="account-dropdown__item">
                                              <a href="#">
                                                  <i class="zmdi zmdi-account"></i>Account</a>
                                          </div>
                                          <div class="account-dropdown__item">
                                              <a href="#">
                                                  <i class="zmdi zmdi-settings"></i>Setting</a>
                                          </div>
                                          <div class="account-dropdown__item">
                                              <a href="#">
                                                  <i class="zmdi zmdi-globe"></i>Language</a>
                                          </div>
                                     </div>
                                  </div>

              </header>
              <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                  <div class="logo">
                      <a href="#">
                          <img src="images/icon/logo-white.png" alt="Admin" />
                      </a>
                  </div>
                  <div class="menu-sidebar2__content js-scrollbar2">
                      <div class="account2">
                          <div class="image img-cir img-120">
                              <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                          </div>
                          <h4 class="name">john doe</h4>
                          <a href="sign out.php">Sign out</a>
                      </div>
                      <nav class="navbar-sidebar2">
                          <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                              <a class="js-arrow" href="index2.html">
                                  <i class="fas fa-tachometer-alt"></i>HOME</a>

                              <li class="active has-sub">
                                  <a class="js-arrow" href="#">
                                      <i class="fas fa-archive"></i>AKADEMIK
                                      <span class="arrow">
                                          <i class="fas fa-angle-down"></i>
                                      </span>
                                  </a>
                                  <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="Input_Pengumuman.html" class="fas fa-edit">Input Pengumuman</a>
                                  </li>
                                  <li>
                                      <a href="Deposit_Siswa.html"class="fa fa-cc-mastercard">Deposit Siswa</a>
                                  </li>
                                  <li>
                                      <a href="Rekap_Siswa.html" class="fas fa-book"></i>Rekap</a>
                                  </li>
                                  <li>
                                      <a href="Input_Data.php" class="fas fa-edit"></i>Input Data Siswa</a>
                                  </li>
                              </ul>
                              </li>
                              <li>
                                  <a href="inbox.html">
                                      <i class="fas fa-comments"></i>Inbox</a>
                                  <span class="inbox-num">3</span>
                              </li>
                              </ul>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </aside>
              <!-- END HEADER DESKTOP-->
              <section>
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="copyright">
                                  <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- END PAGE CONTAINER-->
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
      <script src="vendor/vector-map/jquery.vmap.js"></script>
      <script src="vendor/vector-map/jquery.vmap.min.js"></script>
      <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
      <script src="vendor/vector-map/jquery.vmap.world.js"></script>

      <!-- Main JS-->
      <script src="js/main.js"></script>

  </body>


    </html>
    <!-- end document-->
