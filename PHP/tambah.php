<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sederhana PHP dan MySQLi</title>
	<link rel="stylesheet" href="tambah.css" lang="en">
</head>
<body>
 
	
	<br/>
	
	<h3>Make your account </h3>
	
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" required></td>
			</tr>

			<tr>
				<td></td>
				<td></td>

			</tr>	
			<h4>isi alamat dengan lengkap barang tidak terkirim bukan salah saya hehe </h4>	
		</table>
		<input type="submit" value="Get Started">
		<a href="index.php">KEMBALI</a>
		
		
	</form>
</body>
</html