<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>

<body>
    <header>
        <h3>Registrasi</h3>
    </header>

    <form action="proses.php" method="POST">


<body>

<form action="login.php" method="POST">
    <table>

        <tr><td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" </td>
        </tr>

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

        <tr><td>Alamat</td>
            <td>:</td>
            <td><input type="textarea" name="Alamat"></td>
        </tr>

<br>
        <tr>
            <td><input type="submit" name="submit" value="Enter"></td>
        </tr>
    </table>
</form>

</body>
</html>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <input type="submit" value="SUBMIT" name="UBMIT" />
        </p>

        </fieldset>

    </form>

    </body>
