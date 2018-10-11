<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>

<body>
    <header>
        <h3>Registrasi</h3>
    </header>

    <?php 
    include "koneksi.php";
    $id = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pass = $_POST['pass'];
    $query_mysql = mysql_query("SELECT * FROM tugasakhir6 WHERE nama= '$nama', alamat='$alamat', nim='$id', pass='$pass'")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>

    <form action="prosesedit.php" method="POST">


        <fieldset>
            <p>
                <label for="id">Nim: </label>
                <input type="text" name="id" placeholder="Nim" required value="<?php echo $data['id']?>">
            </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required value="<?php echo $data['nama']?>" >
        </p>
        <p>
            <label for="pass">Password: </label>
            <input type="text" name="pass" placeholder="Password" required="" value="<?php echo $data['pass']?>">
        </p>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="radio" name="kelas" value="D3MI4101" checked>D3MI4101<br/>  
                <input type="radio" name="kelas" value="D3MI4102">D3MI4102<br/>
                <input type="radio" name="kelas" value="D3MI4103">D3MI4103<br/>
                <input type="radio" name="kelas" value="D3MI4104">D3MI4104<br/></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jeniskelamin" value="Laki-laki" checked>Pria<br/>  
                <input type="radio" name="jeniskelamin" value="Perempuan">Wanita<br/></td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="hobi" value="Bola">Bola<br />
            <input type="checkbox" name="hobi" value="Mobile Legend">Mobile Legend<br />
            <input type="checkbox" name="hobi" value="Belanja">Belanja<br />
            <input type="checkbox" name="hobi" value="Main">Main<br /></td>
        </tr>

        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><select name="fakultas">
            <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
            <option value="Fakuktas Informatika">Fakultas Informatika</option>
            <option value="Fakultas Apa aja">Fakultas bebas</option></td>
        </tr>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required value="<?php echo $data['alamat']?>"></textarea>
        </p>
        <p>
            <input type="submit" value="Daftar" name="DAFTAR" />
        </p>

        </fieldset>

    </form>

    </body>