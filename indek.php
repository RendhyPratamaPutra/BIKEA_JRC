<html>
	<head>
		<title>CRUD dengan PHP</title>
		<style type="text/css">
		.labelfrm{
			display:blok;
			font-size: small;
			margin-top:5px; 
		}	
		.error{
			font-size: small;
			color:yellowg;
		}
		</style>
</head>
<body>
<table align="center">
	<h1>Data Mobil</h1>

	<form action="input.php" method="post" id="frm">
		<label for="no_plat" class="labelfrm">No_Plat :</label>
			<input type="text" name="no_plat" id="no_plat" maxlength="10" class="required" size="15"/>
		<label for="jenis_mobil" class="labelfrm">Jenis_Mobil :</label>
			<input type="text" name="jenis_mobil" id="jenis_mobil" size="30" class="required"/>
		<label for="warna" class="labelfrm">Warna :</label>
			<input type="text" name="warna" id="warna" size="30" class="required"/>
		<label for="tahun_keluaran" class="labelfrm">Tahun_Keluaran :</label>
			<input type="text" name="tahun_keluaran" id="tahun_keluaran" size="30" class="required"/>
		<label for="harga_sewa" class="labelfrm">Harga_Sewa :</label>
			<input type="text" name="harga_sewa" id="harga_sewa" size="30" class="required">
		<label for="status" class="labelfrm">Status :</label>
			<input type="text" name="status" id="status" size="20" class="required">
		<label for="submit" class="labelfrm">&nbsp< :</label>
			<input type="submit" name="input" value="Simpan" id="input"/>
			<input type="reset" name="clear" value="clear" id="clear"/>
	</form>
<br><br>
	<a href="data.php">Lihat Data</a>
</table>
</body>
</html>