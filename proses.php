<?php

include("koneksi.php");


if(isset($_POST['daftar'])){

        $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pass = $_POST['pass'];
    $kelas = $_POST['kelas'];
    $kelamin = $_POST['kelamin'];
    $hobi = $_POST['hobi'];
    $fakultas = $_POST['fakultas'];

    
    $sql = "INSERT INTO tugasakhir6 (nim, nama, alamat, pass, kelas, kelamin, hobi, fakultas) 
    VALUE ('$id', '$nama', '$alamat', '$pass', '$kelas', '$kelamin', '$hobi', '$fakultas')";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
        header('Location: login.php');
    } else {

        header('Location: login.php?status=gagal');
    }


} else {
    die("Akses Tidak Terpenuhi");
}

?>