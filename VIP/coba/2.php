<?php
include '../module/koneksi.php';
$searchTerm = $_GET['term'];

$select = $conn->query("SELECT * FROM tbbarang WHERE nama LIKE '%".$searchTerm."%'");
while ($row=$select->fetch_array()){
 $data[] = $row[1];
}
//return json data
echo json_encode($data);
?>