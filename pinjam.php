<?php
$id = $_GET['id_buku'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * from buku where id_buku = '$id'";

$result = mysqli_query($conn, $sql);
while($row = $result->fetch_assoc()) {      


?>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/jquery/jquery-3.2.1.min.js"></script>
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<style>
		.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
		}
		.card-default {
			max-width: 500px;
		}
	</style>
	<body>
		<div class="container">
			<div class="card card-default">
				<div class="card-header">
				<h3 class="text-center">Form Pinjam buku</h3>
				</div>
					<div class="card-body">
					<form action="proses/proses_pinjam.php" method="post">

						<input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">

						<div class="form-group">
							<label>judul</label>
							<input type="text" class="form-control" name="judul" value="<?php echo $row['judul']; ?>" required/>
						</div>

						<div class="form-group">
							<label>author</label>
							<input type="text" class="form-control" name="author" value="<?php echo $row['author']; ?>" required/>
						</div>
						
						<div class="form-group">
							<label>author</label>
							<input type="date" class="form-control" name="waktu" required/>
						</div>
						
						
						
						<button type="submit" class="btn btn-primary">Pinjam</button>
					</form>
					</div>

		
</html>
<?php } ?>