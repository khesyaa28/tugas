<?php 
session_start();
include 'koneksi1.php';

$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];

$data= mysqli_query($koneksi,"select * from admin where id='$id'username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/whe.php");
}else {
    header("location:home.php?pesan=gagal");
}
?>