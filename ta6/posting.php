<?php
	$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
?>
<form method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<CENTER><td colspan="2">POSTINGAN</td></CENTER>
		</tr>
		<tr>
			<td>Caption:</td>
			<td><textarea name="caption" rows="20" cols="80"></textarea></td>
		</tr>
		<tr>
			<td>gambar:</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" name="submit" value="submit">
			<button><a href="halamanawal.php" style="text-decoration: none">BACK</a></button></td>
		</tr>
	</table>
</form>

<?php 
session_start();
if (isset($_POST['submit'])) {
	if ($_FILES['foto']['name']!= "") {
		$nim = $_SESSION['nim'];
		$gambar = $_FILES['foto']['name'];
		if (str_word_count($_POST['caption'])>=30) {
			$capt = $_POST['caption'];
		}else{echo "Caption harus lebih dari 30 kata";
	}
		if (isset($capt)&&isset($gambar)) {
			$aksi = mysqli_query($konek,"INSERT INTO posting (Nim, kode_file, caption, file_gambar) VALUES 
					('$nim','','$capt','$gambar')");
			if (!$aksi) {
				die("GAGAL");
			}else{echo "BERHASIL";}	
		}
	}
}
 ?>
 