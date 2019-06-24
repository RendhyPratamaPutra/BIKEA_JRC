<?php
	//$koneksi = mysqli_connect("localhost","root","","db_d") or die ("Koneksi gagal");

 	$host = "localhost";
	$userhost = "root";
	$passhost = "";
	$db = "popay";

	$koneksi = mysqli_connect($host,$userhost,$passhost,$db) or die ("Koneksi gagal");

 function ubahpass($data){
		global $koneksi;
 
		//$user = strtolower(stripslashes($data["Id_Siswa"]));
		$pass = mysqli_real_escape_string($koneksi,$data["Password"]);
		$pass2 = mysqli_real_escape_string($koneksi,$data["Password2"]);
		$oldpass = mysqli_real_escape_string($koneksi,  $data["Password_Lama"]);


		//cek user
//	$result = mysqli_query($koneksi, "SELECT Id_Admin from admin where Id_Siswa = '$user'");

		//cek confirm pass
	if ( $pass !== $pass2) {
	echo "<script>
				alert('Konfirmasi Tidak Sesuai');
			</script>";
		return false;
	}

	if ( $oldpass == $pass){
		echo "<script> alert ('Password Sudah Dipakai Sebelumnya'); </script>";
		return false;
	}

	$pass = password_hash($pass, PASSWORD_DEFAULT );
	mysqli_query($koneksi,"UPDATE siswa SET Password = '$pass' WHERE Id_Siswa='" . $_SESSION['siswa'] . "'");
	
	return mysqli_affected_rows($koneksi);
}

function no_exists($no,$koneksi){
	$row=mysqli_query($koneksi,"SELECT Id_Siswa from siswa where No_HP= '$no'");
{
	if(mysqli_num_row($row)==1){
		return true;
	}else{
		return false;
	}}
}

