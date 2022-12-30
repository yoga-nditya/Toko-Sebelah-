<?php
include 'conn.php';
$conn = koneksi();

if (isset($_POST['report'])) {
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$deskripsi = $_POST['deskripsi'];
	date_default_timezone_set('Asia/Jakarta');
	$date = date('Y-m-d H:i:s');


	$sql = mysqli_query($conn,"INSERT INTO report VALUES('','$date','$email','$subject','$deskripsi')");
	if($sql){
		echo '<script type="text/javascript">';
	        echo ' alert("Berhasil terkirim")';
	        echo '</script>';
	} else{
		echo '<script type="text/javascript">';
	        echo ' alert("Gagal!")';
	        echo '</script>';
	}
}




?>
	<style type="text/css">
		.lg-title{
		    font-size: 2.5rem;
		    font-weight: 500;
		    text-align: center;
		    padding: 1.3rem 0;
		    opacity: 0.9;
		}
		body{
			display: flex;
			margin-top: 80px;
			justify-content: center;
			align-items: center;
		}
		input[type=text] {
		 width: 100%;
		 padding: 12px 20px;
		 margin: 8px 0;
		 box-sizing: border-box;
		}
		input[type=email] {
		 width: 100%;
		 padding: 12px 20px;
		 margin: 8px 0;
		 box-sizing: border-box;
		}
		input[type=submit] {
		 background-color: #00bbff;
		  border: none;
		  color: white;
		  padding: 16px 32px;
		  text-decoration: none;
		  margin: 4px 2px;
		  cursor: pointer;
		}
		textarea {
		  width: 100%;
		  height: 150px;
		  padding: 12px 20px;
		  box-sizing: border-box;
		  border: 2px solid #ccc;
		  border-radius: 4px;
		  background-color: #f8f8f8;
		  resize: none;
		}
	</style>
<body>
	<h1 class = "lg-title">Report</h1>
		<form method="POST" enctype="multipart/form-data">
			<input type="email" name="email" placeholder="Your Email">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="deskripsi"></textarea>
			<br>
			<input type="submit" name="report" value="Laporkan">
		</form>
</body>
