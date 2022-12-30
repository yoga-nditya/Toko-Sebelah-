<br>
<a href="?page=data_laptop">Kembali</a>
<h1>Detail</h1>
<h3>
<body>
	
		<?php
		$id = $_GET['id'];
		$sql = "SELECT * FROM laptop INNER JOIN spesifikasi ON laptop.kode_laptop = spesifikasi.kode_laptop WHERE laptop.kode_laptop='$id' GROUP BY laptop.kode_laptop";
		$baca = $db->tampil($sql);
		while ($data = $baca->fetch_array()) {
		?>
		<img width="500px" src="../asset/produk/<?php echo $data['gambar']?>">
		<table>
		<tr>
			<td>Kode Laptop</td>
			<td>:</td>
			<td><?php echo $data['kode_laptop']?></td>
		</tr>
		<tr>
			<td>Nama Laptop</td>
			<td>:</td>
			<td><?php echo $data['nama_laptop'];?></td>
		</tr>
		<tr>
			<td>Brand</td>
			<td>:</td>
			<td><?php echo $data['brand'];?></td>
		</tr>
		<tr>
			<td>Type</td>
			<td>:</td>
			<td><?php echo $data['type'];?></td>
		</tr>
		<tr>
			<td>Tanggal Rilis</td>
			<td>:</td>
			<td><?php echo $data['released'];?></td>
		</tr>
		<tr>
			<td>Dimensi</td>
			<td>:</td>
			<td><?php echo $data['dimension'];?></td>
		</tr>
		<tr>
			<td>Berat</td>
			<td>:</td>
			<td><?php echo $data['weight'];?></td>
		</tr>
		<tr>
			<td>Ukuran Layar</td>
			<td>:</td>
			<td><?php echo $data['resolution'];?></td>
		</tr>
		<tr>
			<td>OS</td>
			<td>:</td>
			<td><?php echo $data['os'];?></td>
		</tr>
		<tr>
			<td>Processor</td>
			<td>:</td>
			<td><?php echo $data['processor'];?></td>
		</tr>
		<tr>
			<td>Kartu Grafis</td>
			<td>:</td>
			<td><?php echo $data['graphic_card'];?></td>
		</tr>
		<tr>
			<td>RAM</td>
			<td>:</td>
			<td><?php echo $data['ram'];?></td>
		</tr>
		<tr>
			<td>Penyimpanan</td>
			<td>:</td>
			<td><?php echo $data['storage'];?></td>
		</tr>
		<tr>
			<td>Jaringan</td>
			<td>:</td>
			<td><?php echo $data['network'];?></td>
		</tr>
		<tr>
			<td>Fitur</td>
			<td>:</td>
			<td><?php echo $data['features'];?></td>
		</tr>
		<tr>
			<td>Baterai</td>
			<td>:</td>
			<td><?php echo $data['battery'];?></td>
		</tr>
		<tr>
			<td>Port</td>
			<td>:</td>
			<td><?php echo $data['port'];?></td>
		</tr>
		<tr>
			<td>Warna</td>
			<td>:</td>
			<td><?php echo $data['color'];?></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><?php echo $data['price'];?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</h3>