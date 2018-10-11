<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "regis";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung SILAHKAN COBA LAGI: " . mysqli_connect_error());
}

?>