<?php

$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

include '../koneksi.php';
$sql = "INSERT INTO kelas(nama_kelas,kompetensi_keahlian) VALUES('$nama_kelas','$kompetensi_keahlian')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("location:?url=kelas");
}else{
    echo "<script>alert('Maaf Data Anda tidak bisa di Proses'); window.location.assign('?url=kelas);</script>";
}