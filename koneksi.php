<?php

$server = "localhost";
$user = "root";
$password = "";
$nmdatabase = "regis";

$db = mysqli_connect($server, $user, $password, $nmdatabase);

if( !$db ){
    die("Gagal terhubung SILAHKAN COBA KEMBALI: " . mysqli_connect_error());
}

?>