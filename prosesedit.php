<?php 
 
include 'koneksi.php';
$nama = $_POST['nama'];
$id = $_POST['nim'];
$alamat = $_POST['alamat'];
$pass = $_POST['pass'];
 
mysql_query("UPDATE tugasakhir6 SET nama= $nama,  nim=$id, alamat=$alamat, pass=$pass");
 
header("location:index.php?pesan=update");
?>