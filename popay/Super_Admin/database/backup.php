<?php
	
	$dbname = $_POST['dbname'];
	$filename = $_POST['filename'];
	
	$dump_path = "";
	$host = "localhost";
	$user = "root";
	$pass = "";

	$command = $dump_path.'mysqldump -h '.$host.' -u '.$user.' '.$dbname.' > '.$filename.'.sql';
	system($command);

	//mysqli_query($koneksi, "INSERT INTO databackup VALUES ('','$filename','$dump_path','$tanggal')");

	header('location: ../backup.php');
?>