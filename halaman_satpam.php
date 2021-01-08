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
          <a href="https://pa-painan.go.id/">Home</a>
          <a href="#">Daftar</a>
           <a href="logout.php">Log Out</a>
        </div>
      </div>
    </header>
    
     <div class="top-wrapper">
      <div class="container">
	<h2>INPUT ANTRIAN PERKARA</h2>
	<p>Inputkan nama dengan nama penggugat/pemohon</p>
	<p>Inputkan nomor perkara dengan nomor perkara yang telah dari pengadilan</p>
	<p>Inputkan Ruang Sidang dengan ruang yang akan digunakan pemohon untuk disidang</p>
	<p>Inputkan Agenda dengan hal yang akan dibahas pada sidang</p>
	
	</div>
	</div>

	<div class="medium-wrapper">
	<div class= "container">
	<br/>
	<a href="tambah_satpam.php">+ TAMBAH PERKARA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Nomor Perkara</th>
			<th>Ruangan Sidang</th>
			<th>Agenda</th>
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
					<a href="edit_satpam.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_satpam.php?id=<?php echo $d['id']; ?>">HAPUS</a>
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
	  </center>
    </footer>
    </body>

</html>