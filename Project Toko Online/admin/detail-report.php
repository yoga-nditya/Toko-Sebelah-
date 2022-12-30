
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
	<?php
	$id = $_GET['id'];

	$sql = "SELECT * FROM report WHERE id_report = '$id'";
	$baca = $db->tampil($sql);
	while ($data = $baca->fetch_array()) {
	?>
	<h1 class = "lg-title">Report id <?php echo $data['id_report'];?></h1>
		Tanggal
		<input type="email" name="email" placeholder="Your Email" value="<?php echo $data['tanggal']?>" readonly>
		Dari
		<input type="email" name="email" placeholder="Your Email" value="<?php echo $data['email']?>" readonly> 
		Subject
		<input type="text" name="subject" placeholder="Subject" value="<?php echo $data['subject']?>" readonly>
		Deskripsi
		<textarea name="deskripsi" readonly><?php echo $data['deskripsi'] ?>?></textarea>
		<br>
		<?php
}
		?>
</body>