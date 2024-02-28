<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
 
// menginput data ke database
$query = "INSERT INTO data_siswa (nama, email, alamat, password) VALUES ('$nama', '$email', '$alamat', '$password')";
if(mysqli_query($koneksi, $query)){
    // Jika berhasil, alihkan kembali ke halaman index.php
    header("location:index.php");
} else{
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>