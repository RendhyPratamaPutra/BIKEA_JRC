<?php
 	
  $dbname = $_POST['dbname'];
  $filename = $_FILES['filename']['name'];
  $tanggal = date("Y-m-d H:i:s");


  $dump_path = "";
  $host = "localhost";
  $user = "root";
  $pass = "";
  $koneksi = mysqli_connect($host,$user,$pass);

  $query = "CREATE DATABASE IF NOT EXISTS $dbname";
  $result = mysqli_query($koneksi,$query);
 // mysqli_query($koneksi, "CREATE DATABASE IF NOT EXISTS $dbname");

  $command = $dump_path.'mysql -h '.$host.' -u '.$user.' '.$dbname.' < '.$filename;
  system($command);

  //mysqli_query($koneksi, "INSERT INTO datarestore VALUES ('','$filename','$dump_path','$tanggal')");

//  header('location: ../backupandrestore.php');
?>