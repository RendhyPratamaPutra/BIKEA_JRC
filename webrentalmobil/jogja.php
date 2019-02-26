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
<title>Rental mobil - Paket Tour</title>
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
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
			<!-- <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li> -->
				
		</ul>
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
			<a href="index.php">Rental <span>Mobil</span></a>	
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="bus.php" class="buses active">Daftar Mobil</a>
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
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="about.php">Tentang</a></li>
								<li><a href="privacy.php">Privasi</a></li>
								<li><a href="#">Syarat dan ketentuan </a></li>
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
<!--- /footer-btm ---->
<!--- banner-1 ---->
<div class="banner-1">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">  </h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- about ---->
<div class="about">
	<div class="container">
		<div class="about-top wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
			<h2>Paket Wisata Jogja </h2>
  <li>Tempat yang dikunjungi :</li>
<p> Hari 1
JOGJA AIRPORT – TRANSFER HOTEL
Setibanya di bandara International AJI SUCIPTO,selanjutnya diantar menuju hotel untuk cek in dan beristirahat</p>

<p> Hari 2
MUSIUM SANGIRAN , CANDI BOROBUDUR – CANDI PRAMBANAN, PASAR MALIOBORO , DIAMOND INTERNATIONAL RESTAURANT ( Makan SIANG)LEGIAN GARDEN(Makan Malam )
Breakfast di hotel. Berlibur dijogja kurang lengkap tanpa berkunjung ke musium sangiran dengan berbagai macam sejarah maupun peninggalan pada zaman dahulu disaa bisa berwisata sekaligus belajar. Liburan di jogja hemat dilanjutkan mengunjungi candi prambanan dan candi borobudur yang sangat indah dan eksotis. Perjalanan terakhir menuju Pasar Malioboro adalah sebuah pusat oleh - oleh yang sangat hemat bagi kantong bagi para wisatawan wajib datang kesini.Nikmati kepuasaan anda untuk berbelanja bersama orang-orang tercinta anda. Makan malam akan kami sajikan di legian garden yag tidak jauh dari pasar malioboro jika anda kurang puas berbelanja akan kami beri waktu untuk berbelanja setelah makan malam. Terakhir diantar ke hotel untuk beristirahat.</p>
<!-- ################################################################################################ -->
<p>Hari 3
Horison Grand Keisha HOTEL – TRANSFER AIRPORT ( Makan Pagi )
Breakfast di hotel
Selesai sudah kebersamaan anda bersama JRC Tour. Nikmati waktu bersantai di hotel sampai tiba saatnya dijemput oleh tour Guide kami untuk bertolak ke Airport.</p>
<!-- ################################################################################################ -->
            <p> Special Note :
     <li> *Harga paket berlaku Mulai Desember 2018
     <li> * Harga Paket untuk anak – anak ( 3 – 12 Tahun ) dengan menggunakan extra bed dikenakan sebesar 75% dari harga dewasa.
     <li> * Harga Paket untuk anak-anak ( 3 – 12 Tahun ) tanpa extra bed ( Bed Sharing dengan orang tua, Min 2 dewasa + 1 anak, mak. 2 dewasa + 2 anak ),dikenakan sebesar 45 % dari harga paket dewasa.
     <li> * Harga Paket untuk infant ( 1 – 2 Tahun ) tidak kenakan ( Free of Charge ).</p>
<!-- ################################################################################################ -->
<li>Harga Paket Sudah Termasuk:</li>

    <li> 1. Menginap selama 2 malam di hotel sesuai pilihan wisatawan.</li>
    <li> 2. Mobil private sesuai kapasitas seat dilengkapi AC</li>
    <li> 3. Entrance free ke obyek-obyek wisata</li>
    <li> 4. Makan sesuai program wisata</li>
    <li> 5. Jogja Tour guide</li>
    <li> 6. Welcome flower pada saat kedatangan</li>
    <li> 7. diberi air minum selama tour</li>
<!-- ################################################################################################ -->
<li>Harga Paket Belum Termasuk:</li>

    <li> 1. Tiket pesawat penerbangan</li>
    <li> 2. Personal expenses dan biaya di hotel seperti : pemakaian telephone, mini bar, laundry.
    <li> 3. Tipping untuk tour guide dan driver</li>


<p> Term dan Kondisi Paket Tour :

    <li> 1. Kondisi kamar untuk paket tour di hotel disesuaikan dengan jumlah peserta, 2 Orang ( satu kamar berdua/Twin share ), 3 Orang ( satu kamar bertiga/Triple share ). Harga paket tour untuk anak-anak dengan extra bed dikenakan sebesar 75 % dari harga dewasa dan anak tanpa menggunakan extra bed ( sharing dengan orang tua ) dikenakan sebesar 45 % dari harga paket dewasa.
    <li> 2.Kendaraan yang kami gunakan selama service tour adalah private disesuaikan dengan jumlah wisatawan.
    <li> 3. Apabila wisatawan mau membuat reservasi, diharapkan mengisi Reservation Form dan Final Confirmation Letter akan kami kirimkan setelah semua bookingan confirmed.
    Wisatawan bisa meminta Jogja Paket Tour dengan hotel lainnya sesuai keinginan diluar yang kami cantumkan dalam table harga dan travel consultant Jogja Tour akan memberikan perhitungan lebih lanjut.
    <li> 4. Harga Paket hanya berlaku untuk wisatawan domestic dan pemegang KITA’S/KIM´s. Setelah semua reservasi Confirmed, staff reservasi kami akan mengirimkan invoice beserta Final Confirmation dan 30 % deposit dibayarkan melalui bank transfer ke rekening yang tercantum dalam invoice sebagai Booking Guaratee dan bukti transfernya diemail ke info@bJRC.com atau fax ke +00 (123) 456 7890.
    <li> 5. Pelunasan invoice bisa dilakukan sebelum atau pada saat kedatangan di Bali.
    Apabila terjadi pembatalan sebelum waktu Deadline, kami akan mengembalikan deposit yang sudah dibayarkan kepada kami dan apabila pembatalan dilakukan 4 hari sebelum waktu kedatangan maka kami akan kenakan cancellation fee sesuai dengan besarnya charge dari hotel.</p>
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
					
				</ul>
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
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2017 Rental Mobil . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">MH3</a> </p>
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
												<form action="prosesdaftar.php" method="post">
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

			