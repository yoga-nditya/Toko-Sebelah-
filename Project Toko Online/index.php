<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("location: loginUser.php");
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Online</title>
	<link rel="stylesheet" type="text/css" href="./user/style.css">
</head>
<body>
	<nav class="navbar">
	<h1>TokoSebelah</h1>
		<ul class="nav-links">
		<li><a href="index.php" class="nav-btn ">Home</a></li>
			<li><a href="?page=brands" class="nav-btn ">Brand</a></li>
			<li><a href="?page=search" class="nav-btn">Compare</a></li>
			<li><a href="?page=report" class="nav-btn">Report</a></li>
			<li><a href="Logout.php" class="">Logout</a></li>
		</ul>
	</nav>
	<section>
		<?php
		
		if (isset($_GET['page'])){
			$page = $_GET['page'];
		}else{
			$page = "home";
		}
		switch ($page) {
			case 'search':
				include 'user/search-form.php';
				break;
			case 'specification':
				include 'user/specification.php';
				break;
			case 'brands':
				include 'user/brands.php';
				break;
			case 'brand':
				include 'user/brand.php';
				break;
			case 'report':
				include 'user/report.php';
				break;
			default:
				include 'user/home.php';
				break;
		}
		?>
	</section>
</body>
</html>
