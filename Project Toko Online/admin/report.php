<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="font-family; margin-bottom: 50px">
		<h2>Data Laporan</h2>
		<hr>
	<table cellpadding="10" cellspacing="0">
		<thead align="center">
			<th>taggal</th>
			<th>Subject</th>
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
		$sql = "SELECT * FROM `report`LIMIT $posisi,$batas";
		$baca = $db->tampil($sql);
		while ($data = $baca->fetch_array()){
		?>
		<tr align="center">
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['subject']; ?></td>
			<td>
				<a href="?page=detail_report&id=<?php echo $data['id_report'];?>">Detail</a> | 
				<a onclick="return konfirmasi()" href="?aksi=hapus_laporan&id=<?php echo $data['id_report']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	<?php
		$query2     = mysqli_query($konek, "select * from report");
		$jmldata    = mysqli_num_rows($query2);
		$jmlhalaman = ceil($jmldata/$batas);
		echo "<br> Halaman : ";

		for($i=1;$i<=$jmlhalaman;$i++)
		if ($i != $halaman){
			echo " <a href=\"index.php?page=report&halaman=$i\">$i</a> | ";
		}
		else{ 
			echo " <b>$i</b> | "; 
		}
	?>
	</div>
</body>
</html>