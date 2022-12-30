<?php
session_start();
include 'config/class.php';
$db = new database();

if (isset($_GET['aksi'])) {
	if ($_GET['aksi'] == "logout") {
		$db->logout();
	} elseif ($_GET['aksi'] == "hapus_laptop") {
		$id = $_GET['id'];
		$db->HapusData($id);
	} elseif ($_GET['aksi'] == "hapus_laporan") {
		$id = $_GET['id'];
		$db->HapusReport($id);
	}
} else {
	$db->validasi();
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>SpecLap</title>
	<link rel="stylesheet" type="text/css" href="css/loginAdmin.css" />
</head>

<body>
	<div class="container">
		</header>
		<aside>
			<nav>
				<ul id="menu">
					<li class="menu-item">
						<a href="index.php">Dashbord</a>
					</li>
					<li class="menu-item">
						<a href="?page=data_laptop">Data Laptop</a>
					</li>
					<li class="menu-item">
						<a href="?page=report">Data Laporan</a>
					</li>
					</li>
					<li class="menu-item">
						<a href="#">&nbsp;</a>
					</li>
					<li class="menu-item">
						<a onclick="return KonfirLogout()" href="?aksi=logout" class="">Logout</a>
					</li>
				</ul>
			</nav>
		</aside>
		<section>
			<?php
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			} else {
				$page = "home";
			}
			switch ($page) {
				case 'report':
					include 'report.php';
					break;
				case 'detail_report':
					include 'detail-report.php';
					break;
				case 'data_laptop':
					include 'data_laptop.php';
					break;
				case 'detail_laptop':
					include 'detail_laptop.php';
					break;
				case 'tambah_data':
					include 'tambah_data.php';
					break;
				case 'edit_data':
					include 'edit_data.php';
					break;

				default:
					include 'home.php';
					break;
			}
			?>
		</section>
		<br class="clearfloat" />

</body>

</html>
<script type="text/javascript">
	function konfirmasi() {
		var tanya = confirm("Yakin ingin menghapus data ini?");
		if (tanya == true) return true;
		else return false;
	}
</script>
<script type="text/javascript">
	function KonfirLogout() {
		var tanya = confirm("Yakin ingin Logout?");
		if (tanya == true) return true;
		else return false;
	}
</script>