<!DOCTYPE html>
<html>
<head>
	<title>Tambah Perkara</title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<body>
	<center>
	<h2>HALAMAN TAMBAH PERKARA</h2>
	
	<div class="kotak-tambah">
	<p class="tulisan-tambah">MASUKKAN PERKARA BARU</p>
	<form method="post" action="simpan_satpam.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nomor Perkara</td>
				<td><input type="text" name="perkara"></td>
			</tr>
			<tr>
				<td>Ruangan</td>
				<td><input type="text" name="ruangan"></td>
			</tr>
            <tr>
				<td>Agenda</td>
				<td><input type="text" name="agenda"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	</div>
	</center>
	<br/>
	<a href="halaman_satpam.php">KEMBALI</a>
	<br/>
</body>
</html>