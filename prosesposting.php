<?php
include ('conn.php');

 if (isset($_POST['save'])){
 $fileName = $_FILES['gambar']['name'];
 $posting = $_FILES['cerita'];

  $sql = "insert into simpan (gambar, keterangan, cerita) values ('$fileName', '".$_POST['keterangan']."', '$cerita')";

  mysql_query($sql);
  move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";

   if( $sql ) {
        header('Location: daftarposting.php');
    } else {
        header('Location: daftarposting.php?status=gagal');
    } 
 } 
?>
<p>
<a href="daftarposting.php"></a>
</p>