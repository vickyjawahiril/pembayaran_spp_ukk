<?php

$id_spp = $_GET['id_spp'];

include '../koneksi.php';
$sql = "DELETE FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("location:?url=spp");
}else{
    echo "<script>alert('Maaf Data Anda tidak bisa di Hapus'); window.location.assign('?url=spp);</script>";
}