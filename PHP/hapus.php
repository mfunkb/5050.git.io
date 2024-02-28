<?php
	include 'koneksi.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		// perintah SQL untuk menghapus data berdasarkan ID
		$sql = "DELETE FROM data_siswa WHERE id='$id'";
    
		if (mysqli_query($koneksi, $sql)) {
			echo "Data siswa tersebut telah dihapus.";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
		}
	} else {
		echo "ID tidak ditemukan.";
	}
    header("refresh:1;url=index.php");
?>