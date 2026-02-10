<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
    "SELECT * FROM users 
     WHERE username='$username' 
     AND password='$password'"
);

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    header("location:dashboard.php");
} else {
    echo "Login gagal! Username atau password salah";
}
if ($cek > 0) {
    $_SESSION['password'] = $password;
    header("location:dashboard.php");
    
}
