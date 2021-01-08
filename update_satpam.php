<?php 
// koneksi database
include 'koneksi_satpam.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$perkara = $_POST['perkara'];
$ruangan = $_POST['ruangan'];
$agenda = $_POST['agenda'];

// update data ke database
mysqli_query($koneksi,"update antrian set nama='$nama', perkara='$perkara', ruangan='$ruangan', agenda='$agenda' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:halaman_satpam.php");

?>