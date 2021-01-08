<!DOCTYPE html>
<html>
<head>
	<title>EDIT PERKARA</title>
</head>
<body>

	<h2>EDIT PERKARA</h2>
	<br/>
	<a href="halaman_satpam.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>UBAH PERKARA</h3>

	<?php
	include 'koneksi_satpam.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from antrian where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_satpam.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nomor Perkara</td>
					<td><input type="text" name="perkara" value="<?php echo $d['perkara']; ?>"></td>
				</tr>
				<tr>
					<td>Ruangan</td>
					<td><input type="text" name="ruangan" value="<?php echo $d['ruangan']; ?>"></td>
				</tr>
                <tr>
					<td>Agenda</td>
					<td><input type="text" name="agenda" value="<?php echo $d['agenda']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>