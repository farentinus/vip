<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../../css/barang.css">
	<script src="../../../js/script.js"></script>
	<title></title>
</head>
<body>
	<?php
		include '../../../module/koneksi.php';
	?>
	<input type="hidden" id="idbarang">
	<table>
		<tr>
			<td>Nama barang</td>
			<td>:</td>
			<td width="200px"><input type="text" id="namabarang"><img src="../gambar/search.png" onclick="caribarang1()" style="width: 20px;height: 20px;cursor: pointer;"></td>
			
			<input type="hidden" id="type">
			
			<td>Satuan</td>
			<td>:</td>
			<td width="200px"><input type="text" id="satuan"></td>

			<td>jumlah</td>
			<td>:</td>
			<td><input type="text" id="jumlah" readonly="true"></td>
		</tr>
		<tr>
			<td>Harga beli</td>
			<td>:</td>
			<td><input type="text" id="hargabeli"></td>

			<td>Harga jual</td>
			<td>:</td>
			<td><input type="text" id="hargajual"></td>

			<td>Harga reseller</td>
			<td>:</td>
			<td><input type="text" id="hargaresell"></td>
		</tr>
		<tr>
			

			<td>Imei</td>
			<td>:</td>
			<td><input type="text" id="kode"></td>
		</tr>
	</table>
		<div class="table">
			<div id="tampilform">
				<?php include 'tampil.php' ?>
			</div>
		</div>
		<div class="footerbarang">
		<hr>
			<center>
				<input type="button" value="Edit" onclick="simpanbarang1(this.value)">
				<input type="button" value="Hapus" onclick="simpanbarang1(this.value)">
			</center>
		</div>
</body>
</html>