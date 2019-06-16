<?php
	include '../../module/koneksi.php';
	$iduser	= $_GET['iduser'];
	$user = $_GET['username'];
	$but = $_GET['but'];
	$pass = $_GET['password'];
	$status = $_GET['status'];
	$alamat = $_GET['alamat'];
	$telp = $_GET['telp'];

	$password = base64_encode($pass);

	if($but=="Simpan"){
        $conn->query("insert into tbuser value('','$user','$password','$status','$alamat','$telp')");
	}elseif($but=="Hapus"){
		$conn->query("DELETE FROM tbuser where kodeuser='$iduser'");
	}else{
		$conn->query("UPDATE tbuser SET username='$user',pass='$password',status='$status',alamat='$alamat',telp='$telp' where kodeuser='$iduser'");
	}

	include'tampil.php';
?>
