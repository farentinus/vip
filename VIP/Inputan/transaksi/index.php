<!DOCTYPE html>
<head>
    <title>ADMIN</title>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../js/jquery/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../../css/barang.css">
    <script src="../../js/jquery/jquery.js"></script>
    <script src="../../js/jquery/jquery-ui.js"></script>
    <script src="../../js/script.js"></script>
    <?php
    session_start();
    include '../../login/security.php';
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
        <div id='s' class='clock'></div><div class='clock'>-</div>
        <div id='m' class='clock'></div><div class='clock'>-</div>
        <div id='h' class='clock'></div>
   </div>
</div>

<div class="row">
<div class="col-3 col-m-3 menu">
<ul>
    <li class="dialog-link1" onclick="transaksijual()">Transaksi Jual</li>
    <li class="dialog-link1" onclick="transaksibeli()">Transaksi Beli</li>
    <li class="dialog-link1" onclick="kembali()">Back</li>
</ul>
</div>
<div class="col-12 col-m-12">
        <div id="dialog1" title="VIP">
            <div id='tampil'>
            
            </div>
        </div>
   </div>

</div>

<div class="footeradmin1">&copy Copy Right By Souldark</div>

</body>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>