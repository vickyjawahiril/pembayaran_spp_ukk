<?php

session_start();
if(empty($_SESSION['nisn'])){
    echo "<script>alert('Maaf Anda belum Login');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charshet="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Siswa - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

        <h3>Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">
            Anda Login Sebagai Siswa<b><?= $_SESSION['nama'] ?></b> Aplikasi Pembayaran SPP
        </div>
        <a href="siswa.php" class="btn btn-primary">Siswa</a>
        <a href="siswa.php?url=logout" class="btn btn-primary">LogOut</a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- isi webnya -->
                <?php
            $file = @$_GET['url'];
            if (empty($file)){
                echo "<h4> Selamat Datang di halaman Siswa</h4>";
                echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                echo"<hr>";
                include'history-pembayaran.php';
                }
                
            else{

                include $file.'.php';
            }
            ?>

            </div>
        </div>

    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>