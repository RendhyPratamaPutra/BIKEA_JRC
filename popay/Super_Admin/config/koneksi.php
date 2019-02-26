<?php
	//$koneksi = mysqli_connect("localhost","root","","db_d") or die ("Koneksi gagal");

 	$host = "localhost";
	$userhost = "popay";
	$passhost = "12345";
	$db = "popay";

	$koneksi = mysqli_connect($host,$userhost,$passhost,$db) or die ("Koneksi gagal");

function aksesadmin($data){
		global $koneksi;
 
		$user = strtolower(stripslashes($data["nip"]));
		$nama = mysqli_real_escape_string($koneksi,$data["nama_admin"]);
		$status = mysqli_real_escape_string($koneksi,$data["kd_grup"]);

mysqli_query($koneksi,"UPDATE pegawai SET nama_admin = '$nama', kd_grup = '$status' WHERE nip = $user");
	
	return mysqli_affected_rows($koneksi);
}


function aksessiswa($data){
		global $koneksi;
 
		$user = strtolower(stripslashes($data["nis"]));
		$nama = mysqli_real_escape_string($koneksi,$data["nama_siswa"]);
		$status = mysqli_real_escape_string($koneksi,$data["kd_status"]);

mysqli_query($koneksi,"UPDATE siswa SET nama_siswa = '$nama', kd_status = '$status' WHERE nis = $user");
	
	return mysqli_affected_rows($koneksi);
}


function ubahadmin($data){
	global $koneksi;

	$user = strtolower(stripslashes($data["nip"]));
	$status = mysqli_real_escape_string($koneksi, $data["statuspassword"]);
	$nama = mysqli_real_escape_string($koneksi, $data["nama_admin"]);
	$tempat = mysqli_real_escape_string($koneksi, $data["tempat_lahir"]);
	$tanggal = mysqli_real_escape_string($koneksi, $data["tanggal_lahir"]);
	$alamat = mysqli_real_escape_string($koneksi, $data["alamat"]);
	$jenis = mysqli_real_escape_string($koneksi, $data["jenis_kelamin"]);

	$pass = password_hash($pass, PASSWORD_DEFAULT );

	mysqli_query($koneksi,"UPDATE pegawai SET nama_admin = '$nama', statuspassword = '$status', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal',alamat = '$alamat',jenis_kelamin = '$jenis' WHERE nip = '$user' ");

		return mysqli_affected_rows($koneksi);
	
}

function ubahsiswa($data){
	global $koneksi;

	$user = strtolower(stripslashes($data["nis"]));
	$status = mysqli_real_escape_string($koneksi, $data["statuspassword"]);
	$nama = mysqli_real_escape_string($koneksi, $data["nama_siswa"]);
	$tempat = mysqli_real_escape_string($koneksi, $data["tempat_lahir"]);
	$tanggal = mysqli_real_escape_string($koneksi, $data["tanggal_lahir"]);
	$alamat = mysqli_real_escape_string($koneksi, $data["alamat"]);
	$jenis = mysqli_real_escape_string($koneksi, $data["jenis_kelamin"]);
	$ayah = mysqli_real_escape_string($koneksi, $data["nama_ayah"]);
	$ibu = mysqli_real_escape_string($koneksi, $data["nama_ibu"]);

//	$pass = password_hash($pass, PASSWORD_DEFAULT );

	mysqli_query($koneksi,"UPDATE siswa SET nama_siswa = '$nama', statuspassword = '$status', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal'
	,alamat = '$alamat',jenis_kelamin = '$jenis', nama_ayah = '$ayah', nama_ibu ='$ibu' WHERE nis = '$user' ");

		return mysqli_affected_rows($koneksi);
}


	function register($data){
		global $koneksi;

	$user = strtolower(stripslashes($data["nip"]));
	$pass = mysqli_real_escape_string($koneksi, $data["password"]);
	$nama = mysqli_real_escape_string($koneksi, $data["nama_admin"]);
	$tempat = mysqli_real_escape_string($koneksi, $data["tempat_lahir"]);
	$tanggal = mysqli_real_escape_string($koneksi, $data["tanggal_lahir"]);
	$alamat = mysqli_real_escape_string($koneksi, $data["alamat"]);
	$jenis = mysqli_real_escape_string($koneksi, $data["jenis_kelamin"]);
	$status = mysqli_real_escape_string($koneksi, $data["kd_grup"]);
	
	//cek user
	$result = mysqli_query($koneksi, "SELECT nip FROM pegawai WHERE nip = '$user'");

	if (mysqli_fetch_assoc($result)){
		echo "<script>
		alert('Username Sudah ada ');  </script>";
		return false;
	}

		//ekripsi pass
		$pass = password_hash($pass, PASSWORD_DEFAULT);

		//tambah user ke database
		mysqli_query($koneksi,"INSERT INTO pegawai(nip,nama_admin,password,tempat_lahir,tanggal_lahir,alamat,jenis_kelamin,kd_grup) VALUES ('$user','$nama','$','$tempat','$tanggal','$alamat','$jenis','$status')");

		return mysqli_affected_rows($koneksi);
	}

?>