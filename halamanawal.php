<?php
include "koneksi.php";
$query = mysqli_query($db,"SELECT * FROM tugasakhir6");
?>

<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
      
        <tr>
            <th>No</th>
            <th>nim</th>
            <th>nama</th>
            <th>alamat</th>
            <th>password</th>
            <th>kelas</th>
            <th>kelamin</th>
            <th>hobi</th>
            <th>fakultas</th>
        </tr>
        
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>

        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["alamat"];?></td>
            <td><?php echo $data["pass"];?></td>
            <td><?php echo $data["kelas"];?></td>
            <td><?php echo $data["kelamin"];?></td>
            <td><?php echo $data["hobi"];?></td>
            <td><?php echo $data["fakultas"];?></td>
            <td>
                <a href="posting.php">Posting</a> |
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>s