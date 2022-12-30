<?php
session_start();

if(isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}

require_once __DIR__ . '/user/conn.php';

if(isset($_POST['login'])) {
    $login = loginUser($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body class="login_body">
    <?php if (isset($error)) : ?>
        <h3 style="color: red;">Username / Password Salah </h3>
    <?php endif ?>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
        <p class="tulisan_login"></p>
        <form method="POST" action="">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password">
            <input type="submit" name="login" class="tombol_login" value="LOGIN">
        </form>
        <p>Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
    </div>
</body>
</html>