<?php
include 'koneksi.php';
if(isset($_GET['NIM'])){
    $delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM = '".$_GET['NIM']."' ");
    header('location:index.php');
}
?>