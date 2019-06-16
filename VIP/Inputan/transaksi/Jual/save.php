<?php 
	error_reporting(0);
	session_start();
	include '../../../module/koneksi.php';
	$iduser = $_SESSION['kodeuser'];
		$data = $conn->query("SELECT * FROM tbjual");
		$jual = mysqli_num_rows($data);
		$jul = $jual+1;
		$nojual = "B-"."$jul";
	$kodebarang = $_GET['kodebarang'];
	$namabar = $_GET['namabar'];
	$jumlah = $_GET['jumlah'];
	$harga = $_GET['harga'];
	$kode = $_GET['kode'];
	$total = $jumlah * $harga;
	$but = $_GET['but'];
	$notempjual = $_GET['notemp'];

		if($but=="Add"){
			$a = $conn->query("SELECT * FROM tempjual inner join tbbarang on tempjual.kodebarang = tbbarang.kodebarang where tempjual.kodebarang='$kodebarang'");
			$s = mysqli_num_rows($a);
			while($re = $a->fetch_array()){
					$notempjual = $re[0];
					$juml = $re['jlh'];
					$har = $re['hargajual'];
					$ju = $juml+$jumlah;
					$to = $ju*$har;
				}
			if($s=='1'){
				$conn->query("UPDATE tempjual set jlh='$ju', total='$to' where notempjual='$notempjual'");
			}else{
				$conn->query("INSERT INTO tempjual VALUES('','$nojual','$kodebarang','$jumlah','$harga','$total')");
			}
		}elseif($but=="Hapus"){
			$conn->query("delete from tempjual where notempjual = '$notempjual'");
		}
		include 'tampil.php';
?>