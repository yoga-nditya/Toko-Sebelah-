<?php
$id = $_GET['id'];
if (isset($_POST['edit'])) {
	$kode = $_POST['kode_laptop'];
	$nama = $_POST['nama_laptop'];
	$brand = $_POST['brand'];
	$type = $_POST['type'];
	$released = $_POST['released'];
	$dimension = $_POST['dimension'];
	$weight = $_POST['weight'];
	$resolution = $_POST['resolution'];
	$os = $_POST['os'];
	$processor = $_POST['processor'];
	$graphic = $_POST['graphic_card'];
	$ram = $_POST['ram'];
	$storage = $_POST['storage'];
	$network = $_POST['network'];
	$features = $_POST['features'];
	$battery = $_POST['battery'];
	$port = $_POST['port'];
	$color = $_POST['color'];
	$price = $_POST['price'];

	$db->EditData($id,$kode,$nama,$brand,$type,$released,$dimension,$weight,$resolution,$os,$processor,$graphic,$ram,$storage,$network,$features,$battery,$port,$color,$price);
	echo "<script>alert('Data Berhasil di Edit');document.location.href='index.php?page=data_pertolongan'</script>";
}
$sql = "SELECT * FROM laptop INNER JOIN spesifikasi ON laptop.kode_laptop = spesifikasi.kode_laptop WHERE laptop.kode_laptop='$id'";
$baca = $db->tampil($sql);
while($data = $baca->fetch_array()){
?>
<div style="font-family">
<h1>Tambah Data</h1>
<h3>Laptop</h3>
<a href="?page=data_laptop">Kembali</a>
<div class="main-content">
	<form class="input-form" method="POST" enctype="multipart/form-data">
		<label class="form-label">Kode Laptop</label>
		<input type="text" name="kode_laptop" class="form-control" value="<?php echo $data['kode_laptop']; ?>">
		<label class="form-label">Nama Lapatop</label>
		<input type="text" name="nama_laptop" class="form-control" value="<?php echo $data['nama_laptop']; ?>">
		<label class="form-label">Brand</label>
		<input type="text" name="brand" class="form-control" value="<?php echo $data['brand']; ?>">
		<label class="form-label">Type</label>
		<input type="text" name="type" class="form-control" value="<?php echo $data['type']; ?>">
		<label class="form-label">Tanggal Rilis</label>
		<input type="date" name="released" class="form-control" value="<?php echo $data['released']; ?>">
		<label class="form-label">Ukuran</label>
		<input type="text" name="dimension" class="form-control" value="<?php echo $data['dimension']; ?>">
		<label class="form-label">Berat</label>
		<input type="text" name="weight" class="form-control" value="<?php echo $data['weight']; ?>">
		<label class="form-label">Ukuran Layar</label>
		<input type="text" name="resolution" class="form-control" value="<?php echo $data['resolution']; ?>">
		<label class="form-label">OS</label>
		<input type="text" name="os" class="form-control" value="<?php echo $data['os']; ?>">
		<label class="form-label">Prosesor</label>
		<input type="text" name="processor" class="form-control" value="<?php echo $data['processor']; ?>">
		<label class="form-label">Kartu Grafis</label>
		<input type="text" name="graphic_card" class="form-control" value="<?php echo $data['graphic_card']; ?>">
		<label class="form-label">RAM</label>
		<input type="text" name="ram" class="form-control" value="<?php echo $data['ram']; ?>">
		<label class="form-label">Penyimpanan</label>
		<input type="text" name="storage" class="form-control" value="<?php echo $data['storage']; ?>">
		<label class="form-label">Jaringan</label>
		<textarea name="network" class="form-control"><?php echo $data['network']; ?></textarea>
		<label class="form-label">Fitur</label>
		<textarea name="features" class="form-control"><?php echo $data['features']; ?></textarea>
		<label class="form-label">Baterai</label>
		<textarea name="battery" class="form-control"><?php echo $data['battery']; ?> </textarea>
		<label class="form-label">Port</label>
		<textarea name="port" class="form-control"><?php echo $data['port']; ?></textarea>
		<label class="form-label">Warna</label>
		<textarea name="color" class="form-control"><?php echo $data['color']; ?></textarea>
		<label class="form-label">Harga</label>
		<input type="number" name="price" class="form-control" value="<?php echo $data['price']; ?>">
		<input class="btn" type="submit" name="edit" value="Edit Data" style="width: auto; padding: 10px 10px;">&nbsp;&nbsp;
	</form>
	<hr>
</div>
</div>
<?php
}
?>