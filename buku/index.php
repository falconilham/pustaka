<?php session_start();
if (!isset($_SESSION['id_siswa'])){
header('Location: ../index.php?harus_login=1');
}
else{

?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../asset/css/mystyle.css">
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/jquery/jquery-3.2.1.min.js"></script>
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>

		<title>Data Buku</title>
	</head>
	<style>
	#tambah {
		margin-left: 40%;
		margin-right: 40%;
	}
	</style>
	<body>
		<div class="container">
			<h2 class="text-center">Data Buku SMA 
				<p>List Buku SMK Blabla</p>
			</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID Buku</th>
							<th>Judul</th>
							<th>Author</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php 
		                $servername = "localhost";
		                $username = "root";
		                $password = "";
		                $dbname = "perpustakaan";
		                $conn = new mysqli($servername, $username, $password, $dbname);

		                $sql = "SELECT * from buku";
		                
		                $result = mysqli_query($conn, $sql);

	                 	while($row = $result->fetch_assoc()) {
	                ?>
	                	
						<tr>
							<td><?php echo $row['id_buku']; ?></td>
							<td><?php echo $row['judul']; ?></td>
							<td><?php echo $row['author']; ?></td>
							<td><?php 
								if (empty($row['kondisi'])){
									echo '<a href="../pinjam/pinjam.php?id_buku='.$row['id_buku'].'" class="btn btn-Primary" role="button">Available</a>';
									}
									
								else { 	
								echo '<button class="btn btn-danger disabled">Not Available</button>'; } ?> 
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
					</table>
	</body>
</html>
<?php } ?>

