<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<script type="text/javascript">
		function asd(){
			window.print();
		}
	</script>
<body>
<table border="1" width="100%;" class="tablebarang">
		<tr>
			<th>Nama barang</th>
			<th>type</th>
			<th>satuan</th>
			<th>Jumlah</th>
			<th>Harga beli</th>
			<th>Harga jual</th>
			<th>kode</th>
		</tr>
			<?php
			include "../module/koneksi.php";
			if(!isset($perintah)){
				$perintah = "SELECT * FROM tbbarang";
			}
				$datail = $conn->query($perintah);
				$row = mysqli_num_rows($datail);
				$page = ceil($row/8);
				$currentpage = 1;
				if (isset($_GET['currentpage'])) {
					$currentpage = $_GET['currentpage'];
					if ($currentpage >= $page) {
						$currentpage = $page;
					}
				}
				$prev = $currentpage - 1;
				$next = $currentpage + 1;
				$currentrow = (8 * $currentpage) - 8;
				$perintah = $perintah." LIMIT $currentrow,8";
				$datail = $conn->query($perintah);
				while ($re = $datail->fetch_array()) {
					$idbarang = $re[0];
					$namabarang = $re[1];
					$type = $re[2];
					$satuan = $re[3];
					$jumlah = $re[4];
					$hargabeli = $re[5];
					$hargajual = $re[6];
					$kode = $re[7];
			?>
<tr>
	<td onclick="tampildatabarang(<?php echo "'$idbarang','$namabarang','$type','$satuan','$jumlah','$hargabeli','$hargajual','$kode'" ?>)"><?php echo $namabarang ?></td>
	<td onclick="tampildatabarang(<?php echo "'$idbarang','$namabarang','$type','$satuan','$jumlah','$hargabeli','$hargajual','$kode'" ?>)"><?php echo $type ?></td>
	<td onclick="tampildatabarang(<?php echo "'$idbarang','$namabarang','$type','$satuan','$jumlah','$hargabeli','$hargajual','$kode'" ?>)"><?php echo $satuan ?></td>
	<td onclick="tampildatabarang(<?php echo "'$idbarang','$namabarang','$type','$satuan','$jumlah','$hargabeli','$hargajual','$kode'" ?>)"><?php echo $jumlah ?></td>
	<td onclick="tampildatabarang(<?php echo "'$idbarang','$namabarang','$type','$satuan','$jumlah','$hargabeli','$hargajual','$kode'" ?>)"><?php echo $hargabeli ?></td>
	<td onclick="tampildatabarang(<?php echo "'$idbarang','$namabarang','$type','$satuan','$jumlah','$hargabeli','$hargajual','$kode'" ?>)"><?php echo $hargajual ?></td>
	<td onclick="tampildatabarang(<?php echo "'$idbarang','$namabarang','$type','$satuan','$jumlah','$hargabeli','$hargajual','$kode'" ?>)"><?php echo $kode ?></td>
		</tr>
			<?php
				}
			?>
	</table>
</div>
	<div class="footerlimit">
		<input type="button" value="Prev" onclick="limit(<?php echo $prev ?>)" id="pre">
		<select onchange="limit(this.value)">
			<?php
				for ($i=1; $i <= $page; $i++) {
					if ($i != $currentpage) {
					 	echo "<option value='$i'>$i</option>";
					 } else{
					 	echo "<option value='$i' selected>$i</option>";
					 }
				}
			?>
		</select>
		<input type="button" value="Next" onclick="limit(<?php echo $next ?>)" id="nex">
	</div>
	<input type="button" id="asd" value="print" onclick="asd()">
</body>
</html>