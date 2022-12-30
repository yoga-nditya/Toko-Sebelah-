<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/loginAdmin.css">
</head>
<body>
<?php
require_once __DIR__ . '/config/class.php';
$db = new database();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$db->loginAdmin($username, $password);
}
?>
<div class="kotak_login">
	<p class="tulisan_login">Silahkan login admin</p>
		<form method="POST" action="">	
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">
			<input type="submit" name="login" class="tombol_login" value="LOGIN">
		</form>
	<?php
	if (isset($_GET['pesan'])) {
		if($_GET['pesan'] == "sudah_logout"){
			echo "<font color='green'>Anda Berhasil Logout</font>";
		}elseif ($_GET['pesan'] == "belum_login") {
			echo "<font color='red'>Silahkan Login Untuk Masuk Ke Halaman ADMIN</font>";
		}
	}
	?>
</div>
</body>
</html>