<div class="table">
    <div class="hide">
        <table border="1" width="100%;" class="tablebarang">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>Telp</th>
            </tr>
            <?php
					include '../../module/koneksi.php';
				if(!isset($perintah)){
					$perintah = "SELECT * FROM TBUSER";
				}
				$datail = $conn->query($perintah);
				$row = mysqli_num_rows($datail);
				$page = ceil($row/7);
				$currentpage = 1;
				if (isset($_GET['currentpage'])) {
					$currentpage = $_GET['currentpage'];
					if ($currentpage >= $page) {
						$currentpage = $page;
					}
				}
				$prev = $currentpage - 1;
				$next = $currentpage + 1;
				$currentrow = (7 * $currentpage) - 7;
				$perintah = $perintah." LIMIT $currentrow,7";
				$datail = $conn->query($perintah);
					while ($re = $datail->fetch_array()) {
						$iduser = $re[0];
						$username = $re[1];
						$password = $re[2];
						$status = $re[3];
						$alamat = $re[4];
						$telp = $re[5];
						$deskripsipassword = $password 
				?>
            <tr>
                <td onclick="tampildatasetting(<?php echo "'$iduser','$username','$deskripsipassword','$status','$alamat','$telp'" ?>)"><?php echo $username ?></td>
                <td onclick="tampildatasetting(<?php echo "'$iduser','$username','$deskripsipassword','$status','$alamat','$telp'" ?>)"><?php echo $deskripsipassword ?></td>
                <td onclick="tampildatasetting(<?php echo "'$iduser','$username','$deskripsipassword','$status','$alamat','$telp'" ?>)"><?php echo $status ?></td>
                <td onclick="tampildatasetting(<?php echo "'$iduser','$username','$deskripsipassword','$status','$alamat','$telp'" ?>)"><?php echo $alamat ?></td>
                <td onclick="tampildatasetting(<?php echo "'$iduser','$username','$deskripsipassword','$status','$alamat','$telp'" ?>)"><?php echo $telp ?></td>
            </tr>
            <?php
					}
				?>
        </table>
    </div>
</div>
<div class="footerlimit1">
    <input type="button" value="Prev" onclick="limit1(<?php echo $prev ?>)" id="pre">
    <select onchange="limit1(this.value)">
        <?php
				for ($i=1; $i <= $page; $i++) {
					if ($i != $currentpage) {
					 	echo "<option value='$i'>$i</option>";
					 } else{
					 	echo "<option value='$i' selected>$i</option>";
					 }
				}
			?>
    </select>
    <input type="button" value="Next" onclick="limit1(<?php echo $next ?>)" id="nex">
</div>