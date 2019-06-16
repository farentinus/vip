<table border="1">
                <tr>
                    <th>Nojual</th>
                    <th>Namabarang</th>
                    <th>jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Kode</th>
                    <th colspan="2">Action</th>
                </tr>
                    <?php 
                        $data = $conn->query("SELECT * FROM tempjual inner join tbbarang on tempjual.kodebarang = tbbarang.kodebarang");
                        while($re = $data->fetch_array()){
                            $notemp = $re['0'];
                            $nojual = $re['1'];
                            $namabarang = $re['7'];
                            $jumlah = $re['3'];
                            $harga = $re['4'];
                            $total = $re['5'];
                            $kode = $re['14'];
                    ?>
                <tr>
                	<input type="hidden" id="notemp" value="<?php echo $notemp ?>">
                    <td><?php echo $nojual; ?></td>
                    <td><?php echo $namabarang; ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td><?php echo $harga; ?></td>
                    <td><?php echo $total; ?></td>
                    <td><?php echo $kode; ?></td>
                    <td><input type="button" id="hapus" value="Hapus" onclick="hps(<?php echo $notemp ?>)"></td>
                </tr>
                <?php } ?>
            </table>
        <table style="padding-top: 10px;">
        <?php 
        	$dataa = $conn->query("SELECT sum(total) FROM tempjual");
        	while($re = $dataa->fetch_array()){
        		$subtotal = $re[0];
        	}
        ?>
            <tr>
                <td>Subtotal</td>
                <td>:</td>
                <td><input type="text" id="subtotal" value="<?php echo $subtotal; ?>"></td>
            </tr>
             <tr>
                <td>Disc</td>
                <td>:</td>
                <td><input type="text" id="disc" onkeyup="htng()" value="0"> <input type="radio" name="a" id="rp" checked="true" onclick="htng()"><label for="rp" >Rp</label> <input type="radio" name="a" id="perc" onclick="htng()"><label for="perc" >%</label></td>
            </tr>
             <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" id="grandtotal" value="<?php echo $subtotal; ?>" onclick="htng()"></td>
            </tr>
            <tr>
            	<td><input type="button" value="Proses"></td>
            </tr>
        </table>