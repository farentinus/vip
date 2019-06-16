<?php
include '../../../module/koneksi.php';
$namabarang = $_GET['namabarang'];
$perintah = "SELECT * FROM tbbarang where nama like '%$namabarang%' or type LIKE '%$namabarang%' AND jumlah >=1";
include 'tampilbar.php';
?>
