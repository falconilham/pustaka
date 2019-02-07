<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/mystyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Aplikasi Pinjaman Buku </title>
	<style>
	</style>
</head>
	</head>
	<body>
		<div class="container" id="login">
			<div class="panel panel-default" id="panel_login">
				<div class="panel-heading">
					<h2 class="text-center">LOGIN Admin</h2>
					<?php
						if (isset($_GET['error'])) {
					?>
						<h4 class="text-center" style="color:red"> Username Atau Password Salah</h4>
					<?php  
					}
					?>
					
					<?php
						if (isset($_GET['harus_login'])) {
					?>
						<h4 class="text-center" style="color:red">Anda Harus Login</h4>
					<?php  
					}
					?>
					
				</div>
				<div class="panel-body">
					<form action="../proses/login_admin.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="nama" required/>
						</div>
						
						<div class="form-group" style="padding-bottom:10px">
							<label>Password</label>
							<input type="password" class="form-control" name="password" required/>
						</div>
					    
					    <div class="form-group">
						    <center><input type="submit" class="btn btn-success" value="Login">
						    </center>
						</div>
					</form>
				</div>
			</body>
		</html>
