<?php 
session_start();
 
include '../conn.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);

// echo $username;
// echo $password;
 
$data = mysqli_query($conn,"SELECT * FROM tb_user WHERE name_user='$username' and password='$password'");
$id = mysqli_fetch_array($data);
$id_user = $id['id_user'];
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $_SESSION['id_user'] = $id_user;
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:main/home_main.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>