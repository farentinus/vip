<html>
<head>
<link rel="stylesheet" type="text/css" href="../../css/barang.css">
<script src="../js/jquery/jquery.js"></script>
<script src="../js/jquery/jquery-ui.js"></script>
<link rel="stylesheet" href="../js/jquery/jquery-ui.css">
<script src="../js/script.js"></script>
<script type="text/javascript">
$(function() 
{
 $( ".coding_language" ).autocomplete({
  source: 'autocomplet.php'
 });
});
</script>
</head>
<body>
<div id="wrapper">

<div class="ui-widget">
 <p>Enter Coding Language</p>
 <input type="text" class="coding_language" id="term">
</div>

</div>
</body>
</html>