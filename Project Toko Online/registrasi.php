<?php
require_once __DIR__ . '/user/conn.php';

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script> 
        alert('user berhasil ditambahkan silahkan login');
        document.location.href = 'login.php';
        </script>";
    } else {
        "<script> 
        alert('Registrasi Gagal');
        document.location.href = 'registrasi.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Registrasi akun</p>
        <p class="tulisan_login"></p>
        <form method="POST" action="">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username">
            <label>Password</label>
            <input type="password" name="password1" class="form_login" placeholder="Password">
            <label>Konfirmasi Password</label>
            <input type="password" name="password2" class="form_login" placeholder="Konfirmasi Password">
            <button type="submit" name="registrasi" class="tombol_login">Register</button>
        </form>
        <p>Sudah punya akun? <a href="loginUser.php">Login di sini</a></p>
    </div>
</body>

</html>