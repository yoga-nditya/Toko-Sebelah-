<?php
function koneksi()
{
    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "Toko_Online";
    //menghubungkan ke database
    return $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

}

function query($query)
{
    $connection = koneksi();

    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
  }

  return $rows;

}

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if($password1 !== $password2) {
        echo "<script> alert('password tidak sesuai')</script>";

        return false;
    }

    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user(username, password) VALUES('$username','$password_baru')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}

function loginUser($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if($user = query("SELECT * FROM user WHERE username = '$username'")) {
        
    if(password_verify($password, $user['password'])) {
            //set session
            $_SESSION['login'] = true;
    
        header('Location: index.php');
        exit();
        }
        //set session
        $_SESSION['login'] = true;
    
        header('Location: index.php');
        exit();
    }
        return[
            'error' => true, 
            'pesan' => 'username/password salah!'
        ]; 
}