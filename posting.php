<form method="post" enctype="multipart/form-data" action="prosesposting.php">

<label for="alamat">Story: </label>
   
    <p><textarea name="cerita" required rows=20 cols=80></textarea></p>
	<td colspan="4">Upload Gambar (Ukuran Maks = 4 MB) : <input type="file" name="apaaja" required /> | 
 Keterangan : <input type="text" name="kete"  /> | 
		<input type="submit" value="Upload" name="save"></td>
</form>

<?php

 if (isset($_POST['save'])){
 $fileName = $_FILES['gambar']['name'];

  move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
 } 
?>