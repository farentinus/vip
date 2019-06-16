<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.text{
		width: 170px;
	}
</style>
<link rel="stylesheet" type="text/css" href="/vip/css/barang.css">
<script src="../../js/jquery/jquery.js"></script>
<script src="../../js/jquery/jquery-ui.js"></script>
<link rel="stylesheet" href="../../js/jquery/jquery-ui.css">
<script src="/vip/js/script.js"></script>
<script type="text/javascript">
$(function(){
 $( ".coding_language" ).autocomplete({
  source: 'autocomplet.php'
 });
});
</script>
<style type="text/css">
	.tbody { height:300px; overflow-y:scroll; display:block; height: 400px;}
	.thead { display:block; }
	body{
		background-color: #f2f2f2;
	}
</style>
<body>
		<?php 
				$data = $conn->query("SELECT * FROM tbbarang");
				while ($re = $data->fetch_array()) {
				$namabarang = $re[1];
				$harga = $re[6];
				}
		?>
	<table>
		<tr>
			<td>Namabarang</td>
			<td>:</td>
			<input type="hidden" id="kodebarang">
			<td><input type="text" id="namabar"><img src="/vip/gambar/search.png" style="width:20px;height:20px;cursor:pointer;" onclick="caribarangtrans()"></td>
		</tr>

		<tr>
			<td>Jumlah</td>
			<td>:</td>
			<td><input type="text" class="text" id="jumlah" onkeyup="total()"></td>
		</tr>

		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="text" class="text" id="harga" onkeyup="total()"></td>
		</tr>

		<tr>
			<td>Kode</td>
			<td>:</td>
			<td><input type="text" class="text" id="kode"></td>
		</tr>

		<tr>
			<td>Total</td>
			<td>:</td>
			<td><input type="text" class="text" id="total" ></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="button" id="but" value="Add" onclick="inputitem(this.value)"></td>
		</tr>
	</table>
	<div id="tampilformbar">
		<?php include 'tampilbar.php' ?>
	</div>
</body>
</html>