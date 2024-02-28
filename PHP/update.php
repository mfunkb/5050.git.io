<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update data_siswa set nama='$nama', email='$email', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "data berhasil diperbarui";
header("refresh:1;url=index.php");
 
?>