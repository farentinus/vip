<?php
include '../../../module/koneksi.php';
$cari = $_GET['term'];

$select = $conn->query("SELECT * FROM tbpelanggan WHERE nama LIKE '%".$cari."%'");
while ($row=$select->fetch_array()){
 $data[] = $row[1];
}
//return json data
echo json_encode($data);
?>