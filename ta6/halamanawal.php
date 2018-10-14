<?php
$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
session_start();
	$nim = $_SESSION['nim'];
	$hasil = mysqli_query($konek, "SELECT * FROM regis WHERE Nim='$nim' ");
	$row = mysqli_fetch_array($hasil);
echo "Nama : ";
	printf("%s", $row['Nama']);
echo "<br>"; 
echo "Nim : ";
	printf("%s", $row['Nim']);
echo "<br>";
echo "Kelas : ";
	printf("%s", $row['Kelas']);
echo "<br>";
echo "Jenis Kelamin : ";
	printf("%s", $row['Jeniskelamin']);
echo "<br>";
echo "Hobi : ";
	printf("%s", $row['Hobi']);
echo "<br>";
echo "Fakultas : ";
	printf("%s", $row['Fakultas']);
echo "<br>";
echo "Alamat : ";
	printf("%s", $row['Alamat']);
echo "<br>";
?>
	<button><a href="posting.php">POSTING</a></button>
	<button><a href="hasilposting.php">HASIL POSTING</a></button>
	<button><a href="keluar.php">LOGOUT</a></button>

