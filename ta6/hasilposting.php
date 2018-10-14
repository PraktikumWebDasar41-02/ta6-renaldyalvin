<?php
$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
    	$hsl = mysqli_query($konek, "SELECT * FROM posting WHERE Nim='$code'");
}
?>

<tabel align="center">
 	<tr>
 		<td colspan="3" align="center">POSTINGAN</td>
 	</tr>
 	<tr align="center">
 		<td>Nim</td>
 		<td>Caption</td>
 		<td>Gambar</td>
 	</tr>
 	<?php 
 			while ($arr = mysqli_fetch_row($hsl)) {
 				$code = $arr['Nim'];
 				$query = mysqli_query($konek, "SELECT * FROM posting WHERE Nim='$code'");
 				$arryy = mysqli_fetch_array($query);
 				echo "<tr>";
 				echo "<td>".$arr['Nim']."<br>".$arryy['Nama']."</td>";
 				echo "<td>".$arr['caption']."</td>";
 				echo "<td><img src='pict/".$arr['file_gambar']."'height='140'></td>";
 				echo "<tr>";
 			}	 			
 		 ?>
 		 <tr>
 		 	<td colspan="3" align="center"><button><a href="halamanawal.php" style="text-decoration: none">HOME</a></button></td>
 		 </tr>
 </tabel>