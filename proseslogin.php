<?php 
include 'koneksi.php';

$id = $_POST['id'];
$password = md5($_POST['pass']);

$login = mysqli_query("select * from registrasi where nim='$id' and pass='$pass'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();

	$_SESSION['id'] = $id;
	$_SESSION['status'] = "login";
	
	header("location:halamanawal.php");
}else{
	header("location:halamanawal.php");	
}

?>