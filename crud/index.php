<!DOCTYPE html>
<html>
<head>
    <title>Halaman Data Mahasiswa</title>
</head>
<body>
<h2>Data Mahasiswa</h2>
<a href="form-input.php" style="border-radius:2px;padding:0.4% 0.8%;background-color:cornflowerblue;text-decoration:none;">Tambah Data</a><br><br>
<table border="1" cellspacing="0" width ="50%"> 
    <tr style="text-align:center;font-weight:bold;">
        <td>No</td>
        <td>NIM</td>
        <td>nama Mahasiswa</td>
        <td>Nomor Ponsel</td>
        <td>Email</td>
        <td>Jurusan</td>
        <td>Opsi</td>
    </tr>
<?php
include 'koneksi.php';
$no = 1;
$select = mysqli_query($conn, "SELECT * FROM mahasiswa");
if(mysqli_num_rows($select) > 0 ){
while($hasil = mysqli_fetch_array($select)) {
?>
<tr style="text-align:center;">
    <td><?php echo $no++ ?></td>
    <td><?php echo $hasil ['NIM'] ?></td>
    <td><?php echo $hasil ['nama'] ?></td>
    <td><?php echo $hasil ['nomor_ponsel'] ?></td>
    <td><?php echo $hasil ['email'] ?></td>
    <td><?php echo $hasil ['jurusan'] ?></td>
    <td>
        <a href="form-edit.php?NIM=<?php echo $hasil ['NIM'] ?>">Edit</a>
        <a href="delete.php?NIM=<?php echo $hasil ['NIM'] ?>">Hapus</a>
    </td>
</tr>
<?php }}else { ?>
    <tr>
        <td colspan="7" align="center">Data kosong</td>
    </tr>
<?php } ?>
</table>
</body>
</html>