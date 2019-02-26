<?php 
include 'proses.php';
$do = new ClassMobil();

$koneksi = mysqli_connect("localhost","root","","jrc");

	//buat query combobox mobil
	$combomobil = mysqli_query($koneksi, "SELECT * FROM mobil");

	//buat query kota
	$combokota = mysqli_query($koneksi, "SELECT kota_asal, kota_tujuan FROM kota");

	if (isset($_POST['tambahHarga'])) {

		$idmobil = $_POST['mobil'];
		$kota = $_POST['kota'];
		$idmobilpecah = explode('-', $idmobil);
		$id_mobil = $idmobilpecah[0];
		$kotapecah = explode('-', $kota);
		$kota_asal = $kotapecah[0];
		$kota_tujuan = end($kotapecah);
		$harga = $_POST['harga'];

		//query manggil id kota
		$reidkota = mysqli_query($koneksi, "SELECT id FROM kota WHERE kota_asal = '$kota_asal' AND kota_tujuan = '$kota_tujuan';");
		$idkota = mysqli_fetch_array($reidkota);

		// $id_mobil = $idmobil['id'];
		$id_kota = $idkota['id'];

		$insert = mysqli_query($koneksi, "INSERT INTO harga VALUES (NULL, '$id_mobil', '$id_kota', '$harga')");
	}
	

 ?>
  <style type="text/css">
	#container{
		padding: 10px;
	}
	h2{
		background-color: #eaeaea;
		padding: 10px;
	}
	.submit{
		margin-top: 10px;
		background-color: #eaeaea;
		padding: 5px;
		margin-bottom: 20px;
	}

</style>
 <div id="container">
		<div id="mobil">
		<form method="post">
		<h2>HARGA MOBIL</h2>
			 <table>
			 	<tr><td width="100">Mobil</td>
				<td width="20">:</td>
						<td>
							<select name="mobil">
								<?php while ($mobil = mysqli_fetch_array($combomobil)): ?>
									<option><?= $mobil['id']."-".$mobil['nama'] ?></option>
								<?php endwhile; ?>
							</select>
						</td></tr>
				<tr><td width="100">Kota</td>
				<td width="20">:</td>
						<td>
							<select name="kota">
								<?php while ($kota = mysqli_fetch_array($combokota)): ?>
									<option><?= $kota['kota_asal']."-".$kota['kota_tujuan'] ?></option>
								<?php endwhile; ?>
							</select>
						</td></tr>
				<tr><td width="100">Harga</td><td width="20">:</td><td><input type="text" class="input" size="50" name="harga" /> </td></tr>
				<tr><td width="100"></td><td width="20"></td><td><input type="submit" class="submit" value="Tambah Harga" name="tambahHarga" /> 
				<input type="reset" class="submit" value="reset"/></td></tr>
			 </table>
		</form>
 <div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="hidden-480">No</th>
													<th>Nama Mobil</th>
	
													<th>Harga</th>
													<th>Pengaturan</th>
												</tr>
											</thead>
											<tbody>
											<?php 
											$no = 1;
											foreach ($do->selectHarga() as $value) {
											$m = $do->selectOneMobil($value[1]);
											$n = $do->selectOneKota($value[2]);
												echo "<tr>
												<td class='hidden-480'>$no
														
													</td> 
													<td>
														$m[nama]
													</td>
													
													<td>$value[3]</td>
													<td>
														<div class='hidden-sm hidden-xs btn-group'>
															<a href='../test.php?id=$value[1]'>
															<button class='btn btn-xs btn-danger' name='edit'>
																<i class='ace-icon fa fa-edit bigger-120'></i>
															</button>
															<a href='prosestambahhapus.php?hapusHarga=$value[0]'>
															<button class='btn btn-xs btn-danger' name='hapus'>
																<i class='ace-icon fa fa-trash-o bigger-120'></i>
															</button>
															</a>
														</div>

														<div class='hidden-md hidden-lg'>
															<div class='inline pos-rel'>

																<ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>

																	<li>
																		<a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
																			<span class='red'>
																				<i class='ace-icon fa fa-trash-o bigger-120'></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
													</tr>";
													$no++;
											}

											?>
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->