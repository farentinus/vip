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
			<td width="200px"><input type="text" id="namabarang"><img src="../gambar/search.png" onclick="caribarang()" style="width: 20px;height: 20px;cursor: pointer;"></td>
			
			<td>Type</td>
			<td>:</td>
			<td width="200px"><input type="text" id="type"></td>
			<td>Satuan</td>
			<td>:</td>
			<td><input type="text" id="satuan"></td>
		</tr>
		<tr>
			<td>jumlah</td>
			<td>:</td>
			<td><input type="text" id="jumlah" readonly="true"></td>

			<td>Harga beli</td>
			<td>:</td>
			<td><input type="text" id="hargabeli"></td>

			<td>Harga jual</td>
			<td>:</td>
			<td><input type="text" id="hargajual"></td>

			<input type="hidden" id="kode">
		</tr>
		<tr>
			<td>Harga Reseller</td>
			<td>:</td>
			<td><input type="text" id="hargaresell"></td>
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
				<input type="button" value="Edit" onclick="simpanbarang(this.value)">
				<input type="button" value="Hapus" onclick="simpanbarang(this.value)">
			</center>
		</div>
</body>
</html>