<?php
	$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
?>
<form method="post" action="">
	Nim : <input type="text" name="nim"><br>
	Password : <input type="password" name="pass"><br>
	<input type="submit" name="submit" value="Login">
<button><a href="pendaftaran.php">Register</a></button>
</form>

<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$pass = $_POST['pass'];
		$hasil = mysqli_query($konek, "SELECT * FROM regis WHERE Nim = '$nim' AND Password = '$pass' ");

	while ($row=mysqli_fetch_row($hasil)){
		session_start();
		$_SESSION['nim'] = $row['1'];
		$_SESSION['pass'] = $row['7'];
		header("Location: halamanawal.php");
		}
		echo "TIdak sesuai!!";
	}	

?>
