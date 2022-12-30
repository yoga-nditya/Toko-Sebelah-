<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="font-family; margin-bottom: 50px">
		<h2>Data Produk</h2>
		<hr>
	<h3><a href="?page=tambah_data">+Tambah Data</a>
	<table cellpadding="10" cellspacing="0">
		<thead align="center">
			<th>Kode</th>
			<th>Nama Laptop</th>
			<th>Tanggal Rilis</th>
			<th style="background-color: #07db00; width: 200px">Opsi</th>
		</thead>
		<?php
		$konek = mysqli_connect("localhost","root","","speclap");
		$batas   = 10;
		$halaman = @$_GET['halaman'];
		if(empty($halaman)){
			$posisi  = 0;
			$halaman = 1;
		}
		else{ 
		  $posisi  = ($halaman-1) * $batas; 
		}

		$no= $posisi+1;
		$sql = "SELECT * FROM `laptop` INNER JOIN `spesifikasi` ON laptop.kode_laptop = spesifikasi.kode_laptop LIMIT $posisi,$batas";
		$baca = $db->tampil($sql);
		while ($data = $baca->fetch_array()){
		?>
		<tr align="center">
			<td><?php echo $data['kode_laptop']; ?></td>
			<td><?php echo $data['nama_laptop']; ?></td>
			<td><?php echo $data['released']; ?></td>
			<td>
				<a href="?page=detail_laptop&id=<?php echo $data['kode_laptop'];?>">Detail</a> |
				<a href="?page=edit_data&id=<?php echo $data['kode_laptop']; ?>">Edit</a>
				&nbsp;|&nbsp;
				<a onclick="return konfirmasi()" href="?aksi=hapus_laptop&id=<?php echo $data['kode_laptop']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	<?php
		$query2     = mysqli_query($konek, "select * from laptop");
		$jmldata    = mysqli_num_rows($query2);
		$jmlhalaman = ceil($jmldata/$batas);
		echo "<br> Halaman : ";

		for($i=1;$i<=$jmlhalaman;$i++)
		if ($i != $halaman){
			echo " <a href=\"index.php?page=data_laptop&halaman=$i\">$i</a> | ";
		}
		else{ 
			echo " <b>$i</b> | "; 
		}
	?>
	</div>
</body>
</html>