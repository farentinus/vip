<?php
require_once ('config.php');
$q=$_REQUEST["q"]; 
$sql="SELECT `fname` FROM `Property` WHERE fname LIKE '%$q%'";
$result = mysql_query($sql);
$json=array();

while($row = mysql_fetch_array($result)) {
  $json[]=array(
  'value'=> $row['fname'],
  'label'=> $row['fname']
   );
   }
   echo json_encode($json);
  ?>