<!DOCTYPE html>
<html>
<head>
    <title>ADMIN</title>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/admin.css">
    <link rel="stylesheet" href="../../../css/popup.css">
    <link rel="stylesheet" href="../../../js/jquery/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../../../css/barang.css">
    <script src="../../../js/jquery/jquery.js"></script>
    <script src="../../../js/jquery/jquery-ui.js"></script>
    <script src="../../../js/script.js"></script>
    <?php
    session_start();
    include '../../../login/security.php';
    include '../../../module/koneksi.php';
    ?>
<body onload="startTime()">
<div class="header">
<?php
        $date = date('d-m-Y');
        $tgl = date('l');

 ?>
   <div class="waktu">
        <div class="tgl"><?php  echo $tgl; ?></div>
        <div class="date"><?php  echo $date; ?></div>
        <div id='s' class='clock'></div><div class='clock'>:</div>
        <div id='m' class='clock'></div><div class='clock'>:</div>
        <div id='h' class='clock'></div>
   </div>
</div>

<div class="row">
<div class="col-3 col-m-3 menu">
<ul>
    <li class="dialog-link1" onclick="kembalitrans()">Back</li>
</ul>
</div>
        <div class="col-12 col-m-12">
            <table>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td><input type="text" id="namapel"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" id="alamat"></td>
                </tr>
                <tr>
                    <td>Telp</td>
                    <td>:</td>
                    <td><input type="text" id="telp"></td>
                </tr>
                <tr>
                <td><input type="button" id="item" value="+Item" onclick="caripel()"></td>
                </tr>
            </table>
           <div id="tampilform">
                <?php include 'tampil.php' ?>
           </div>
        </div>
       

  <div id="popup1" class="overlay">
    <div class="popup">
      <a class="close" onclick="caripel1()">&times;</a>
      <div class="content">
          <?php include 'tempjual.php'; ?>
      </div>
    </div>
  </div>

</div>

</body>
<script> 
    function hilang(){
        $(document).ready(function(){
             $(".hide").toggle();
         });
    }
     // Dialog 1 for barang
        $( "#dialog1" ).dialog({
            autoOpen: false,
        });

        $( ".dialog-link1" ).click(function( event ) {
            $( "#dialog1" ).dialog( "open" );
            event.preventDefault();
        });
</script>
</html>