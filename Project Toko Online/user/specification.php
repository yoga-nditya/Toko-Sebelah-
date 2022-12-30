<?php
include 'conn.php';

$conn = koneksi();

$s1 = $_GET['src1'];
$s2 = $_GET['src2'];
$sql = mysqli_query($conn,"SELECT * FROM laptop INNER JOIN spesifikasi ON laptop.kode_laptop = spesifikasi.kode_laptop WHERE laptop.kode_laptop = '$s1'");
$data = mysqli_fetch_array($sql);
$sql2 = mysqli_query($conn,"SELECT * FROM laptop INNER JOIN spesifikasi ON laptop.kode_laptop = spesifikasi.kode_laptop WHERE laptop.kode_laptop = '$s2'");
$data2 = mysqli_fetch_array($sql2);
if($s2 == "NULL"){
	$nama = "";
	$gambar = "";
	$brand = "";
	$type = "";
	$released = "";
	$dimension = "";
	$weight = "";
	$resolution = "";
	$os = "";
	$processor = "";
	$graphic = "";
	$ram = "";
	$storage = "";
	$network = "";
	$features = "";
	$battery = "";
	$port = "";
	$color = "";
	$price = "";
} else {
	$nama = "<td width=350>".$data2['nama_laptop']."</td>";
	$gambar = "<td><img width=325 src=asset/produk/".$data2['gambar']."></td>";
	$brand = "<td>".$data2['brand']."</td>";
	$type = "<td>".$data2['type']."</td>";
	$released = "<td>".$data2['released']."</td>";
	$dimension = "<td>".$data2['dimension']."</td>";
	$weight = "<td>".$data2['weight']."</td>";
	$resolution = "<td>".$data2['resolution']."</td>";
	$os = "<td>".$data2['os']."</td>";
	$processor = "<td>".$data2['processor']."</td>";
	$graphic = "<td>".$data2['graphic_card']."</td>";
	$ram = "<td>".$data2['ram']."</td>";
	$storage = "<td>".$data2['storage']."</td>";
	$network = "<td>".$data2['network']."</td>";
	$features = "<td>".$data2['features']."</td>";
	$battery = "<td>".$data2['battery']."</td>";
	$port = "<td>".$data2['port']."</td>";
	$color = "<td>".$data2['color']."</td>";
	$price = "<td>"."Rp. " .number_format($data2['price'], 0, '', '.')."</td>";
}
?>
<style type="text/css">
	body{
		padding-top: 90px;
	}
table{
 width: 80%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
	 padding: 15px 20px;
	 text-align: center;
}
th{
	width: 150px;
	 background-color: #00bbff;
	 color: #fafafa;
	 font-family: 'Open Sans',Sans-serif;
	 font-weight: 200;
	 text-transform: uppercase;

}
tr{
	 width: 100%;
	 background-color: #fafafa;
	 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 	background-color: #eeeeee;
}
</style>
<body>
	<div class="main-content">
		<table border="0">
		<tr>
			<td></td>
			<td width="350"><?php echo $data['nama_laptop']?></td>
			<?php echo $nama ?>

		</tr>
		<tr>
			<td></td>
			<td><img width="325" src="asset/produk/<?php echo $data['gambar']?>"></td>
			<?php echo $gambar ?>
		</tr>
		<tr>
			<th>brand</th>
			<td><?php echo $data['brand']?></td>
			<?php echo $brand ?>
		</tr>
		<tr>
			<th>type</th>
			<td><?php echo $data['type']?></td>
			<?php echo $type ?>
		</tr>
		<tr>
			<th>tanggal rilis</th>
			<td><?php echo $data['released']?></td>
			<?php echo $released ?>
		</tr>
		<tr>
			<th>ukuran</th>
			<td><?php echo $data['dimension']?></td>
			<?php echo $dimension ?>
		</tr>
		<tr>
			<th>berat</th>
			<td><?php echo $data['weight']?></td>
			<?php echo $weight ?>
		</tr>
		<tr>
			<th>resolusi</th>
			<td><?php echo $data['resolution']?></td>
			<?php echo $resolution ?>
		</tr>
		<tr>
			<th>os</th>
			<td><?php echo $data['os']?></td>
			<?php echo $os ?>
		</tr>
		<tr>
			<th>prosesor</th>
			<td><?php echo $data['processor']?></td>
			<?php echo $processor ?>
		</tr>
		<tr>
			<th>kartu grafis</th>
			<td><?php echo $data['graphic_card']?></td>
			<?php echo $graphic ?>
		</tr>
		<tr>
			<th>ram</th>
			<td><?php echo $data['ram']?></td>
			<?php echo $ram ?>
		</tr>
		<tr>
			<th>penyimpanan</th>
			<td><?php echo $data['storage']?></td>
			<?php echo $storage ?>
		</tr>
		<tr>
			<th>network</th>
			<td><?php echo $data['network']?></td>
			<?php echo $network ?>
		</tr>
		<tr>
			<th>fitur</th>
			<td><?php echo $data['features']?></td>
			<?php echo $features ?>
		</tr>
		<tr>
			<th>baterai</th>
			<td><?php echo $data['battery']?></td>
			<?php echo $battery ?>
		</tr>
		<tr>
			<th>port</th>
			<td><?php echo $data['port']?></td>
			<?php echo $port ?>
		</tr>
		<tr>
			<th>warna</th>
			<td><?php echo $data['color']?></td>
			<?php echo $color ?>
		</tr>
		<tr>
			<th>harga</th>
			<td><?php echo "Rp. " .number_format($data['price'], 0, '', '.')?></td>
			<?php echo $price ?>
		</tr>
	</table>
	</div>
	
</body>
</html>