<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Sidang</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    
    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="logo2.png">
        </div>
        <!-- Tambahkan ikon menu disini -->
        
    
        <div class="header-right">
          <a href="#">Home</a>
          <a href="#">Daftar</a>
           <a href="logout.php">Log Out</a>
        </div>
      </div>
    </header>
    
     <div class="top-wrapper">
      <div class="container">
      <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:halaman_ruangsidang.php?pesan=gagal");
	}
 
	?>
  
	
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    

        <h1>HALAMAN RUANG SIDANG</h1>
        <p>Keterangan :</p>
        <p>1. Tombol Mulai, ditekan ketika sidang akan dimulai</p>
        <p>2. Tombol Selesai, ditekan ketika sidang sudah selesai. Otomatis dihapus dari database</p>
      </div>
    </div>
    
    <div class="message-wrapper">
      <div class="container">
                <span class="btn mulai">Mulai Sidang</span>
                <span class="btn selesai">Selesai Sidang</span>
                <table border="1">
    
		<tr>
    <center>
			<th>NO</th>
			<th>Nama</th>
			<th>Nomor Perkara</th>
			<th>Ruangan Sidang</th>
			<th>Agenda</th>
      </center>
		</tr>
		<?php 
		include 'koneksi_satpam.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from antrian");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['perkara']; ?></td>
				<td><?php echo $d['ruangan']; ?></td>
				<td><?php echo $d['agenda']; ?></td>
				<td>
					<a href="mulai_sidang.php?id=<?php echo $d['id']; ?>">MULAI</a>
					<a href="hapus_sidang.php?id=<?php echo $d['id']; ?>">SELESAI</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
      </div>
    </div>
   
    <footer>
    <center>
      <div class="container">
        <img src="logo2.png">
        <p>Copyright Pengadilan Agama</p>
        <p>All trademarks, service marks, trade names, product names, logos and trade dress appearing on our website are the property of their respective owners. Sifa.</p>
      </div>
    </footer>
    </center>
    
  </body>
</html>
