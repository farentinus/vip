<?php 
	error_reporting(0);
	session_start();
	include '../../../module/koneksi.php';
	$idbarang = $_GET['idbarang'];
	$namabarang = $_GET['namabarang'];
	$jumlah = $_GET['jumlah'];
	$hargabeli = $_GET['hargabeli'];
	$type = $_GET['type'];
	$satuan = $_GET['satuan'];
	$kode = $_GET['kode'];
	$hargajual = $_GET['hargajual'];
	$hargaresell = $_GET['hargaresell'];
	$tanggal = date('Y-m-d');
	$but = $_GET['but'];
	$iduser = $_SESSION['kodeuser'];
		$data = $conn->query("SELECT * FROM tbbeli");
		$beli = mysqli_num_rows($data);
		$bli = $beli+1;
	$idbeli = "B"."$bli";
	$total = $jumlah*$hargabeli;
	if($but=="Hapus"){
		$conn->query("DELETE FROM tbbarang where kodebarang='$idbarang'");
	}else if($but=="Edit"){
		$conn->query("UPDATE tbbarang SET hargajual='$hargajual',nama='$namabarang',type='$type',satuan='$satuan',hargabeli='$hargabeli',kode='$kode',hargareseller='$hargaresell' where kodebarang='$idbarang'");
	}else{
		$perintah = "SELECT * FROM tbbarang where nama like '%$namabarang%' AND type='hp'";
	}
	include 'tampil.php';
?>