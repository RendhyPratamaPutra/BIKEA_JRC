<?php 
	include 'admin/proses.php';

	$koneksi = mysqli_connect("localhost","root","","jrc");

			if (isset($_POST['update'])) {
			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];

		$result =mysqli_query($koneksi, "UPDATE mobil INNER JOIN harga ON mobil.id=harga.mobil SET nama='$nama', harga='$harga' WHERE mobil.id='$id'");
	}

		//edit harga
		$id = $_GET['id'];
		$result =mysqli_query($koneksi, "SELECT * FROM mobil INNER JOIN harga ON mobil.id=harga.mobil WHERE mobil.id='$id'");
		while($row = mysqli_fetch_array($result)) {
			$idmobil = $row['id'];
			$nama = $row['nama'];
			$harga = $row['harga'];
		}

		//tambah harga

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>harga mobil</title>
</head>
<body>
	<h1>Harga Mobil</h1>

	<form action="" method="post">
		<label for="mobil">Nama Mobil : </label>
		<input type="" name="nama" value=<?php echo $nama;?>>
		<br>
		<label for="kota">Harga : </label>
		<input type="text" name="harga" value=<?php echo $harga;?>>
		<br>
		<input type="hidden" value=<?php echo $_GET['id'] ; ?> name="id">
		<button name="update">Simpan</button>
	</form>
</body>
</html>