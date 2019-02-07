<?php session_start();
if (!isset($_SESSION['id_siswa'])){
header('Location: ../index.php?harus_login=1');
}
else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*$id_siswa = mysql_real_escape_string($_POST['id_siswa']);*/
/*$nama = mysql_real_escape_string($_POST['nama']);*/
$judul = $_POST['judul'];
$author = $_POST['author'];
$tnggal_kembali = $_POST['waktu'];
$kondisi = "Sedang Dipinjam";
$id_buku = $_POST['id_buku'];


$sql = "INSERT INTO transaksi(id_siswa, nama, judul, author, tnggal_kembali, id_buku) VALUES ('{$_SESSION['id_siswa']}','{$_SESSION['nama']}','$judul', '$author', '$tnggal_kembali', '$id_buku')";

$sql2 ="UPDATE buku SET kondisi = '$kondisi' WHERE id_buku = '$id_buku'";


$result = $conn->query($sql);
$result = $conn->query($sql2);
if ($result == true){	
		header('Location:../buku');
	}
	else {
		echo "Pinjam Gagal, Silakan kontak admin".mysqli_error($conn);
	}
}

?>