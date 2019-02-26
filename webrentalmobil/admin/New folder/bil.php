<?php 
	include '../admin/proses.php';

	$koneksi = mysqli_connect("localhost","root","","jrc");

			if (isset($_POST['update'])) {
	 	$merek = $_POST['merek'];
		$nama = $_POST['nama'];
		$tahun = $_POST['tahun'];
		$warna = $_POST['warna'];
		$kursi = $_POST['kursi'];
		$no_plat = $_POST['no_plat'];
	
		$result =mysqli_query($koneksi, "UPDATE mobil INNER JOIN kategori ON kategori.id=mobil.id SET merek='$merek', nama='$nama', tahun='$tahun', warna='$warna', kursi='$kursi', no_plat='$no_plat' WHERE kategori.id='$id'");
	}

		//edit harga
		$id = $_GET['id'];
		$result =mysqli_query($koneksi, "SELECT * FROM mobil INNER JOIN kategori ON kategori.id=mobil.id WHERE kategori.id='$id'");
		while($row = mysqli_fetch_array($result)) {
			$merek = $row['merek'];
			$nama = $row['nama'];
			$tahun = $row['tahun'];
			$warna = $row['warna'];
			$kursi = $row['kursi'];
			$no_plat = $row['no_plat'];
		}

		//tambah harga

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah data mobil</title>
</head>
<body>
	<h1>Ubah Data Mobil</h1>

	<form action="" method="post">
		<label for="mobil">Nama Mobil : </label>
		<input type="" name="nama" value=<?php echo $nama;?>>
		<br>
		<label for="warna">Warna : </label>
		<input type="text" name="warna" value=<?php echo $warna;?>>
		<br>
		<label for="tahun">Tahun : </label>
		<input type="text" name="tahun" value=<?php echo $tahun;?>>
		<br>
		<label for="kursi">Kursi : </label>
		<input type="" name="kursi" value=<?php echo $kursi;?>>
		<br>
		<label for="no_plat">No Plat : </label>
		<input type="text" name="no_plat" value=<?php echo $no_plat;?>>
		<br>
		<input type="hidden" value=<?php echo $_GET['id'] ; ?> name="id">
		<button name="update">Simpan</button>
	</form>
</body>
</html>