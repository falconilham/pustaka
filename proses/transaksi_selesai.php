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

$id = $_GET['id_buku'];

$sql = "UPDATE buku SET kondisi = '' WHERE id_buku = $id";
$sql2 = "INSERT INTO histori_transaksi SELECT * FROM transaksi WHERE id_buku = $id";
$sql3 = "DELETE FROM transaksi WHERE id_buku='$id'";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

if ($result and $result2 && $result3 == true){
		header('Location:../admin/transaksi.php');
	}
	else {
		header('Location:../admin/transaksi.php');
	}


?>