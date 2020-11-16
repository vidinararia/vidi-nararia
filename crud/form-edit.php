<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE NIM = '".$_GET['NIM']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <a href="index.php" style="border-radius:2px;padding:0.4% 0.8%;background-color:cornflowerblue;text-decoration:none;">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><Input type="text" name="nim" value="<?php echo $result['NIM']?>" require></td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><Input type="text" name="nama" value="<?php echo $result['nama']?>" require></td>
                <td></td>
            </tr>
            <tr>
                <td>nomor ponsel</td>
                <td>:</td>
                <td><Input type="text" name="telp" value="<?php echo $result['nomor_ponsel']?>" require></td>
                <td></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><Input type="email" name="email" value="<?php echo $result['email']?>" required></td>
                <td></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="Jurusan">
                        <option value="<?php echo $result['jurusan'] ?>"><?php echo $result['jurusan']?></option> 
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
                <td><Input type="submit" name="edit" value="Simpan"></td>
                <td></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE mahasiswa SET nama = '".$_POST['nama']."',
        nomor_ponsel = '".$_POST['telp']."', email = '".$_POST['email']."', jurusan = '".$_POST['Jurusan']."'
        WHERE NIM = '".$_GET['NIM']."'");
        if($update){
            echo 'berhasil edit';
        }else{
            echo 'gagal edit';
        }
    }
    ?>
</body>
</html>