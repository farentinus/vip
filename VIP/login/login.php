<?php
	session_start();
	include'../module/koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
    $passwordenc = base64_encode($password); 

	$data = $conn->query("select * from tbuser where username='$username' and pass='$passwordenc'");
	while ($re = $data->fetch_array()) {
		$kodeuser = $re['0'];
		$username = $re['1'];
		$passwd = $re['2'];
		$status = $re['3'];
	}
	$query = mysqli_num_rows($data);
echo("select * from tbuser where username='$username' and pass='$password'");
	if ($query < 1) {
		header("location:../index.php");
	}else{
			if($status=="admin"){
			$_SESSION['kodeuser'] = $kodeuser;
			$_SESSION['username'] = $username;
			$_SESSION['status'] = $status;
			header("location:../admin");
			}else{
			$_SESSION['kodeuser'] = $kodeuser;
			$_SESSION['username'] = $username;
			$_SESSION['status'] = $status;
			header("location:../home");
			}
	}
?>