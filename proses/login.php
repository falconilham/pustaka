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
$nama = $_POST['nama'];
$password = $_POST['password'];
$sql = "select * from siswa where nama='$nama' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $_SESSION['id_siswa'] = $row['id_siswa'];
        $_SESSION['nama'] = $row['nama'];

		header('Location: ../buku');
    }
} else {
    header('Location: ../index.php?error=1');
}
$conn->close();
?>