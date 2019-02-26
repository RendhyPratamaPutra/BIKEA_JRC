<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include 'admin/proses.php';
$do = new ClassMobil();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Jember Rent Car</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>



<body>
<!-- top-header -->
<div class="top-header navbar navbar-fixed-top">
	<div class="container">
		
		<?php
		session_start();
		if(empty($_SESSION['namamember'])){
		?>
		<script type="text/javascript">
		function validasi_input(form){
		if (form.username.value == "" && form.password.value== ""){
		alert("Username atau password masih kosong!");
		form.username.focus();
		return (false);
		}
		return (true);
		}
		</script>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Daftar</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Masuk</a></li>
        </ul>
        <?php
		}else{
		?>

<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Halo <?php echo"$_SESSION[nama]";?></a></li> 
			<li class="sigi"><a href="logout.php">/ Keluar</a></li>
        </ul>
		<?php
		}
		?>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Jember Rent <span>Car</span></a>	
		</div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">Aman &amp; Terpecaya<br></div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
						<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
						<!-- <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li> -->
				
					</ul>

					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="bus.php" class="buses active">Daftar Mobil</a></li>
        						<li><a href="wisata.php">Wisata</a></li>
							<li><a href="about.php">Tentang</a></li>
								<li><a href="privacy.php">Privasi</a></li>
								
								<li><a href="pakettour.php">Paket Tour </a></li>
								<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm -->

<!--- about -->
<div class="about">
	<div class="container">
		<div class="about-top wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
			<h2>Paket Tour</h2>
			  <div class="text-justify"><p>Paket Tour ini merupakan salah satu penyedia layanan paket wisata yang ada di indonesia. disini kami sudah menyediakan beberapa paket yang dijamin kualitas dan harga yang terjangkau dijamin tidak menguras kantong anda. kami menawarkan paket seperti : Paket wisata bali , Paket wisata jogja , Paket wisata banyuwangi dan Paket wisata bromo. </p><div>
			  	
        <div class="row">
         <div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
          	<article ><br>
            <div class="text-center">
             <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Paket Wisata Bromo</h3><br>
            <a href="Bromo.php" class="thumbnail">
              <img src="images/Bromo.png" style="width: 100%; height: 100%;"/></a> 
            </a>
          </div>
        </div>

        <div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s"> 
         	<article><br>
            <div class="text-center">
            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Paket Wisata Jogja</h3><br>
            <a href="jogja.php" class="thumbnail"> <img src="images/canbor.png" style="width: 100%; height: 100%;"/></a>
            </a>
          	</div>  
        </div>  	
         
        <div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">  
           	<article><br><br>
            <div class="text-center">
            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Paket Wisata Banyuwangi</h3><br> 
            <a href="banyuwangi.php" class="thumbnail">
              <img src="images/kawi.png" style="width: 100%; height: 100%;"/>
            </a>
         	 </div>  
        </div> 	 
            
          
        <div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
          <article><br><br>
            <div class="text-center">
           <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Paket Wisata Bali</h3><br>
            <a href="bali.php" class="thumbnail"><img src="images/bali.png" style="width: 100%; height: 100%;"/></a>
        </div>
           
          <article>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--- /about ---->
	



<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Kategori Mobil</h3>
				<ul>
				 <?php
					$row = $do->selectMerek();
					$no = 1;
					foreach ($row as $val) {

					echo "<li><a href='bus.php?id=$val[0]'>$val[1]</a></li>";
					$no++;
					}
					?>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Info JRC :</h3>

		<nav class="cl-effect-1">
      		<ul class="nospace inline pushright uppercase">
        	<li><a href="about.php">Tentang</a></li>
       	 	<li><a href="./portofolio/contact.php">Kontak</a></li>
        	<li><a href="privacy.php">Pribadi</a></li>
        	
     	 	</ul>
    	</nav>
					
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
		


	
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2018 . All Rights Reserved | Design by   <a href="http://w3layouts.com/" target="_blank">JRC</a> </p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-right">
												<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
													<h3>Buat akun Anda</h3>
													<input type="text" name="nama" placeholder="Masukan Nama lengkap anda">
													<input type="text" name="username" placeholder="Masukan Username anda">
													<input type="text" name="alamat" placeholder="Masukan Alamat anda">
													<input type="text" name="telepon" placeholder="Masukan Telepon anda">
													<input type="password" name="password" placeholder="Masukan Password anda">	
													<input type="text" name="noktp" placeholder="Masukan No KTP anda">	
													<input type="submit" name="daftar" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
										</div>
								</div>
							</section>
					</div>
				</div>
			</div>

<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
											<h3>Masuk Dengan Akun Anda</h3>
											<input type="text" name="username" placeholder="Masukan Username anda">
											<input type="password" name="password" placeholder="Masukan password anda">
											<input type="submit" value="SIGNIN" name="masuk">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
<!-- write us -->
<!-- //write us -->
</body>
</html>















			