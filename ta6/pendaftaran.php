<?php
	$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
?>
<form method="post" action="">
	Nama : <input type="text" name="nama"><br>
	Nim : <input type="text" name="nim"><br>
	Kelas : <br>
					<input type="radio" name="kls" value="D3MI-41-01"> D3MI-41-01<br>
					<input type="radio" name="kls" value="D3MI-41-02"> D3MI-41-02<br>
					<input type="radio" name="kls" value="D3MI-41-03"> D3MI-41-03<br>
					<input type="radio" name="kls" value="D3MI-41-04"> D3MI-41-04
					<input type="radio" name="kls" value="null" checked hidden><br>
	Jenis Kelamin : <br>
					<input type="radio" name="jk" value="Laki-Laki"> Laki-Laki<br>
					<input type="radio" name="jk" value="Perempuan"> Perempuan
					<input type="radio" name="jk" value="null" checked hidden><br>
	Hobi : <br>
		Futsal <input type="checkbox" name="hobi[]" value="Futsal"><br>
		Basket <input type="checkbox" name="hobi[]" value="Basket"><br>
		Main games <input type="checkbox" name="hobi[]" value="Main games"><br>
		Renang <input type="checkbox" name="hobi[]" value="Renang"><br>

	Fakultas :
		<select name="fakultas">
  			<option value="null">Pilih</option>
  			<option value="FIT">FIT</option>
  			<option value="FEB">FEB</option>
  			<option value="FKB">FKB</option>
  			<option value="FIF">FIF</option>
		</select><br>
	Alamat : <input type="textarea" name="almt"><br>
	password : <input type="password" name="pass"><br>
	<input type="submit" name="submit" value="Register">
	<button><a href="login.php">LOGIN</a></button>
</form>
<?php
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kls'];
	$jk = $_POST['jk'];
	$hobi = $_POST['hobi'];
	$fakultas = $_POST['fakultas'];
	$alamat = $_POST['almt'];
	$pass = $_POST['pass'];
	$hobi1 = "";

	if(!empty($hobi)){
		foreach ($hobi as $value) {
			$hobi1 .= $value. ", ";
			echo "<br>";
		}
	}
		if (!is_numeric($nim)) {
		echo "<br>";
		$nim_err = "false";
		echo "NIM Harus Angka";
		}else{
		$nim_err = "true";
		}
	if (strlen($nim)==10) {
		echo "<br>";
		$nim1_err = "true";
		echo "Nim maksimal & minimal 10 Karakter";
	}else{
		$nim1_err = "false";
	}
	if (strlen($nama)>=35) {
		echo "<br>";
		$nama_err = "false";
		echo "Nama Maksimal 35 Karakter";
	}else{
		$nama_err = "true";
	}
	if (is_numeric($nama)) {
		echo "<br>";
		$nama2_err = "false";
		echo "Nama harus huruf";
	}else{
		$nama2_err = "true";
	}
	if ($hobi == 'null') {
		echo "<br>";
		$hobi1_err = "false";
		echo "Hobi harus diisi";
	}else{
		$hobi1_err = "true";
	}
	if ($fakultas == 'null') {
		echo "<br>";
		$fakultas_err = "false";
		echo "Fakultas harus diisi";
	}else{
		$fakultas_err = "true";
	}
	if ($jk == 'null') {
		echo "<br>";
		$jk_err = "false";
		echo "Pilihlah Jenis Kelamin";
	}else{
		$jk_err = "true";
	}
	if ($kelas == 'null') {
		echo "<br>";
		$kelas_err = "false";
		echo "Pilihlah Kelas";
	}else{
		$kelas_err = "true";
	}
	if ($pass == 'null') {
		echo "<br>";
		$pass_err = "false";
		echo "Harus diisi";
	}else{
		$pass_err = "true";
	}

if ($nim_err == "true" && $nim1_err == 'true' && $nama_err == "true" && $nama2_err == "true" && $hobi1_err == "true" &&   $fakultas_err == "true" && $jk_err == "true" && $kelas_err == "true" && $pass_err == "true" ) {
	session_start();
		$_SESSION['nim'] = $nim;
		$_SESSION['pass'] = $pass;
		$db = "INSERT INTO regis (Nama, Nim, Kelas, Jeniskelamin, Hobi, Fakultas, Alamat, Password)
			VALUES ('$nama', '$nim', '$kelas', '$jk', '$hobi1', '$fakultas', '$alamat', '$pass')";


if ($konek->query($db) === TRUE) {
		echo "<br>";
    	echo "successfully";
    	header("Location: login.php");
	} else {
		echo "<br>";
    	echo "Error: ". $db ."<br>". $konek->error;
	}
		}else{
  		echo "<script>
			alert('Register Gagal');
  			</script>";
			echo "<br>";
				echo "Failed";
	}
	$konek->close();
		}
?>
