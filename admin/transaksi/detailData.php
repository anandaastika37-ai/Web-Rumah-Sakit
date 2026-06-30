<?php

include '../funtion/funtion.php';

$id = $_GET['id'];
$detailData = query("SELECT * FROM pasien WHERE id_pasien = $id");

$datail = mysqli_fetch_assoc($detailData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dokter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="detail-container">
        <div class="detail">
            <div class="detail-img">
                <img src="img/gambar-dokter.jpg" alt="">
                <button><a href="index.php">back</a></button>
            </div>
            <div class="detail-des">
                <div class="ket">
                    <h3><?= $datail['nama_panggilan_pasien'] ?></h3>
                    <ul>
                        <li><i class="fa-solid fa-hospital-user"></i> <?= $datail['nama_lengkap_pasien'] ?></li>
                        <li><i class="fa-regular fa-id-card"></i> <?= $datail['nomor_id_pasien'] ?></li>
                        <li><i class="fa-solid fa-mars-and-venus"></i> <?= $datail['gender'] ?></li>
                        <li><i class="fa-regular fa-building"></i> <?= $datail['tempat_lahir_pasien'] ?></li>
                        <li><i class="fa-solid fa-cake-candles"></i> <?= $datail['tanggal_lahir_pasien'] ?></li>
                        <li><i class="fa-solid fa-droplet"></i> <?= $datail['golongan_darah'] ?></li>
                    </ul>
                </div>
                <div class="ket">
                    <ul>
                        <li><i class="fa-solid fa-database"></i> <?= $datail['pekerjaan'] ?></li>
                        <li><i class="fa-solid fa-database"></i> <?= $datail['nik'] ?></li>
                        <li><i class="fa-solid fa-database"></i> <?= $datail['agama'] ?></li>
                        <li><i class="fa-solid fa-database"></i> <?= $datail['alamat'] ?></li>
                        <li><i class="fa-solid fa-database"></i> <?= $datail['status_pernikahan'] ?></li>
                        <li><i class="fa-solid fa-database"></i> <?= $datail['email'] ?></li>  
                        <li><i class="fa-solid fa-database"></i> <?= $datail['no_hp'] ?></li>  
                    </ul>
                </div>
                <div class="ket">
                    <ul>
                        <li><i class="fa-solid fa-database"></i> <?= $datail['jenis_kunjungan'] ?></li>  
                        <li><i class="fa-solid fa-database"></i> <?= $datail['status_kunjungan'] ?></li>  
                        <li><i class="fa-solid fa-database"></i> <?= $datail['nama_penanggung_jawab'] ?></li>  
                        <li><i class="fa-solid fa-database"></i> <?= $datail['hubungan_dengan_pasien'] ?></li>  
                        <li><i class="fa-solid fa-database"></i> <?= $datail['alamat_penanggung_jawab'] ?></li>  
                        <li><i class="fa-solid fa-database"></i> <?= $datail['no_hp_penanggung_jawab'] ?></li>  
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>