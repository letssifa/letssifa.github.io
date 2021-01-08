<h2> SIDANG DENGAN PERKARA INI : </h2>

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
		$data = mysqli_query($koneksi,"select * from antrian ORDERS LIMIT 1");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['perkara']; ?></td>
				<td><?php echo $d['ruangan']; ?></td>
				<td><?php echo $d['agenda']; ?></td>
				
			</tr>
            
			<?php 
		}
		?>
        
	</table>
    <h2> SEDANG BERLANGSUNG </h2>