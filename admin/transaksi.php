<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/jquery/jquery-3.2.1.min.js"></script>
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>

		<title>Data Peminjam</title>
	</head>
	<style>
	#tambah {
		margin-left: 40%;
		margin-right: 40%;
	}
	</style>
	<body>
		<div class="container">
			<h2 class="text-center">Data Perpustakaan 
				<p>List data Peminjam Buku</p>
			</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID Pinjaman</th>
							<th>ID buku</th>
							<th>id Siswa</th>
							<th>nama</th>
							<th>judul</th>
							<th>author</th>
							<th>Tanggal Pinjam</th>
							<th>tanggal Kembali</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
					<?php 
		                $servername = "localhost";
		                $username = "root";
		                $password = "";
		                $dbname = "perpustakaan";
		                $conn = new mysqli($servername, $username, $password, $dbname);

		                $sql = "SELECT * from transaksi";
		                $result = mysqli_query($conn, $sql);

	                 	while($row = $result->fetch_assoc()) {
	                ?>
						<tr>
							<td><?php echo $row['id_transaksi']; ?></td>
							<td><?php echo $row['id_buku']; ?></td>
							<td><?php echo $row['id_siswa']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['judul']; ?></td>
							<td><?php echo $row['author']; ?></td>
							<td><?php echo $row['tnggal_pinjam']; ?></td>
							<td><?php echo $row['tnggal_kembali']; ?></td>
							<td><a href="../proses/transaksi_selesai.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-Primary" role="button">Proses Selesai</a></td>
						</tr>
						<?php } ?>
					</table>
		    </div>
		  </div>
		</div>

		
	</body>
</html>
