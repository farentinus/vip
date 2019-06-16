<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/barang.css">
	<script src="../../js/jquery/jquery.js"></script>
	<script src="../../js/script.js"></script>
	<script>
		$(document).ready(function(){
   			 $("#show").click(function(){
       		 $(".hide").toggle();
    });
   	});
	</script>
	<title></title>
</head>
<body>
	<?php
		include '../../module/koneksi.php';
	?>
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td width="300px"><input type="text" id="username"><input type="hidden" id='iduser'></td>

			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" id="alamat"></td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td><input type="password" id="password"></td>

			<td>Telp</td>
			<td>:</td>
			<td><input type="text" id="telp"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td><select id="status">
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select></td>
		</tr>
	</table>
		<div class="table">
			<div id="tampilform">
					<?php include 'tampil.php'; ?>
			</div>
		</div>
		<div class="footersetting">
		<hr>
			<center>
				<input type="button" value="Simpan" onclick="simpansetting(this.value)">
				<input type="button" value="Edit" onclick="simpansetting(this.value)">
				<input type="button" value="Hapus" onclick="simpansetting(this.value)">
			</center>
		</div>
</body>
</html>