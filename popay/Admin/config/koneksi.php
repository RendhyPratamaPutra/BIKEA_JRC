<?php
	//$koneksi = mysqli_connect("localhost","root","","db_d") or die ("Koneksi gagal");

 	$host = "localhost";
	$userhost = "root";
	$passhost = "";
	$db = "popay";

	$koneksi = mysqli_connect($host,$userhost,$passhost,$db) or die ("Koneksi gagal");


	function denda($data){
		global $koneksi;

	$kode = mysqli_real_escape_string($koneksi, $data["kd_denda"]);
	$keterangan = mysqli_real_escape_string($koneksi, $data["ket_denda"]);
	$beban = mysqli_real_escape_string($koneksi, $data["beban_denda"]);

	//cek user
	mysqli_query($koneksi, "INSERT INTO denda (ket_denda,beban_denda) VALUES ('$keterangan','$beban')");
  return mysqli_affected_rows($koneksi);
}

function update($data){
  global $koneksi;

 $kode = mysqli_real_escape_string($koneksi, $data["kd_denda"]);
  $keterangan = mysqli_real_escape_string($koneksi, $data["ket_denda"]);
  $beban = mysqli_real_escape_string($koneksi, $data["beban_denda"]);

  // cek user
  mysqli_query($koneksi, "UPDATE denda set ket_denda = '$keterangan', beban_denda = '$beban' where kd_denda = '$kode'" );
  return mysqli_affected_rows($koneksi);
}

//function perjalanan($data){
//  global $koneksi;

  //$kodeper = mysqli_real_escape_string($koneksi, $data["kd_perjalanan"]);
  //$destin = mysqli_real_escape_string($koneksi, $data["destinasi"])

  // cek user
  //mysqli_query1($koneksi, "INSERT INTO perjalanan (kd_perjalanan,destinasi) VALUES ('$kodeper','$destin')");
  //return mysqli_affected_rows($koneksi);
//}

	?>
