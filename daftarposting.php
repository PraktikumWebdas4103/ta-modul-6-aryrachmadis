<?php 
include "conn.php"; 
$sql = "select * FROM simpan";
$tampil = mysql_query($sql);
while ($data = mysql_fetch_array($tampil)){
// Tampilkan Gambar
echo "<img src='gambar/".$data['gambar']."' width='100px' height='100px'/>";
echo "</br>";
echo $data['keterangan'];
}
?>
 <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            	?>
            	 <?php echo $data["cerita"];?>
            	}
            ?>
            <a href="semuaposting.php"></a>