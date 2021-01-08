<?php 
// koneksi database
include 'koneksi_satpam.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$perkara = $_POST['perkara'];
$ruangan = $_POST['ruangan'];
$agenda = $_POST['agenda'];

// menginput data ke database
mysqli_query($koneksi,"insert into antrian values('','$nama','$perkara','$ruangan', '$agenda')");

// mengalihkan halaman kembali ke index.php
header("location:halaman_satpam.php");

?>