<!DOCTYPE html>
<html>
<head>
    <title>Halaman Input Data</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <a href="index.php" style="border-radius:2px;padding:0.4% 0.8%;background-color:cornflowerblue;text-decoration:none;">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><Input type="text" name="nim" placeholder="Nim" require></td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><Input type="text" name="nama" placeholder="Nama Lengkap" require></td>
                <td></td>
            </tr>
            <tr>
                <td>nomor ponsel</td>
                <td>:</td>
                <td><Input type="text" name="telp" placeholder="nomor ponsel" require></td>
                <td></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><Input type="email" name="email" placeholder="Email" required></td>
                <td></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="Jurusan"> 
                        <option value="Informatika">Informatika</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Matematika">Matematika</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><Input type="submit" name="simpan" value="Simpan"</td>
                <td></td>
            </tr>
        </table>
    </form>
    <?php
    include 'koneksi.php';
    if(isset($_POST['simpan']))
    {
        $insert = mysqli_query($conn, " INSERT INTO mahasiswa VALUES
                ('".$_POST['nim']."',
                '".$_POST['nama']."',
                '".$_POST['telp']."',
                '".$_POST['email']."',
                '".$_POST['Jurusan']."')");
            if($insert)
            {
                echo 'berhasil disimpan';
            }
            else
            {
                echo 'gagal disimpan' .mysqli_error($conn);
            }
    }
    ?>
</body>
</html>