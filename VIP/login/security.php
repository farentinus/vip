<?php
if(session_id() == '') {
    session_start();
}
if(!isset($_SESSION['username']) or !isset($_SESSION['kodeuser'])){
	?>
	<script>
	alert("Silahkan Login Dulu!!");
	location.href="../";
	</script>
	
	<?php
}
?>