<?php
if (isset($_POST['tambah'])) {
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
	$gbrTmp = $_FILES['gambar']['tmp_name'];
	$gbrNama = $_FILES['gambar']['name'];

	$result = MOVE_UPLOADED_FILE($gbrTmp,'../asset/produk/'.$gbrNama);
	if($result){
		$db->TambahData($kode,$nama,$brand,$type,$released,$dimension,$weight,$resolution,$os,$processor,$graphic,$ram,$storage,$network,$features,$battery,$port,$color,$price,$gbrNama);
	echo "<script>alert('Data Berhasil Datambahkan');document.location.href='index.php?page=data_laptop'</script>";
} else {
	echo "<script>alert('Gagal upload foto');document.location.href='index.php?page=data_laptop'</script>";
}

	
}

?>
<div style="font-family">
<h1>Tambah Data</h1>
<h3>Laptop</h3>
<a href="?page=data_laptop">Kembali</a>
<div class="main-content">
	<form class="input-form" method="POST" enctype="multipart/form-data">
		<label class="form-label">Gambar</label>
		<input type="file" name="gambar" >
		<label class="form-label">Kode Laptop</label>
		<input type="text" name="kode_laptop" class="form-control">
		<label class="form-label">Nama Lapatop</label>
		<input type="text" name="nama_laptop" class="form-control">
		<label class="form-label">Brand</label>
		<input type="text" name="brand" class="form-control">
		<label class="form-label">Type</label>
		<input type="text" name="type" class="form-control">
		<label class="form-label">Tanggal Rilis</label>
		<input type="date" name="released" class="form-control">
		<label class="form-label">Ukuran</label>
		<input type="text" name="dimension" class="form-control">
		<label class="form-label">Berat</label>
		<input type="text" name="weight" class="form-control">
		<label class="form-label">Ukuran Layar</label>
		<input type="text" name="resolution" class="form-control">
		<label class="form-label">OS</label>
		<input type="text" name="os" class="form-control">
		<label class="form-label">Prosesor</label>
		<input type="text" name="processor" class="form-control">
		<label class="form-label">Kartu Grafis</label>
		<input type="text" name="graphic_card" class="form-control">
		<label class="form-label">RAM</label>
		<input type="text" name="ram" class="form-control">
		<label class="form-label">Penyimpanan</label>
		<input type="text" name="storage" class="form-control">
		<label class="form-label">Jaringan</label>
		<textarea name="network" class="form-control"></textarea>
		<label class="form-label">Fitur</label>
		<textarea name="features" class="form-control"></textarea>
		<label class="form-label">Batterai</label>
		<input type="text" name="battery" class="form-control">
		<label class="form-label">Port</label>
		<textarea name="port" class="form-control"></textarea>
		<label class="form-label">Warna</label>
		<textarea name="color" class="form-control"></textarea>
		<label class="form-label">Harga</label>
		<input type="number" name="price" class="form-control">
		<input class="btn" type="submit" name="tambah" value="Tambah" style="width: auto; padding: 10px 10px;">&nbsp;&nbsp;
	</form>
	<hr>
</div>
</div>