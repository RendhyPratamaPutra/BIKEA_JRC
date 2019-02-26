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
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">   </h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- about ---->
<div class="about">
	<div class="container">
		<div class="about-top wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
			<h2>Paket Wisata Malang Batu Bromo 3 Hari 2 Malam</h2>
   <p>Libur panjang ke Malang ? pilih paket wisata malang batu bromo 3 hari 2 malam dijamin liburan kalian menyenangkan dan lengkap pilihan tempat wisatanya. Libur panjang sudah tiba, saatnya untuk liburan bersama keluarga atau kerabat. Bingung mau kemana ? ke Malang saja, Kenapa ? karena Malang adalah surganya wisata di Indonesia. Dengan berbagai pilihan tujuan tempat wisata yang ada di Malang, kalian bebas pilih mau kemana saja selama waktu libur tersebut, Tidak tau mau kemana saja saat di Malang ? tenang dengan paket wisata malang bromo ini kalian tidak perlu bingung untuk memilih tujuan wisata saat ada di Malang, semua sudah lengkap dalam satu paket wisata malang batu bromo 3h 2m ini, mulai dari Batu Secret Zoo, Omah Kayu, Paralayang, Bromo dan masih banyak lagi tempat wisata Malang yang ada di paket ini. Mau tau apa saja ? Simak artikel paket wisata malang bromo 3d 2n dari JRC Tour dibawah ini.</p>
             
     <li>Tujuan Paket Wisata Malang Batu Bromo 3 Hari 2 Malam : </li>
     <li> 1. Coban Rondo & Taman Labirin, Batu</li>
     <li> 2. Museum Angkut, Batu</li>
     <li> 3. Batu Night Spectaculer, Batu</li>
     <li> 4. Sunrise View Point (Bukit Cinta)</li>
     <li> 5. Padang Savana, Bromo </li>
     <li> 6. Bukit Teletubbies, Bromo </li>
     <li> 7. Kawah, Bromo </li>
     <li> 8. Pasir Berbisik, Bromo </li>
     <li> 9. Jatim Park III, Batu </li>
     <li> 10. Petik Apel, Batu </li>
  <p>Perjalanan (Itinerary) Paket Wisata Malang Batu Bromo 3 Hari 2 Malam :</p>
    <p> Jadwal paket wisata malang batu bromo 3D 2N ini adalah jadwal standard tour yang sistemnya fleksibel dan tidak mengikat, dan bisa di custom lagi sesuai kebutuhan. Silahkan konsultasikan perjalanan wisata kalian dengan CS kami, GRATIS! </p>
<p> Hari Ke-1 </p>

    <li> 08.00 – 08.30 : Penjemputan (Hotel/Bandara/Stasiun di Malang, Batu, Surabaya).</li>
    <li> 08.30 – 09.00 : Perjalanan ke Rumah Makan.</li>
    <li> 09.00 – 10.00 : Makan Pagi.</li>
    <li> 10.00 – 10.30 : Perjalanan ke Coban Rondo.</li>
    <li> 10.30 – 12.00 : Wisata Coban Rondo dan Taman Labirin.</li>
    <li> 12.00 – 12.30 : Perjalanan ke Jatim Park III dan Dino Park.</li>
    <li> 12.30 – 16.30 : Wisata Jatim Park III dan Dino Park.</li>
    <li> 16.30 – 17.00 : Perjalanan ke Rumah Makan.</li>
    <li> 17.00 – 18.00 : Makan Malam.</li>
    <li> 18.00 – 18.15 : Perjalanan ke Hotel.</li>
    <li> 18.15 – 19.00 : Check In Hotel.</li>
    <li> 19.15 – Selesai : Finish hari pertama (Istirahat Untuk Penjemputan Jam 23.00).</li>
<p>Hari Ke-2 </p>

    <li> 23.30 – 00.00 : Penjemputan di Hotel.</li>
    <li> 00.00 – 03.00 : Perjalanan ke Transit Point untuk Over Jeep.</li>
    <li> 03.00 – 04.00 : Perjalanan ke Bukit Penanjakan (Bukit Cinta & Bukit Kingkong *Opsional).</li>
    <li> 04.00 – 06.00 : Bukit Penanjakan Gunung Bromo (Menikmati Indahnya Sunrise).</li>
    <li> 06.00 – 08.00 : Padang Savana (Bukit Teletubbies) dan Pasir Berbisik.</li>
    <li> 08.00 – 10.00 : Kawah Bromo dan Pura Luhur Poten.</li>
    <li> 10.00 – 10.30 : Perjalanan kembali ke Transit Point.</li>
    <li> 10.30 - 11.30 : Makan Siang 
    <li> 11.30 – 16.00 : Perjalanan ke Museum Angkut.
    <li> 16.00 – 19.00 : Wisata Museum Angkut.
    <li> 19.00 – 19.15 : Perjalanan ke Rumah Makan.
    <li> 19.15 – 20.00 : Makan Malam.
    <li> 20.00 – 20.15 : Perjalanan ke BNS.
    <li> 20.15 – 21.30 : Wisata BNS.
    <li> 21.30 – 22.00 : Perjalanan ke Hotel.
    <li> 22.00 – Selesai : Finish hari kedua.
<!-- ################################################################################################ -->
<p>Hari Ke-3 </p>

    <li> 07.00 – 08.00 : Breakfast dan Check Out Hotel.
    <li> 08.00 – 09.00 : Perjalanan ke Petik Apel
    <li> 09.00 – 10.00 : Wisata Petik Apel.
    <li> 10.00 – 10.30 : Perjalanan ke Tempat Oleh-Oleh.
    <li> 10.30 – 11.30 : Cari Oleh Oleh.
    <li> 11.30 – 12.00 : Perjalanan ke Rumah Makan.
    <li> 12.00 – 13.30 : Makan Siang.
    <li> 13.00 – 14.00 : Perjalanan ke Bandara/Stasiun Malang.
    <li> 14.00 : Drop Off (Finish).
<!-- ################################################################################################ -->
<p>Harga Paket Wisata Malang Batu Bromo 3 Hari 2 Malam </p>
                           <style type="text/css">
                             td {
                              padding: 10px;
                             }
                             table,th,td {
                              border-collapse: collapse;
                              width: 30%;
                             }
                             th {
                              background: #47B0E7
                              padding : 10px;
                              color: #fff;
                             }
                           </style>
                           <head>
                             <center><font face="impact" size="6"></font></center>
                           </head>
                           <body>
                            <table border="1px" width="80%">
                              <tr>
                                <th> Harga</th>
                                <th width="70">Jumlah</th>
                              </tr>
                            </tr>
                              <tr>
                               <td>Rp. 1.450.000/orang</td>
                               <td> >30 orang</td>
                             </tr>
                             <tr>
                              <td>Rp. 1.475.000/orang </td>
                               <td>>15 orang</td>
                             </tr>
                             <tr>
                              <td>Rp. 1.550.000/orang</td>
                               <td> >10 orang</td>
                             </tr>
                             <tr>
                              <td>Rp. 1.775.000/orang</td>
                               <td>5 orang</td>
                             </tr>
                             <tr>
                              <td>Rp. 1.875.000/orang </td>
                               <td>4 orang</td>
                             </tr>
                             <tr>
                              <td>Rp. 2.175.000/orang</td>
                               <td>3 orang</td>
                             </tr>
                             <tr>
                              <td>Rp. 2.650.000/orang</td>
                               <td>2 orang</td>
                             </tr>
                             <tr>
                             </table>
<li> * Harga tidak berlaku untuk High Season & Hari Besar Lainya.
<li> * Untuk WNA ada biaya tambahan Rp. 300.000/orang.
<li> * Lebih dari > 5 orang Konsultasikan dengan kami untuk mendapatkan harga terbaik.


<p> Biaya tersebut sudah termasuk :</p>

    <li> * Transportasi.
    <li> * Driver Profesional yang sopan dan ramah.
    <li> * BBM.
    <li> * Jeep/Hardtop.
    <li> * Hotel *3 (Whiz Prime/El Hotel/Grand Palace). Untuk pilihan hotel lain silahkan hubungi CS kami.
    <li> * Tiket Masuk Semua Lokasi (Gate Utama).
    <li> * Parkir Semua Lokasi.
    <li> * Snack Box.
    <li> * Spesial Gift (Kupluk & Sarung Tangan Bromo).
    <li> * Fee Driver.
    <li> * P3K.
    <li> * Asuransi.
    <li> * Masker.
 
 <p> Biaya tersebut belum termasuk : </p>

    <li> * Kebutuhan Pribadi.
    <li> * Makan.
    <li> * Sewa Kuda di Bromo.

<p> Informasi yang harus tau

    <li> * Siapkan dan Gunakan pakaian yang Nyaman.
    <li> *  Bawa Baju/Jaket hangat.
    <li> * Siapkan juga Kaos kaki, kaos tangan dan penutup kepala.
    <li> * Selalu siapkan obat – obatan pribadi.
    <li> * Jangan lupa Kamera dan Power Bank.
    <li> * Rawat lingkungan sekitar dengan membuang sampah di tempatnya.
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
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2018 Rental Mobil . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">JRC</a> </p>
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

			