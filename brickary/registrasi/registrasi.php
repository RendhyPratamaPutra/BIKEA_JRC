<?php 

require 'function.php';

/*----------------*/

if (isset($_POST["register"])) {
	
	if (registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else{
		echo myscli_error($conn);
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>halaman registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

	<h1>halaman registrasi</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nama">nama lengkap :</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="alamat">alamat :</label>
				<input type="text" name="alamat" id="alamat">
			</li>
			<li>
				<label for="telepon">telepon :</label>
				<input type="text" name="telepon" id="telepon">
			</li>
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="noktp">no ktp :</label>
				<input type="text" name="noktp" id="noktp">
			</li>
			<li>
				<button type="submit" name="register">register</button>
			</li>
		</ul>

	</form>

</body>
</html>