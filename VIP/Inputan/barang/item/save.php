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
	if($but=="Simpan"){
		$data = $conn->query("SELECT * FROM tbbarang where namabarang='$namabarang'");
		$num = mysqli_num_rows($data);
		if($num=='1'){
			while($re = $data->fetch_array()){
				$idbarang = $re[0];
				$jum = $re[2];
			}
			$jlh = $jum+$jumlah;
			$conn->query("UPDATE tbbarang SET jumlah='$jlh',hargabeli='$hargabeli',hargajual='$hargajual' where idbarang='$idbarang'");
			$conn->query("INSERT INTO tbbeli value('$idbeli','$idbarang','$namabarang','$tanggal','$jumlah','$total')");
			$conn->query("INSERT INTO tbbelidetil value('$idbeli','$iduser','$idbarang','$tanggal','$jumlah','$total')");
		}else{
			$conn->query("INSERT INTO tbbarang value('','$namabarang','$jumlah','$hargabeli','$hargajual')");
			$select = $conn->query("select * from tbbarang where namabarang='$namabarang'");
			while($re = $select->fetch_array()){
				$idbar = $re[0];
			}
			$conn->query("INSERT INTO tbbeli value('$idbeli','$idbar','$namabarang','$tanggal','$jumlah','$total')");
			$conn->query("INSERT INTO tbbelidetil value('$idbeli','$iduser','$idbar','$tanggal','$jumlah','$total')");
		}
	}else if($but=="Hapus"){
		$conn->query("DELETE FROM tbbarang where kodebarang='$idbarang'");
	}else if($but=="Edit"){
		$conn->query("UPDATE tbbarang SET hargajual='$hargajual',nama='$namabarang',type='$type',satuan='$satuan',hargabeli='$hargabeli',kode='$kode',hargareseller='$hargaresell' where kodebarang='$idbarang'");
	}else{
		$perintah = "SELECT * FROM tbbarang where nama like '%$namabarang%' or type LIKE '%$namabarang%' AND NOT type='hp'";
	}
	include 'tampil.php';
?>