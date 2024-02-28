<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sederhana PHP dan MySQLi</title>
	<link rel="stylesheet" href="edit.css" lang="en" >
</head>
<body>
	<h2>CRUD DATA SISWA SMK N 6 SKA</h2>
	<br/>
	
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data_siswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
				
			</table>
			<a href="index.php">KEMBALI</a>
		</form>
		<?php 
	}
	?>
 
</body>
</html>