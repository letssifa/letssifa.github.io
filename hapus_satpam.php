<?php 
// koneksi database
include 'koneksi_satpam.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from antrian where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:halaman_satpam.php");

?>