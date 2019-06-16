	<table border="1" class="tbody" style="cursor: pointer;">
		<tr>
			<th>Namabarang</th>
			<th>type</th>
			<th>jumlahstock</th>
			<th>harga</th>
			<th>kode</th>
		</tr>
			<?php 
			if(!isset($perintah)){
				$perintah = "SELECT * FROM tbbarang WHERE jumlah >=1";
			}
				$data = $conn->query($perintah);
			while($re = $data->fetch_array()){
				$kodebarang = $re[0];
				$namabarang = $re[1];
				$type = $re[2];
				$jumlah = $re[4];
				$hargajual = $re[6];
				$kode = $re[8];
		?>
		<tr>
			<td onclick="preitem(<?php echo "'$kodebarang','$namabarang','1','$hargajual','$kode','$hargajual'" ?>)"><?php echo $namabarang ?></td>
			<td onclick="preitem(<?php echo "'$kodebarang','$namabarang','1','$hargajual','$kode','$hargajual'" ?>)"><?php echo $type ?></td>
			<td onclick="preitem(<?php echo "'$kodebarang','$namabarang','1','$hargajual','$kode','$hargajual'" ?>)"><?php echo $jumlah ?></td>
			<td onclick="preitem(<?php echo "'$kodebarang','$namabarang','1','$hargajual','$kode','$hargajual'" ?>)"><?php echo $hargajual ?></td>
			<td onclick="preitem(<?php echo "'$kodebarang','$namabarang','1','$hargajual','$kode','$hargajual'" ?>)"><?php echo $kode ?></td>
		</tr>
		<?php 
				}
			?>
	</table>