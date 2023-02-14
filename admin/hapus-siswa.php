<?php

$nisn = $_GET['nisn'];

include '../koneksi.php';
$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("location:?url=siswa");
}else{
    echo "<script>alert('Maaf Data Anda tidak bisa di Hapus'); window.location.assign('?url=siswa);</script>";
}