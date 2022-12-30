<?php
class database
{
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbnama = "Toko_Online";
	public $aksi;
	function __construct()
	{
		$this->koneksi();
	}

	function koneksi()
	{
		$this->aksi = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbnama);
		if (!$this->aksi) {
			$this->aksi->connect_error;
			return false;
		}

	}

	function loginAdmin($username, $password)
	{
		session_start();
		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$hasil = $this->aksi->query($sql) or die($this->aksi->error);
		while ($data = $hasil->fetch_array()) {
			if ($hasil) {
				$_SESSION['status'] = "login";
				echo "<script>alert('Anda Berhasil Login');document.location.href='index.php'</script>";
			}
		}
	}

	function logout()
	{
		session_start();
		$status = $_SESSION['status'];
		if ($status =="login") {
			session_destroy();
			header("location:loginAdmin.php?pesan=sudah_logout"); 
		}
	}

	function validasi()
	{
		if ($_SESSION['status'] != "login")
		{
			header("location:loginAdmin.php");
		}
	}

	function tampil ($sql)
	{
		$hasil = $this->aksi->query($sql) or die($this->aksi->error);
		if ($hasil) {
			return $hasil;
		}
	}

	function TambahData($kode,$nama,$brand,$type,$released,$dimension,$weight,$resolution,$os,$processor,$graphic,$ram,$storage,$network,$features,$battery,$port,$color,$price,$gbrNama)
	{
		$sql = "INSERT INTO laptop VALUES('', '$kode','$nama','$gbrNama')";
		$sql1 = "INSERT INTO spesifikasi VALUES('$kode','$brand','$type','$released','$dimension','$weight','$resolution','$os','$processor','$graphic','$ram','$storage','$network','$features','$battery','$port','$color','$price')";
		$hasil = $this->aksi->query($sql) or die($this->aksi->error);
		$hasil = $this->aksi->query($sql1) or die($this->aksi->error);
	}

	function EditData($id,$kode,$nama,$brand,$type,$released,$dimension,$weight,$resolution,$os,$processor,$graphic,$ram,$storage,$network,$features,$battery,$port,$color,$price)
	{
		$sql = "UPDATE laptop SET kode_laptop = '$kode', nama_laptop = '$nama' WHERE kode_laptop = '$id'";
		$sql1 = "UPDATE spesifikasi SET kode_laptop = '$kode',brand = '$brand', type = '$type', released = '$released', dimension = '$dimension', weight = '$weight', resolution = '$resolution', os = '$os', processor = '$processor', graphic_card = '$graphic', ram = '$ram', storage = '$storage', network = '$network', features = '$features', battery = '$battery', port = '$port', color = '$color', price = '$price' where kode_laptop = '$id'";

		$hasil = $this->aksi->query($sql) or die($this->aksi->error);
		$hasil = $this->aksi->query($sql1) or die($this->aksi->error);
	}

	function HapusData($id)
	{
		$sql = "DELETE laptop, spesifikasi FROM laptop INNER JOIN spesifikasi WHERE laptop.kode_laptop=spesifikasi.kode_laptop AND laptop.kode_laptop = '$id'";
		$hasil = $this->aksi->query($sql) or die($this->aksi->error);
		if ($hasil) {
			echo "<script>alert('Data Berhasil Dihapus');document.location.href='index.php?page=data_laptop'</script>";
		}
	}
	function HapusReport($id)
	{
		$sql = "DELETE FROM `report` WHERE id_report = '$id'";
		$hasil = $this->aksi->query($sql) or die($this->aksi->error);
		if ($hasil) {
			echo "<script>alert('Data Berhasil Dihapus');document.location.href='index.php?page=report'</script>";
		}
	}
}
?>