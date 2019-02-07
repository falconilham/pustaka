<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id_transaksi'];
$sql = "DELETE FROM transaksi WHERE id_transaksi='$id'";
$result = $conn->query($sql);
if ($result == true){
		header('Location:../admin/transaksi.php');
	}
	else {
		echo "gagal hapus, tanya yg buat".mysqli_error($conn);
	}


?>