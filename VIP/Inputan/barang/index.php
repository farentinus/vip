<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../../css/barang.css">
    <script src="../../js/script.js"></script>
    <title></title>
</head>

<body>
    <?php
		include '../../module/koneksi.php';
	?>
    <center>
        <table>
            <tr>
                <td><input type="radio" name="barang" id="item" value="Item" onclick="radi()"><label for="item">Item</label> </td>
                <td><input type="radio" name="barang" id="hp" value="HP" onclick="radi()"><label for="hp">HP</label> </td>
            </tr>
        </table>
    </center>
    <div id="tampilitem">

    </div>
</body>

</html>