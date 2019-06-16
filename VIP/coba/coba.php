 <?php  
      $plaintext = 'YWRtaW4xMjM=';  
      //Encode plaintext  
  	  $encode = base64_encode($plaintext);  
      //Decode plaintext  
      $decode = base64_decode($plaintext);  
      echo "teks = ".$plaintext."<br/>";   
      echo "teks yang diencode = ".$encode."<br/>";  
      echo "teks yang didecode = ".$decode;  

 ?>